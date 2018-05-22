#include "contiki.h"
#include "ti-lib.h"
#include "driverlib/aux_adc.h"
#include "driverlib/aux_wuc.h"
#include "net/rime/rime.h"
#include <stdio.h>
#include <string.h>

static struct etimer et;
char buf[16];


PROCESS(p1, "p1");
AUTOSTART_PROCESSES(&p1);

static void recv_uc(struct unicast_conn *c, const linkaddr_t *from){
    printf("%s%u.%u\n",(char *)packetbuf_dataptr(),from->u8[0], from->u8[1]);
}

static void sent_uc(struct unicast_conn *c, int status, int num_tx){
  const linkaddr_t *dest = packetbuf_addr(PACKETBUF_ADDR_RECEIVER);
  if(linkaddr_cmp(dest, &linkaddr_null)) return;
}

static const struct unicast_callbacks unicast_callbacks = {recv_uc, sent_uc};
static struct unicast_conn uc;

PROCESS_THREAD(p1, ev, data){
    
    PROCESS_EXITHANDLER(unicast_close(&uc);)    
    PROCESS_BEGIN();
    unicast_open(&uc, 20, &unicast_callbacks);
    uint16_t x,y,z;
    etimer_set(&et, CLOCK_SECOND);
    while(1){
        linkaddr_t addr;
        if(ev == PROCESS_EVENT_TIMER && etimer_expired(&et)) {
                ti_lib_aon_wuc_aux_wakeup_event(AONWUC_AUX_WAKEUP);
                while(!(ti_lib_aon_wuc_power_status_get() & AONWUC_AUX_POWER_ON)){ }
                ti_lib_aux_wuc_clock_enable(AUX_WUC_ADI_CLOCK | AUX_WUC_ANAIF_CLOCK | AUX_WUC_SMPH_CLOCK);
                while(ti_lib_aux_wuc_clock_status(AUX_WUC_ADI_CLOCK | AUX_WUC_ANAIF_CLOCK | AUX_WUC_SMPH_CLOCK) != AUX_WUC_CLOCK_READY){ }
                
                AUXADCSelectInput(ADC_COMPB_IN_AUXIO7); 
                AUXADCEnableSync(AUXADC_REF_FIXED,  AUXADC_SAMPLE_TIME_2P7_US, AUXADC_TRIGGER_MANUAL);
                AUXADCGenManualTrigger();
                x = AUXADCReadFifo();
                AUXADCFlushFifo();

                AUXADCSelectInput(ADC_COMPB_IN_AUXIO6); 
                AUXADCEnableSync(AUXADC_REF_FIXED,  AUXADC_SAMPLE_TIME_2P7_US, AUXADC_TRIGGER_MANUAL);
                AUXADCGenManualTrigger();
                y = AUXADCReadFifo();
                AUXADCFlushFifo();
                
                AUXADCSelectInput(ADC_COMPB_IN_AUXIO5); 
                AUXADCEnableSync(AUXADC_REF_FIXED,  AUXADC_SAMPLE_TIME_2P7_US, AUXADC_TRIGGER_MANUAL);
                AUXADCGenManualTrigger();
                z = AUXADCReadFifo();
                AUXADCFlushFifo();

                memset(buf,0,16);
                sprintf(buf,"%d,%d,%d,", x,y,z);
                packetbuf_clear();
                packetbuf_copyfrom(&buf, 16);
                addr.u8[0] = 1;
                addr.u8[1] = 15;
                if(!linkaddr_cmp(&addr, &linkaddr_node_addr)) 
                    unicast_send(&uc, &addr);

                AUXADCDisable();
            }
            etimer_set(&et, CLOCK_SECOND);
            PROCESS_YIELD();
    }
  PROCESS_END();
}
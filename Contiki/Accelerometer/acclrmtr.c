#include "contiki.h"
#include "ti-lib.h"
#include "driverlib/aux_adc.h"
#include "driverlib/aux_wuc.h"
#include <stdio.h>
#define CLOCK_SECOND 8
static struct etimer et;

PROCESS(p1, "p1");
AUTOSTART_PROCESSES(&p1);

PROCESS_THREAD(p1, ev, data){
  PROCESS_BEGIN();
    uint16_t x,y,z;
    etimer_set(&et, CLOCK_SECOND);
    while(1){
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
                
                printf("%d, %d, %d\n",x,y,z);

                AUXADCDisable();
            }
            etimer_set(&et, CLOCK_SECOND);
            PROCESS_YIELD();
    }
  PROCESS_END();
}

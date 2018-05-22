#include "contiki.h"
#include "dev/cc26xx-uart.h"
#include "dev/serial-line.h"
#include "dev/leds.h"

#include <stdio.h>
#include  <string.h>

 PROCESS(test_serial, "Serial line test process");
 AUTOSTART_PROCESSES(&test_serial);

 PROCESS_THREAD(test_serial, ev, data)
 {
   PROCESS_BEGIN();
   cc26xx_uart_set_input(serial_line_input_byte);
  
   printf("Hello, world Serial line test\n");

   for(;;) {
     PROCESS_YIELD();
     if(ev == serial_line_event_message) {
       printf("received line: %s\n", (char *)data);
       if(strcmp(data,"ON")==0)
           leds_on(LEDS_GREEN);
       else if(strcmp(data,"OFF")==0)
           leds_off(LEDS_GREEN);
     }
   }
   PROCESS_END();
 }
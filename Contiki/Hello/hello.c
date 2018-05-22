#include "contiki.h"
#include <stdio.h>

PROCESS(hello1,"hello");
AUTOSTART_PROCESSES(&hello1);

PROCESS_THREAD(hello1,ev,data){
	PROCESS_BEGIN();
	printf("Hello, world\n");
	PROCESS_END();
}

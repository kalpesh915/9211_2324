#include<stdio.h>

/**
    create simple array and print size of it
    store values in array
*/

void main(){
    int ip[10];

    printf("\n Size of ip is %d bytes",sizeof(ip));

    ip[0] = 11;
    ip[1] = 67;
    ip[2] = 89;
    ip[3] = 99;
    ip[4] = 19;
    ip[5] = 91;
    ip[6] = 98;
    ip[7] = 59;
    ip[8] = 78;
    ip[9] = 67;

    printf("\n value is %d", ip[5]);
}

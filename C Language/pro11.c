#include<stdio.h>

/**
    swap two numbers with use of third variable
*/

void main(){
    int ip1, ip2, tmp;

    ip1 = 10;
    ip2 = 20;

    printf("\n before swap ip1 is %d and ip2 is %d", ip1, ip2);
    tmp = ip1;
    ip1 = ip2;
    ip2 = tmp;
    printf("\n after swap ip1 is %d and ip2 is %d", ip1, ip2);
}

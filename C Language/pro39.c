/**
    Data type   :   long unsigned int
    bytes       :   4
    bits        :   32
    usable      :   32
    sign bit    :   0bit
    value range :   2 ^ 32
    format char :   %lu
    note        :   never store negative numbers

*/

#include<stdio.h>

void main(){
    long unsigned int ip;

    printf("\n size of long unsigned int is %d bytes",sizeof(ip));

    printf("\n Enter any value for ip \t");
    scanf("%lu", &ip);

    printf("\n value of ip is %lu", ip);
}

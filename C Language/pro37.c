/**
    Data type   :   short unsigned int
    bytes       :   2
    bits        :   16
    usable      :   16
    sign bit    :   0bit
    value range :   2 ^ 16
    format char :   %u
    note        :   not able to store negative value
*/

#include<stdio.h>

void main(){
    short unsigned int ip;

    printf("\n size of short unsigned int is %d bytes",sizeof(ip));

    printf("\n Enter any value for ip \t");
    scanf("%u", &ip);

    printf("\n value of ip is %u", ip);
}

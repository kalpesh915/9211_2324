/**
    Data type   :   long signed int
    bytes       :   4
    bits        :   32
    usable      :   31
    sign bit    :   1bit
    value range :   2 ^ 31
    format char :   %ld

*/

#include<stdio.h>

void main(){
    long signed int ip;

    printf("\n size of long signed int is %d bytes",sizeof(ip));

    printf("\n Enter any value for ip \t");
    scanf("%ld", &ip);

    printf("\n value of ip is %ld", ip);
}

#include<stdio.h>

/**
    char data type
    bytes   1
    format  %c

    note    char data type used to store single
            character only,
*/

void main(){
    char ip;

    printf("\n size of character data type is %d bytes",sizeof(ip));

    printf("\n Enter any character \t");
    ip = getche(); /// get a single character
    printf("\n value of ip is %c", ip);
}

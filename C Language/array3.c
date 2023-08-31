#include<stdio.h>

/**
    create simple array and print size of it
    store values in array
*/

void main(){
    int ip[10] = {11, 22, 33, 44, 55, 66, 77, 88, 99, 111};

    printf("\n Size of ip is %d bytes",sizeof(ip));

    printf("\n value is %d", ip[5]); ///
}

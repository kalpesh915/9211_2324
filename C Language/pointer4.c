#include<stdio.h>

/**
    pointer with Array
*/

void main(){
    int ip1[] = {11, 22, 33, 44, 55, 66, 77, 88, 99, 111}, *ptr;

    ptr = &ip1;

    printf("\n First Address is %d value is %d", ptr, *ptr);
    ptr++;
    printf("\n First Address is %d value is %d", ptr, *ptr);
}

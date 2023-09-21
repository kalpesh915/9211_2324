#include<stdio.h>

/**
    pointer with Array
*/

void main(){
    int ip1[] = {11, 22, 33, 44, 55, 66, 77, 88, 99, 111}, *ptr,i;

    ptr = &ip1;

    for(i=0; i<10; i++){
        printf("\n First Address is %d value is %d", ptr, *ptr);
        ptr++;
    }
}

#include<stdio.h>

/**
    create a int, pointer access value of int with pointer
*/

void main(){
    int ip1 = 100, *ptr;

    printf("\n value of ip1 is %d", ip1);
    printf("\n Address of ip1 is %d", &ip1);

    /// assign address of ip1 to pointer
    ptr = &ip1;

    printf("\n value of ptr is %d", ptr);
    printf("\n Address of ptr is %d", &ptr);

    printf("\n *ptr is %d", *ptr);

    *ptr = 1000;
    printf("\n value of ip1 is %d", ip1);
}

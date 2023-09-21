#include<stdio.h>

/**
    double pointer
*/

void main(){
    int ip1, ip2, *ptr, **pptr;

    /// assign value to ip1
    ip1 = 10;

    /// assign address of ip1 to ptr
    ptr = &ip1;

    /// assign address of ptr to pptr
    pptr = &ptr;

    printf("\n **pptr is %d", **pptr);

    /// assign value to ip2
    ip2 = 20;

    /// assign address of ip2 to ptr
    ptr = &ip2;

    printf("\n **pptr is %d", **pptr);
}

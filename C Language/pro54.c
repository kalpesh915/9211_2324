/**
    example of lvalue error
*/


#include<stdio.h>

void main(){
    int ip1 = 10;
    printf("\n value of ip 1 is %d", ip1);
    ip1 = 10 + 5;
    printf("\n value of ip 1 is %d", ip1);
    10 + 10 = ip1; /// lvalue error
    printf("\n value of ip 1 is %d", ip1);
}

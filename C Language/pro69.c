#include<stdio.h>

/**
    assignment operator
    short hand operator
    compound assignment operator
*/

void main(){
    int ip = 10;

    printf("\n value of ip is %d", ip);
    ip = ip + 10;
    printf("\n value of ip is %d", ip);
    ip += 10;
    printf("\n value of ip is %d", ip);
    ip -= 10;
    printf("\n value of ip is %d", ip);
    ip *= 10;
    printf("\n value of ip is %d", ip);
    ip /= 10;
    printf("\n value of ip is %d", ip);
    ip %= 10;
    printf("\n value of ip is %d", ip);
}

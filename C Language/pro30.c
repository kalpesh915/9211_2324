/// local variable

#include<stdio.h>

void main(){
    int ip = 10;
    printf("\n value of ip is %d", ip);

    {
        int ip = 20;
        printf("\n value of ip is %d", ip);
    }

    {
        int ip = 30;
        printf("\n value of ip is %d", ip);
    }

    printf("\n value of ip is %d", ip);
}

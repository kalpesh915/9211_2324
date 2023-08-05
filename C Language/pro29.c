/// example of constant in c language

#include<stdio.h>

void main(){
    const int ip = 10;
    printf("\n value of ip is %d", ip);
    ip = 15; /// error constant cannot be modify
    printf("\n value of ip is %d", ip);
}

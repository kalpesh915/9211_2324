/**
    constant example
*/


#include<stdio.h>

void main(){
    const int ip = 10;
    printf("\n value of ip is %d",ip);
    ip = 20; /// const cannot modifie
    printf("\n value of ip is %d",ip);
}

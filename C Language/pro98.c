#include<stdio.h>

/**
    check entered number is divisible by 3 or not
*/

void main(){
    int ip;

    printf("\n Enter any value \t");
    scanf("%d", &ip);

    if(ip %3 == 0){
        printf("\n divisible by 3");
    }else{
        printf("\n not divisible by 3");
    }
}

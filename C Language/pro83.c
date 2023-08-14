#include<stdio.h>

/**
    if else statement
*/

void main(){
    int ip;

    printf("\n Enter your age \t");
    scanf("%d", &ip);

    if(ip >= 18){
        printf("\n welcome to voting booth");
    }else{
        printf("\n try in next election");
    }

    printf("\n Program is over");
}

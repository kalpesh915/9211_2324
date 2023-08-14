#include<stdio.h>

/**
    odd even
*/

void main(){
    int ip;

    printf("\n Enter any number \t");
    scanf("%d", &ip);

    if(ip %2 == 0){
        printf("\n Even Number");
    }else{
        printf("\n Odd Number");
    }
}

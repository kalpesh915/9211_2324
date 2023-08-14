#include<stdio.h>

/**
    leap year
*/

void main(){
    int ip;

    printf("\n Enter any year \t");
    scanf("%d", &ip);

    if(ip %4 == 0){
        printf("\n Leap Year");
    }else{
        printf("\n Non Leap Year");
    }
}

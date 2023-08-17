#include<stdio.h>

/**
    check entered number is between 0 to 100 or not
*/

void main(){
    int ip;

    printf("\n Enter any value \t");
    scanf("%d", &ip);

    if(ip >= 0 && ip <= 100){
        printf("\n Between Range");
    }else{
        printf("\n Outside of Range131");
    }
}

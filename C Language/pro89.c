#include<stdio.h>

/**
    check entered number is positive or negative
*/

void main(){
    int ip1;

    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);

    if(ip1 > 0){
        printf("\n Positive");
    }else if(ip1 < 0){
        printf("\n Negative");
    }else{
        printf("\n Zero");
    }
}

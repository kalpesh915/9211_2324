#include<stdio.h>

/**
    check entered number is prime or not
    divisible by 1 or itself only
*/

void main(){
    int ip, i, flag = 1;

    printf("\n Enter any number \t");
    scanf("%d",&ip);

    for(i=2; i<ip/2; i++){
        if(ip %i == 0){
            flag = 0;
            break;
        }
    }

    if(flag == 1){
        printf("\n Number is Prime");
    }else{
        printf("\n Number is Not Prime");
    }
}

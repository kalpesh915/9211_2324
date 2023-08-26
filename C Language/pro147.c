#include<stdio.h>

/**
    check entered number is armstrong or not

    371

    3   =   027
    7   =   343
    1   =   001

            371
*/

void main(){
    int ip, tmp, num, cube, ans = 0;

    printf("\n Enter any value \t");
    scanf("%d",&ip);

    tmp = ip;

    while(tmp > 0){
        num = tmp % 10;
        cube = num * num * num;
        ans = ans + cube;
        tmp = tmp / 10;
    }

    if(ip == ans){
        printf("\n Entered number is armstrong");
    }else{
        printf("\n Try another number");
    }
}

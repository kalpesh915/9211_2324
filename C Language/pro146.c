#include<stdio.h>

/**
    check entered number is palindrome or not

    12321
    >> <<
*/

void main(){
    int ip, ans = 0, tmp;

    printf("\n Enter any number \t");
    scanf("%d", &ip);

    tmp = ip;

    while(ip > 0){
        ans = ans * 10;
        ans += ip % 10;
        ip = ip / 10;
    }

    if(tmp == ans){
        printf("\n Number is palindrome");
    }else{
        printf("\n Try another Number");
    }
}

#include<stdio.h>

/**
    / 10
    % 10 logic

    sum of all digits in entered number

    125321 = 14
*/

void main(){
    int ip, ans = 0;

    printf("\n Enter any number \t");
    scanf("%d", &ip);

    while(ip > 0){
        ans += ip % 10;
        ip = ip / 10;
    }

    printf("\n Total Digits are %d", ans);
}

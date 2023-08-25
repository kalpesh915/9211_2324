#include<stdio.h>

/**
    / 10
    % 10 logic

    count how many digits in entered number
*/

void main(){
    int ip, ans = 0;

    printf("\n Enter any number \t");
    scanf("%d", &ip);

    while(ip > 0){
        ans++;
        ip = ip / 10;
    }

    printf("\n Total Digits are %d", ans);
}

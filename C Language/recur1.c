#include<stdio.h>

/**
    count how many digits in entered number with use of
    recursion function
*/

int count(int);

void main(){
    int ip, ans;
    printf("\n Enter any Number to count digits \t");
    scanf("%d", &ip);

    ans = count(ip);
    printf("\n Total %d digits in %d Number", ans, ip);
}

int count(int tmp){
    if(tmp == 0){
        return 0;
    }else{
        return 1 + count(tmp / 10);
    }
}

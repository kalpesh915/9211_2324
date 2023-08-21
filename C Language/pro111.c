#include<stdio.h>

/**
    get 10 values from user and print sum of it
*/

void main(){
    int i = 1, sum = 0, tmp;

    while(i <= 10){
        printf("\n Enter any value \t");
        scanf("%d", &tmp);
        sum += tmp;
        i++;
    }

    printf("\n answer is %d", sum);
}

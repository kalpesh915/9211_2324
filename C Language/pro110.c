#include<stdio.h>

/**
    make sum of first 10 numbers with while loop
    1 + 2 + 3 ... + 10 =
*/

void main(){
    int i = 1, sum = 0;

    while(i <= 10){
        sum += i;
        i++;
    }

    printf("\n answer is %d", sum);
}

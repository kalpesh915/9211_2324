#include<stdio.h>

/**
    get purchase price and sales price from user
    and check for profit or loss
*/

void main(){
    int pp, sp, diff;

    printf("\n Enter purchase price \t");
    scanf("%d", &pp);
    printf("\n Enter sales price \t");
    scanf("%d", &sp);

    diff = sp - pp;

    if(diff > 0){
        printf("\n Profit");
    }else if(diff < 0){
        printf("\n Loss");
    }else{
        printf("\n no profit no loss");
    }
}

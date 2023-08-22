#include<stdio.h>

/**
    for(init; condition; increment / decrement){
        loop body
    }
*/

void main(){
    int i, j;

    for(i=1, j=10; i<=10; i++, j--){
        printf(" %d %d", i, j);
    }
}

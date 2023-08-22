#include<stdio.h>

/**
    for(init; condition; increment / decrement){
        loop body
    }

    print All ASCII values
*/

void main(){
    int i;

    for(i=0; i<=255; i++){
        printf("\n ASCII of %c is %3d", i, i);
    }
}

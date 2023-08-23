#include<stdio.h>

/**
    draw following pattern with nested for loop
    A
    BB
    CCC
    DDDD
    EEEEE

    A = 65
*/

void main(){
    int i, j;

    /// outer loop
    for(i=65; i<=69; i++){
        /// inner loop
        for(j=65; j<=i; j++){
            printf("%c", i);
        }
        printf("\n");
    }
}

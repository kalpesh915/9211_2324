#include<stdio.h>

/**
    draw following pattern with nested for loop
    A
    B C
    D E F
    G H I J
    K L M N O

    A = 65
*/

void main(){
    int i, j, count = 65;

    /// outer loop
    for(i=1; i<=5; i++){
        /// inner loop
        for(j=1; j<=i; j++){
            printf(" %c", count++);
        }
        printf("\n");
    }
}

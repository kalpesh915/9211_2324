#include<stdio.h>

/**
    draw following pattern with nested for loop
    1
    10
    101
    1010
    10101
*/

void main(){
    int i, j;

    /// outer loop
    for(i=1; i<=5; i++){
        /// inner loop
        for(j=1; j<=i; j++){
            printf("%d", j%2);
        }
        printf("\n");
    }
}

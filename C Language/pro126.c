#include<stdio.h>

/**
    draw following pattern with nested for loop
    1
    12
    123
    1234
    12345
*/

void main(){
    int i, j;

    /// outer loop
    for(i=1; i<=5; i++){
        /// inner loop
        for(j=1; j<=i; j++){
            printf("%d", j);
        }
        printf("\n");
    }
}

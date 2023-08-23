#include<stdio.h>

/**
    draw following pattern with nested for loop
    A
    AB
    ABC
    ABCD
    ABCDE

    A = 65
*/

void main(){
    int i, j;

    /// outer loop
    for(i=65; i<=69; i++){
        /// inner loop
        for(j=65; j<=i; j++){
            printf("%c", j);
        }
        printf("\n");
    }
}

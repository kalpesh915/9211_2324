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
    char i, j;

    /// outer loop
    for(i='A'; i<='E'; i++){
        /// inner loop
        for(j='A'; j<=i; j++){
            printf("%c", i);
        }
        printf("\n");
    }
}

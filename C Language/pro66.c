#include<stdio.h>

/**
    logical and operator

    condition 1         condition 2     answer
    True                False           False
    False               True            False
    False               False           False
    True                True            True
*/

void main(){
    printf("\n Answer is %d", (15 > 5 && 15 > 50));
    printf("\n Answer is %d", (15 > 50 && 15 > 5));
    printf("\n Answer is %d", (15 > 55 && 15 > 50));
    printf("\n Answer is %d", (51 > 15 && 15 > 5));
}

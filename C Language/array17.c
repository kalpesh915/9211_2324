#include<stdio.h>

/**
    print sum of 2D array
*/

#define size 3

void main(){
    int ip[size][size], i, j, sum=0;

    /// get values in 2D array
    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            printf("\n Enter value for ip[%d][%d] \t", i, j);
            scanf("%d", &ip[i][j]);
        }
    }

    /// printing 2D array
    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            sum = sum + ip[i][j];
        }
    }

    printf("\n Sum of Array is %d", sum);
}

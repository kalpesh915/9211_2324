#include<stdio.h>

/**
    scan values in 2D array
*/

#define size 3

void main(){
    int ip[size][size], i, j;

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
            printf(" ip[%d][%d] : %d",i ,j, ip[i][j]);
        }
        printf("\n");
    }
}

#include<stdio.h>

/**
    merge two array in single array
*/


#define size 5

void main(){
    int ip1[size], ip2[size], sum[size], i;

    /// scan values in array
    printf("\n Enter values for array 1 ");
    for(i=0; i<size; i++){
        printf("\n Enter value for ip1[%d] \t",i);
        scanf("%d", &ip1[i]);
    }

    printf("\n Enter values for array 2 ");
    for(i=0; i<size; i++){
        printf("\n Enter value for ip2[%d] \t",i);
        scanf("%d", &ip2[i]);
    }

    /// sum of array
    for(i=0; i<size; i++){
        sum[i] = ip1[i] + ip2[i];
    }


    /// print arrays
    for(i=0; i<size; i++){
        printf("\n sum[%d] is %d",i, sum[i]);
    }
}

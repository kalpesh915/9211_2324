#include<stdio.h>

/**
    find average of array
*/


#define size 10

void main(){
    int ip[size], i, sum=0;

    /// scan values in array
    for(i=0; i<size; i++){
        printf("\n Enter value for ip[%d] \t",i);
        scanf("%d", &ip[i]);
    }

    /// sum of array
    for(i=0; i<size; i++){
        sum += ip[i];
    }

    printf("\n sum of array is %d", sum);
    printf("\n average of array is %d", sum / size);
}

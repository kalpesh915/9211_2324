#include<stdio.h>

/**
    create array and scan 10 values from user
    print sum of all values
*/

#define size 10

void main(){
    int ip[size], i, sum = 0;

    /// get values from user
    for(i=0; i<size; i++){
        printf("\n Enter value for ip[%d] \t", i);
        scanf("%d", &ip[i]);
    }

    /// for sum
    for(i=0; i<size; i++){
        sum = sum + ip[i];
    }

    printf("\n sum of array is %d", sum);
}

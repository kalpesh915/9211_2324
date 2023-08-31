#include<stdio.h>

/**
    create array and scan 10 values from user
    find maximum of array
*/

#define size 10

void main(){
    int ip[size], i, max = 0;

    /// get values from user
    for(i=0; i<size; i++){
        printf("\n Enter value for ip[%d] \t", i);
        scanf("%d", &ip[i]);
    }

    /// find maximum
    for(i=0; i<size; i++){
        if(max < ip[i]){
            max = ip[i];
        }
    }

    printf("\n max of array is %d", max);
}

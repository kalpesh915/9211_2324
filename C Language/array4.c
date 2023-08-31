#include<stdio.h>

/**
    create simple array and print size of it
    store values in array
*/

#define size 10

void main(){
    int ip[size], i;

    for(i=0; i<size; i++){
        printf("\n Enter value for ip[%d] \t", i);
        scanf("%d", &ip[i]);
    }

    for(i=0; i<size; i++){
        printf(" %d", ip[i]);
    }
}

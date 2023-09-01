#include<stdio.h>

/**
    sort array in descending order
*/

#define size 10

void main(){
    int ip[size], i, j, tmp;

    /// get values in array

    for(i=0; i<size; i++){
        printf("\n Enter value for ip[%d] \t", i);
        scanf("%d", &ip[i]);
    }

    /// sorting process
    for(i=0; i<size; i++){
        for(j=0; j<size; j++){
            if(ip[i] > ip[j]){
                tmp = ip[i];
                ip[i] = ip[j];
                ip[j] = tmp;
            }
        }
    }

    /// printing sorted values
    printf("\n Sorted values is \n");
    for(i=0; i<size; i++){
        printf(" %d", ip[i]);
    }
}

#include<stdio.h>

/**
    print all of the even number
    between 1 to 100 with continue keyword
*/

void main(){
    int i;

    for(i=1; i<=100; i++){
        if(i %2 == 1){
            continue;
        }
        printf(" %d", i);
    }
}

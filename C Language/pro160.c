#include<stdio.h>

/**
    infinite loop with for
*/

void main(){
    int i = 1;
    for( ; ; ){
        printf("%d", i);
        i++;

        if(i >= 10){
            break;
        }
    }
}

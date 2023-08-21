#include<stdio.h>

/**
    get 10 values from user and Find maximum out of it
*/

void main(){
    int i = 1, max = 0, tmp;

    while(i <= 10){
        printf("\n Enter any value \t");
        scanf("%d", &tmp);

        if(max < tmp){
            max = tmp;
        }

        i++;
    }

    printf("\n Maximum is %d", max);
}

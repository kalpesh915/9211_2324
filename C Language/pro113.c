#include<stdio.h>

/**
    print table of entered number
*/

void main(){
    int i = 1, ip;


    printf("\n Enter any number to print table \t");
    scanf("%d", &ip);

    while(i <= 10){
        printf("\n %4d * %4d : %4d", ip, i, ip * i);
        i++;
    }
}

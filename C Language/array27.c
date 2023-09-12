#include<stdio.h>

/**
    character array
    0123456
    Rajkot\0
*/

void main(){
    char ip[20];
    int i;
    printf("\n Enter name of your city \t");
    gets(ip);

    for(i=0; i<20; i++){
        printf(" %c", ip[i]);
    }
}

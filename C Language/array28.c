#include<stdio.h>

/**
    character array
    0123456
    Rajkot\0
*/

void main(){
    char ip[20];
    int i = 0;
    printf("\n Enter name of your city \t");
    gets(ip);

    while(ip[i] != '\0'){
        printf(" %c", ip[i]);
        i++;
    }
}

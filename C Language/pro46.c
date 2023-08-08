#include<stdio.h>

/**
    get character from user and print ASCII value
    of it
*/

void main(){
    char ip;
    printf("\n Enter any character \t");
    ip = getche(); /// get a single character
    printf("\n ASCII of %c is %d", ip, ip);
}

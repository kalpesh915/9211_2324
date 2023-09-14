#include<stdio.h>
#include<string.h>

void main(){
    char ip[100];

    printf("\n Enter any string \t");
    gets(ip); /// get string

    strrev(ip);

    printf("\n new string is %s", ip);
}

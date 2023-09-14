#include<stdio.h>
#include<string.h>

void main(){
    char ip1[100], ip2[100];

    printf("\n Enter any string \t");
    gets(ip1); /// get string

    strcpy(ip2, ip1); /// destination, source

    printf("\n old string is %s", ip1);
    printf("\n new string is %s", ip2);
}

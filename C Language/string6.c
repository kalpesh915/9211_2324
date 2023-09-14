#include<stdio.h>
#include<string.h>

/**
   uppercase,lowercase strings
*/

void main(){
    char ip1[100], ip2[100];

    printf("\n Enter any string \t");
    gets(ip1);
    printf("\n string to uppercase is %s", strupr(ip1));
    printf("\n string is lowercase is %s", strlwr(ip1));
}

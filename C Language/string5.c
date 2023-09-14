#include<stdio.h>
#include<string.h>

/**
    concat function used to join two strings
*/

void main(){
    char ip1[100], ip2[100];

    printf("\n Enter any string \t");
    gets(ip1);
    printf("\n Enter any string \t");
    gets(ip2);

    strcat(ip1, ip2); /// destination, source

    printf("\n old string is %s", ip1);
    printf("\n new string is %s", ip2);
}

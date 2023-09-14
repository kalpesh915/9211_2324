#include<stdio.h>
#include<string.h>

/**
   sting compare
    if both strings are same it will return 0
    if string 1 is greater than string 2 than it will return +ve value
    if string 2 is greater than string 1 than it will return -ve value
*/

void main(){
    char ip1[100], ip2[100];
    int ans;

    printf("\n Enter any string \t");
    gets(ip1);
    printf("\n Enter any string \t");
    gets(ip2);

    ans = strcmp(ip1, ip2);

    printf("\n Answer is %d", ans);
}

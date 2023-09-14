#include<stdio.h>
#include<string.h>

/**
    find length of entered string
*/

void main(){
    char ip1[100];
    int ans;

    printf("\n Enter any string \t");
    gets(ip1);

    ans = strlen(ip1);
    printf("\n String length is %d", ans);
}

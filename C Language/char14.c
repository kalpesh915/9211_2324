#include<stdio.h>
#include<ctype.h>

/**
    convert entered character in uppercase
*/

void main(){
    char c;

    printf("\n Enter any character \t");
    c = getche();

    printf("\n character in uppercase is %c", toupper(c));
}

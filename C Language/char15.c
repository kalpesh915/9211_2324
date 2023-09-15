#include<stdio.h>
#include<ctype.h>

/**
    convert entered character in lowercase
*/

void main(){
    char c;

    printf("\n Enter any character \t");
    c = getche();

    printf("\n character in lowercase is %c", tolower(c));
}

#include<stdio.h>

/**
    check entered character is vowel or not
    aeiou
*/

void main(){
    char ip;

    printf("\n Enter any character \t");
    ip = getche();

    if(ip=='a' || ip == 'e' || ip == 'i' || ip == 'o' || ip == 'u' || ip == 'A' || ip == 'E' || ip == 'I' || ip == 'O' || ip == 'U')
    {
        printf("\n entered character is vowel");
    }else{
        printf("\n entered character is not vowel");
    }
}

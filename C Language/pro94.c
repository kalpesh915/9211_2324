#include<stdio.h>

/**
    check entered character is vowel or not
    aeiou
*/

void main(){
    char ip;
    int uv, lv;

    printf("\n Enter any character \t");
    ip = getche();

    uv = (ip == 'A' || ip == 'E' || ip == 'I' || ip == 'O' || ip == 'U');
    lv = (ip == 'a' || ip == 'e' || ip == 'i' || ip == 'o' || ip == 'u');

    if(uv || lv)
    {
        printf("\n entered character is vowel");
    }else{
        printf("\n entered character is not vowel");
    }
}

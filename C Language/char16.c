#include<stdio.h>

/**
    create UDF for check entered character is alphabet or not
    ASCII
    A = 65, Z = 90
    a = 97, z = 122
*/

int isAlphabets(char);

void main(){
    char c;

    printf("\n Enter any character \t");
    c = getche();

    if(isAlphabets(c)){
        printf("\n True");
    }else{
        printf("\n False");
    }
}

int isAlphabets(char c){
    if((c >= 65 && c <= 90) || (c >= 97 && c <= 122)){
        return 1;
    }else{
        return 0;
    }
}

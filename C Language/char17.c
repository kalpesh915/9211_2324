#include<stdio.h>

/**
    create UDF for check entered character is uppercase alphabet or not
    ASCII
    A = 65, Z = 90
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
    if((c >= 65 && c <= 90)){
        return 1;
    }else{
        return 0;
    }
}

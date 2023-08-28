#include<stdio.h>

/**
    go to
*/

void main(){
    int ip;

    question:
    printf("\n 5 * 5 = ? \t");
    scanf("%d", &ip);

    if(ip == 25){
        printf("\n Answer is Correct");
    }else{
        goto question;
    }

}

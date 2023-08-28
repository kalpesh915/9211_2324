#include<stdio.h>

/**
    create custom loop with go to
*/

void main(){
    int ip = 1;

    loop:
        printf(" %d", ip);
        ip++;

    if(ip <= 10){
        goto loop;
    }

}

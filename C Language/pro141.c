#include<stdio.h>

/**
        A
       BAB
      CBABC
     DCBABCD
    EDCBABCDE
*/

void main(){
    int i, j, s;

    for(i=65; i<=69; i++){
        for(s=69; s>=i; s--){
            printf("-");
        }
        for(j=i; j>=65; j--){
            printf("%c", j);
        }
        for(j=66; j<=i; j++){
            printf("%c", j);
        }
        printf("\n");
    }
}

#include<stdio.h>

/**
        1
       212
      32123
     4321234
    543212345
*/

void main(){
    int i, j, s;

    for(i=1; i<=5; i++){
        for(s=4; s>=i; s--){
            printf("-");
        }

        for(j=i; j>=1; j--){
            printf("%d", j);
        }

        for(j=2; j<=i; j++){
            printf("%d", j);
        }
        printf("\n");
    }
}

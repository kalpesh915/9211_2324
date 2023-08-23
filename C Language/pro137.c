#include<stdio.h>

/**
    draw following pattern with nested for loop
         *
        * *
       *   *
      *  H  *
     * * * * *
*/

void main(){
    int i, j, s;

    /// loop for rows
    for(i=1; i<=5; i++){
        /// loop for space
        for(s=4; s>=i; s--){
            printf(" ");
        }
        for(j=1; j<=i; j++){
                if(j==1 || j==i || i==5){
                    printf(" *");
                }else{
                    printf("  ");
                }

        }
        printf("\n");
    }
}

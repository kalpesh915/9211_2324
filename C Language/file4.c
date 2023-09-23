#include<stdio.h>

/**
    write data in file character by character
*/

void main(){
    FILE *fp = fopen("data2.txt", "w");
    char c;

    printf("\n write data in file press X for exit \n");

    while(c != 'X'){
        c = getche();

        if(c == 'X'){
            break;
        }

        fputc(c, fp);
    }

    printf("\n File Writing is Completed");
    fclose(fp);
}

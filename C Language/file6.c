#include<stdio.h>

/**
    read data from file character by character
*/

void main(){
    FILE *fp = fopen("data2.txt", "r");
    char c;


    /// run loop until pointer not reached at end of the file (eof)
    while(!feof(fp)){
        c = fgetc(fp);
        printf(" %c", c);
    }
    printf("\n File Reading Completed");
    fclose(fp);
}

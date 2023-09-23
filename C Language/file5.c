#include<stdio.h>

/**
    read data from file character by character
*/

void main(){
    FILE *fp = fopen("data2.txt", "r");
    char c;

    c = fgetc(fp);
    printf(" %c", c);
    c = fgetc(fp);
    printf(" %c", c);
    c = fgetc(fp);
    printf(" %c", c);
    c = fgetc(fp);
    printf(" %c", c);

    printf("\n File Reading Completed");
    fclose(fp);
}

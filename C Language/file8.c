#include<stdio.h>

/**
    read data from file line by line
    get the current read pointer position
*/

void main(){
    FILE *fp = fopen("data3.txt", "r");
    char ip[100];

    printf("\n Current Read Pointer Position at %d", ftell(fp));
    fgets(ip, 100, fp);
    printf("\n%s", ip);
    printf("\n Current Read Pointer Position at %d", ftell(fp));
    fclose(fp);
}

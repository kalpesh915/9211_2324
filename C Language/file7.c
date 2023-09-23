#include<stdio.h>

/**
    read data from file line by line
*/

void main(){
    FILE *fp = fopen("data3.txt", "r");
    char ip[100];


    /// run loop until pointer not reached at end of the file (eof)
    while(!feof(fp)){
        fgets(ip, 100, fp);
        printf(" %s", ip);
    }
    printf("\n File Reading Completed");
    fclose(fp);
}

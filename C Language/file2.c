#include<stdio.h>

/**
    write data in file
*/

void main(){
    FILE *fp = fopen("data1.txt", "w");
    char ip[100];
        printf("\n Enter any any string to store in File \t");
        gets(ip);
        fputs(ip, fp);
        printf("\n File Writing Completed");
    fclose(fp);
}

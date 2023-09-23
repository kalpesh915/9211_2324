#include<stdio.h>

/**
    read data in file
*/

void main(){
    FILE *fp = fopen("data1.txt", "r");
    char ip[100];
        fgets(ip, 100, fp); /// character array, bytes, file pointer
        printf("\n File Reading Completed data is %s", ip);
    fclose(fp);
}

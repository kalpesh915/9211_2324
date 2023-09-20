#include<stdio.h>

/**
    Create String UDF Functions
    string concat with UDF
*/

void stringConcat(char[], char[]);

void main(){
    char ip1[100], ip2[100];

    printf("\n Enter any string 1\t");
    gets(ip1);
    printf("\n Enter any string 2\t");
    gets(ip2);

    ///stringConcat(ip1, ip2);
    stringConcat(ip2, ip1);
}

void stringConcat(char ip1[100], char ip2[100]){
    int count = 0, tmp=0;
    char ip3[200];

    while(ip1[count] != '\0'){
        ip3[tmp] = ip1[count];
        count++;
        tmp++;
    }

    count = 0;
    while(ip2[count] != '\0'){
        ip3[tmp] = ip2[count];
        count++;
        tmp++;
    }

    printf("\n New String is %s", ip3);
}

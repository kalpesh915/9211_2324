#include<stdio.h>

/**
    Create String UDF Functions
    string lowercase with UDF

    a-z = 97-122
    A-Z = 65-90
*/

void stringLowercase(char[]);

void main(){
    char ip[100];

    printf("\n Enter any string \t");
    gets(ip);

    stringLowercase(ip);
}

void stringLowercase(char ip[100]){
    int count = 0;

    while(ip[count] != '\0'){
            if(ip[count] >= 65 && ip[count] <= 90){
                ip[count] = ip[count] + 32;
            }
        count++;
    }

    printf("\n String in Uppercase is %s", ip);
}

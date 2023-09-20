#include<stdio.h>

/**
    Create String UDF Functions
    string uppercase with UDF

    a-z = 97-122
    A-Z = 65-90
*/

void stringUppercase(char[]);

void main(){
    char ip[100];

    printf("\n Enter any string \t");
    gets(ip);

    stringUppercase(ip);
}

void stringUppercase(char ip[100]){
    int count = 0;

    while(ip[count] != '\0'){
            if(ip[count] >= 97 && ip[count] <= 122){
                ip[count] = ip[count] - 32;
            }
        count++;
    }

    printf("\n String in Uppercase is %s", ip);
}

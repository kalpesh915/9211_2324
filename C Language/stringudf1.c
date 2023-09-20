#include<stdio.h>

/**
    Create String UDF Functions
    string length with UDF

    0123456
    Rajkot\0
    \0 = null character indicate end of string
*/

int stringLength(char[]);

void main(){
    char ip[100];
    int ans;

    printf("\n Enter any string \t");
    gets(ip);

    ans = stringLength(ip);

    printf("\n Length of String is %d", ans);
}

int stringLength(char ip[100]){
    int count = 0;

    while(ip[count] != '\0'){
        count++;
    }

    return count;
}

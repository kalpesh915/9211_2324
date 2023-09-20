#include<stdio.h>

/**
    Create String UDF Functions
    string compare with UDF (lexicographically compare)

*/

int stringCompare(char[], char[]);

void main(){
    char ip1[100], ip2[100];
    int ans;

    printf("\n Enter any string 1\t");
    gets(ip1);
    printf("\n Enter any string 2\t");
    gets(ip2);

    ans = stringCompare(ip1, ip2);

    if(ans == 0){
        printf("\n Both Strings are same");
    }else{
        printf("\n Both Strings are not same");
    }
}

int stringCompare(char ip1[100], char ip2[100]){
    int count = 0, tmp=0;

    while(ip1[count] != '\0' || ip2[count] != '\0'){
        if(ip1[count] != ip2[count]){
            tmp = ip1[count] - ip2[count];
            break;
        }
        count++;
    }

    return tmp;
}

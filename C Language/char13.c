#include<stdio.h>
#include<ctype.h>

/**
    count how many characters, alphabets, digits, uppercase, lowercase,
    special characters, words in string
*/

void main(){
    char ip[100], c;
    int count=0, ac=0, uc=0, lc=0, dc=0, scc=0, wc=1;

    printf("\n Enter any string \t");
    gets(ip);

    while(ip[count] != '\0'){
        c = ip[count];

        if(isalpha(c)){
            ac++;

            if(isupper(c)){
                uc++;
            }else{
                lc++;
            }
        }else if(isdigit(c)){
            dc++;
        }else if(ispunct(c)){
            scc++;
        }else if(isspace(c)){
            wc++;
        }
        count++;
    }

    printf("\n Total Characters are %d", count);
    printf("\n Total Alphabets are %d", ac);
    printf("\n Total Uppercase Characters is %d", uc);
    printf("\n Total Lowercase Characters is %d", lc);
    printf("\n Total Digits Characters is %d", dc);
    printf("\n Total Special Characters is %d", scc);
    printf("\n Total Words is %d", wc);
}

#include<stdio.h>

/**
    simple switch case
*/

void main(){
    int ip;

    printf("\n Enter value for ip \t");
    scanf("%d", &ip);

    switch(ip){
        case 1:{
            printf("\n value is one");
            break;
        }
        case 2:{
            printf("\n value is two");
            break;
        }
        case 3:{
            printf("\n value is three");
            break;
        }
        case 4:{
            printf("\n value is  four");
            break;
        }
        case 5:{
            printf("\n value is five");
            break;
        }
        default:{
            printf("\n out of range");
            break;
        }
    }
}

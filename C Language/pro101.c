#include<stdio.h>

/**
    simple switch case
*/

void main(){
    int ip;

    printf("\n Enter day number \t");
    scanf("%d", &ip);

    switch(ip){
        case 1:{
            printf("\n Monday");
            break;
        }
        case 2:{
            printf("\n Tuesday");
            break;
        }
        case 3:{
            printf("\n Wednesday");
            break;
        }
        case 4:{
            printf("\n Thursday");
            break;
        }
        case 5:{
            printf("\n Friday");
            break;
        }
        case 6:{
            printf("\n Saturday");
            break;
        }
        case 7:{
            printf("\n Sunday");
            break;
        }
        default:{
            printf("\n out of range");
            break;
        }
    }
}

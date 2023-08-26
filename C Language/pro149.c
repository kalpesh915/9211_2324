#include<stdio.h>

/**
    print fibonachi series
    0 1 1 2 3 5 8 13 . . . .
*/

void main(){
    int ip1 = 0, ip2 = 1, ip3, i;

    printf(" %d %d", ip1, ip2);

    for(i=1; i<=10; i++){
        ip3 = ip1 + ip2;
        printf(" %d", ip3);
        ip1 = ip2;
        ip2 = ip3;
    }
}

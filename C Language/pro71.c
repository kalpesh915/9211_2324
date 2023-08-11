#include<stdio.h>

/**
    bitwise and operator

    return 1 if both bits are 1
*/

void main(){
    int ip1, ip2, ans;

    ip1 = 10;           ///     1010
    ip2 = 13;           ///     1101
                        /// &
    ans = ip1 & ip2;    ///     1000

    printf("\n answer is %d", ans);
}

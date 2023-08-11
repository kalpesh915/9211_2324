#include<stdio.h>

/**
    bitwise or operator

    return 1 if any bits are 1
*/

void main(){
    int ip1, ip2, ans;

    ip1 = 10;           ///     1010
    ip2 = 13;           ///     1101
                        /// |
    ans = ip1 | ip2;    ///     1111

    printf("\n answer is %d", ans);
}

#include<stdio.h>

/**
    bitwise not operator
    inverse the bits
*/

void main(){
    int ip1, ans;

    ip1 = 160;          /// 10100000
    ans = ~ip1;         /// 01011111

    printf("\n answer is %d", ans);
}

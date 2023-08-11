#include<stdio.h>

/**
    bitwise right shift operator
*/

void main(){
    int ip1, ans;

    ip1 = 160;          /// 10100000
    ans = ip1 >> 4;     /// 00001010

    printf("\n answer is %d", ans);
}

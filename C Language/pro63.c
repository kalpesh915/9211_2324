/**
    relational operator

    <, <=

    true    1
    false   0
*/


#include<stdio.h>

void main(){
    printf("\n answer is %d", 11 < 8);   /// 0
    printf("\n answer is %d", 15 < 11);  /// 0
    printf("\n answer is %d", 11 < 18);  /// 1
    printf("\n answer is %d", 181 < 811);/// 1
    printf("\n answer is %d", 11 < 11);  /// 0
    printf("\n answer is %d", 11 <= 11); /// 1
}

#include<stdio.h>

/**
    set initial values in separate array

    ip[3][3]

    ip      0   1   2
    0       11  22  33
    1       44  55  66
    2       77  88  99
*/

void main(){
    int ip[3][3] = {{11, 22, 33}, {44, 55, 66}, {77, 88, 99}};
    printf("\n Size of array is %d bytes", sizeof(ip));
    printf("\n ip[0][0] is %d", ip[0][0]);
    printf("\n ip[1][2] is %d", ip[1][2]);
}

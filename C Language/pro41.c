#include<stdio.h>

/**
    double
    size :  8 bytes
    format char : %lf

    use to store values with floating points
    3.14, 32.44, 56.33, 21.99
*/

void main(){
    double ip;

    printf("\n size of double is %d bytes", sizeof(ip));

    printf("\n Enter any value for ip \t");
    scanf("%lf", &ip);

    printf("\n you entered %lf", ip);
    printf("\n you entered %.2lf", ip);
}

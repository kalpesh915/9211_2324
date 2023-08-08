#include<stdio.h>

/**
    float
    use to store values with floating points

    3.14, 32.44, 56.33, 21.99
*/

void main(){
    float ip;

    printf("\n Enter any value for ip \t");
    scanf("%f", &ip);

    printf("\n you entered %f", ip);
    printf("\n you entered %.2f", ip);
}

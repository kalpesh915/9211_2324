#include<stdio.h>
/// find simple interest

void main(){
    int amount, rate, years;
    float si;

    printf("\n Enter principal amount \t");
    scanf("%d", &amount);
    printf("\n Enter rate of interest \t");
    scanf("%d", &rate);
    printf("\n Enter number of years \t");
    scanf("%d", &years);

    si = (float) (amount * rate * years) / 100;

    printf("\n Simple Interest is %f", si);
}

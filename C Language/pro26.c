#include<stdio.h>
/// convert fahrenheit to celsius

void main(){
    float celsius, fahrenheit;

    printf("\n Enter Temprature in Fahrenheit \t");
    scanf("%f", &fahrenheit);

    celsius = (fahrenheit - 32) * 5 / 9;
    printf("\n Temprature in Celsius is %f", celsius);
}

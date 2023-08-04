#include<stdio.h>
/// find area of circle

void main(){
    float radius, area;

    printf("\n Enter radius of circle \t");
    scanf("%f", &radius);

    area = 3.14 * radius * radius;

    printf("\n Area of Circle is %f", area);
}

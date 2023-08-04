#include<stdio.h>
/// type casting

void main(){
    int ip1, ip2;
    float answer;

    printf("\n Enter value for ip1 \t");
    scanf("%d", &ip1);
    printf("\n Enter value for ip2 \t");
    scanf("%d", &ip2);

    answer = (float) ip1 / ip2;
    printf("\n answer is %f", answer);
}

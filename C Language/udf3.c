#include<stdio.h>

/**
    UDF 2 : with parameters no return
*/

void maximum(int, int); /// declaration

void main(){
    int i, j;

    printf("\n Enter value for i \t");
    scanf("%d", &i);
    printf("\n Enter va1234lue for j \t");
    scanf("%d", &j);

    maximum(i, j); /// i, j is known as arguments
}

void maximum(int ip1, int ip2){
    /// ip1, ip2 is known as parameters
    if(ip1 > ip2){
        printf("\n Maximum is %d", ip1);
    }else{
        printf("\n Maximum is %d", ip2);
    }
}

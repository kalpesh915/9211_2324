#include<stdio.h>

/**
    create a simple structure to store student data
*/

struct student{
    int roll;       /// 04
    char name[20];  /// 20
    float marks;    /// 04
};

void main(){
    struct student std1;

    printf("\n Size of Structure is %d Bytes ", sizeof(std1));
}

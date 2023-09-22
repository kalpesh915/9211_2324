#include<stdio.h>

/**
    create a simple structure to store student data
    copy structure
*/

struct student{
    int roll;       /// 04
    char name[20];  /// 20
    float marks;    /// 04
};

void main(){
    struct student std1, std2;

    printf("\n Enter Roll No. \t");
    scanf("%d", &std1.roll);
    printf("\n Enter Name \t");
    scanf("%s", &std1.name);
    printf("\n Enter Marks \t");
    scanf("%f", &std1.marks);

    std2 = std1;

    printf("\n Roll no. is %d Name is %s and marks is %f", std1.roll, std1.name, std1.marks);
    printf("\n Roll no. is %d Name is %s and marks is %f", std2.roll, std2.name, std2.marks);
}

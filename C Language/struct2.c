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
    struct student std1 = {111, "Sujal", 78.67};

    printf("\n Size of Structure is %d Bytes ", sizeof(std1));

    printf("\n Roll No. is %d", std1.roll);
    printf("\n Name is %s", std1.name);
    printf("\n Marks is %f", std1.marks);
}

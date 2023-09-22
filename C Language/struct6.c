#include<stdio.h>

/**
    create a simple structure to store student data
    array of structure
*/

struct student{
    int roll;       /// 04
    char name[20];  /// 20
    float marks;    /// 04
};

void main(){
    struct student std1[5];
    int i;

    for(i=0; i<5; i++){
        printf("\n Enter Roll No. \t");
        scanf("%d", &std1[i].roll);
        printf("\n Enter Name \t");
        scanf("%s", &std1[i].name);
        printf("\n Enter Marks \t");
        scanf("%f", &std1[i].marks);
    }

    for(i=0; i<5; i++){
        printf("\n Roll no. is %d Name is %s and marks is %f", std1[i].roll, std1[i].name, std1[i].marks);
    }
}

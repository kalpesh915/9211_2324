#include<stdio.h>

/**
    enumeration : user define data type with pre defined values.
*/

enum days {monday, tuesday, wednesday, thursday, friday, saturday, sunday};

void main(){
    enum days d1;

    d1 = friday;

    printf("\n value of d1 is %d", d1);
}

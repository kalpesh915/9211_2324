#include<stdio.h>

/**
    enumeration : user define data type with pre defined values.
*/

enum boolean {false, true};

void main(){
    enum boolean b1;

    b1 = true;

    if(b1){
        printf("\n Condition is True");
    }else{
        printf("\n Condition is False");
    }
}

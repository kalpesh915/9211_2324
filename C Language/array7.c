#include<stdio.h>

/**
    check entered value is exist in array or not
*/

#define size 10

void main(){
    int ip[size], i, tmp, flag = 1;

    /// get values in array
    for(i=0; i<size; i++){
        printf("\n Enter value for ip[%d] \t", i);
        scanf("%d", &ip[i]);
    }

    /// scan value to compare in array
    printf("\n Enter value to search in array \t");
    scanf("%d", &tmp);

    /// process for searching value in array
    for(i=0; i<size; i++){
        if(tmp == ip[i]){
            flag = 0;
            break;
        }
    }

    if(flag == 1){
        printf("\n %d is not exist in array ", tmp);
    }else{
        printf("\n %d is exist in array ", tmp);
    }
}

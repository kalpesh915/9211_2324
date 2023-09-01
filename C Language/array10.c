#include<stdio.h>

/**
    seperate odd and even values
*/


#define size 10

void main(){
    int ip1[size], odd[size], even[size], i, oc=0, ec=0;

    /// scan values in ip1 array
    for(i=0; i<size; i++){
        printf("\n Enter value for ip1[%d] \t",i);
        scanf("%d", &ip1[i]);
    }

    /// check for value is odd or even
    for(i=0; i<size; i++){
        if(ip1[i] %2 == 0){
            even[ec] = ip1[i];
            ec++;
        }else{
            odd[oc] = ip1[i];
            oc++;
        }
    }

    /// printing values
    printf("\n Odd Values \n");
    for(i=0; i<oc; i++){
        printf(" %d", odd[i]);
    }

    printf("\n Even Values \n");
    for(i=0; i<ec; i++){
        printf(" %d", even[i]);
    }
}

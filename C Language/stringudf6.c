#include<stdio.h>

/**
    create a menu driven banking system with following functions
    1   deposit
    2   withdraw (please maintain 1000 rs. as minimum balance)
    3   balance_check
*/

/// global variable for store balance
double balance;

/// declare a required functions
void deposit();
void withdraw();
void balance_check();

void main(){
    int option;
    balance = 10000;

    do{
        printf("\n****************************************** \n");
        printf("\n Press 1 for Deposit");
        printf("\n Press 2 for withdraw");
        printf("\n Press 3 for Balance Check");
        printf("\n Press 0 for Exit \t");
        scanf("%d", &option);

        switch(option){
            case 1:{
                deposit();
                break;
            }
            case 2:{
                withdraw();
                break;
            }
            case 3:{
                balance_check();
                break;
            }
            case 0:{
                printf("\n Thanks for using banking system");
                break;
            }
            default:{
                printf("\n Invalid Option Selected");
                break;
            }
        }

    }while(option != 0);
}

void deposit(){
    double amount;

    printf("\n Enter amount to deposit \t");
    scanf("%lf", &amount);

    if(amount > 0){
        balance = balance + amount;
        balance_check();
    }else{
        printf("\n Amount is Invalid");
    }
}

void withdraw(){
    double amount;

    printf("\n Enter amount for withdraw \t");
    scanf("%lf", &amount);

    if(amount > 0){
        /// amount is less than balance
        if(amount < balance){
            /// check for minimum balance
            if((balance - amount) >= 1000){
                balance = balance - amount;
                balance_check();
            }else{
                printf("\n Please Maintain Minimum Balance");
                balance_check();
            }
        }else{
            printf("\n Not Enough balance in Account");
            balance_check();
        }
    }else{
        printf("\n Amount is Invalid");
    }
}

void balance_check(){
    printf("\n Your Current Balance is %lf", balance);
}

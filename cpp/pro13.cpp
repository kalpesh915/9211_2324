#include<iostream>
using namespace std;

int main(){
    int ip1;

    cout<<"\n Enter value for ip1 \t";
    cin>>ip1;

    switch(ip1){
        case 1:{
            cout<<"\n One";
            break;
        }
        case 2:{
            cout<<"\n Two";
            break;
        }
        case 3:{
            cout<<"\n Three";
            break;
        }
        case 4:{
            cout<<"\n Four";
            break;
        }
        case 5:{
            cout<<"\n Five";
            break;
        }
        default:{
            cout<<"\n out of Range";
            break;
        }
    }

    return 0;
}

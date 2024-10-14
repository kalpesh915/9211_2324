#include<iostream>

using namespace std;

int main(){
    int ip1, ip2;

    cout<<"Enter value for ip1 and ip2 \t"<<endl;
    cin>>ip1>>ip2;

    if(ip1 == ip2){
        cout<<"Both values are same";
    }else{
        cout<<"Both values are not same";
    }

    return 0;
}

#include<iostream>
/// find maximum out of 3 numbers
using namespace std;

int main(){
    int ip1, ip2, ip3, ans;

    cout<<"Enter value for ip1, ip2 and ip3 \t"<<endl;
    cin>>ip1>>ip2>>ip3;

    if(ip1 > ip2 && ip1 > ip3){
        ans = ip1;
    }else if(ip2 > ip1 && ip2 > ip3){
        ans = ip2;
    }else{
        ans = ip3;
    }
    cout<<"\n Answer is "<<ans;
    return 0;
}

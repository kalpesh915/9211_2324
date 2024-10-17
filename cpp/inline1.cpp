#include<iostream>

using namespace std;

inline int max(int i, int j){
    return i > j ? i : j;
}

int main(){
    cout<<"\n Maximum is "<<max(11, 22);
    cout<<"\n Maximum is "<<max(111, 22);
    cout<<"\n Maximum is "<<max(11, 212);
    cout<<"\n Maximum is "<<max(113, 22);
    cout<<"\n Maximum is "<<max(11, 202);
    return 0;
}

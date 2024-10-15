#include<iostream>

using namespace std;

/// single level inheritance

class Math1{
    public:
    void sum(int i, int j){
        cout<<"\n Sum is "<<i+j;
    }

    void sub(int i, int j){
        cout<<"\n Sub is "<<i-j;
    }
};

class Math2 : public Math1{
    public:
    void mul(int i, int j){
        cout<<"\n Mul is "<<i*j;
    }

    void div(int i, int j){
        cout<<"\n Div is "<<i/j;
    }
};

int main(){
    Math2 m2;
    m2.sum(111, 22);
    m2.sub(111, 22);
    m2.div(111, 22);
    m2.mul(111, 22);
    return 0;
}

#include<iostream>

using namespace std;

/// Multi level inheritance

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

class Math3 : public Math2{
    public:
    void mod(int i, int j){
        cout<<"\n Mod is "<<i%j;
    }
};

int main(){
    Math3 m3;
    m3.sum(111, 22);
    m3.sub(111, 22);
    m3.div(111, 22);
    m3.mul(111, 22);
    m3.mod(111, 22);
    return 0;
}

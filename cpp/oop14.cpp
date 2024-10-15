#include<iostream>

using namespace std;

/// Hybrid inheritance

class Design{
    public:
    virtual void pattern1(){
        cout<<"\n*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*\n";
    }
};

class Math1 : virtual public Design{
    public:
    void sum(int i, int j){
        pattern1();
        cout<<"\n Sum is "<<i+j;
    }

    void sub(int i, int j){
        pattern1();
        cout<<"\n Sub is "<<i-j;
    }
};

class Math2 : virtual public Design{
    public:
    void mul(int i, int j){
        pattern1();
        cout<<"\n Mul is "<<i*j;
    }

    void div(int i, int j){
        pattern1();
        cout<<"\n Div is "<<i/j;
    }
};

class Math3 : virtual public Math1, virtual public Math2{
    public:
    void mod(int i, int j){
        pattern1();
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

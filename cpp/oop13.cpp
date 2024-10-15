#include<iostream>

using namespace std;

/// Hierarchical inheritance

class Design{
    public:
    void pattern1(){
        cout<<"\n*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*_*\n";
    }
};

class Math1 : public Design{
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

class Math2 : public Design{
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

class Math3 : public Design{
    public:
    void mod(int i, int j){
        pattern1();
        cout<<"\n Mod is "<<i%j;
    }
};

int main(){
    Math1 m1;
    Math2 m2;
    Math3 m3;

    m1.sum(111, 22);
    m1.sub(111, 22);
    m2.div(111, 22);
    m2.mul(111, 22);
    m3.mod(111, 22);
    return 0;
}

#include<iostream>

using namespace std;

class Math{
    public:
    void sum(int i, int j){
        cout<<"\n Sum is "<<(i + j);
    }
    void sum(int i, int j, int k){
        cout<<"\n Sum is "<<(i + j + k);
    }
    void sum(int i, int j, int k, int l){
        cout<<"\n Sum is "<<(i + j + k + l);
    }
    void sum(int i, int j, int k, int l, int m){
        cout<<"\n Sum is "<<(i + j + k + l + m);
    }
};

int main(){
    Math m;
    m.sum(11, 22);
    m.sum(11, 22, 33);
    m.sum(11, 22, 33, 44);
    m.sum(11, 22, 33, 44, 55);
    return 0;
}

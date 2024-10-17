#include<iostream>

using namespace std;

class Math{
    public:
    void sum2(int i, int j){
        cout<<"\n Sum is "<<(i + j);
    }
    void sum3(int i, int j, int k){
        cout<<"\n Sum is "<<(i + j + k);
    }
    void sum4(int i, int j, int k, int l){
        cout<<"\n Sum is "<<(i + j + k + l);
    }
    void sum5(int i, int j, int k, int l, int m){
        cout<<"\n Sum is "<<(i + j + k + l + m);
    }
};

int main(){
    Math m;
    m.sum2(11, 22);
    m.sum3(11, 22, 33);
    m.sum4(11, 22, 33, 44);
    m.sum5(11, 22, 33, 44, 55);
    return 0;
}

#include<iostream>

using namespace std;

class Math{
    public:
    void sum(int i, int j){
        cout<<"\n Sum is "<<(i + j);
    }

    void sum(float i, float j){
        cout<<"\n Sum is "<<(i + j);
    }
};

int main(){
    Math m;
    m.sum(11, 22); /// integers
    m.sum(1.1f, 2.2f); /// floats
    return 0;
}

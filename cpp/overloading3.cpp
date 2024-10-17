#include<iostream>

using namespace std;

class Math{
    public:
    void sum(int i, int j){
        cout<<"\n Sum is "<<(i + j);
    }
};

int main(){
    Math m;
    m.sum(11, 22);
    m.sum(11, 22);
    return 0;
}

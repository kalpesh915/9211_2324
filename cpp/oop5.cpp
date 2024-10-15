#include<iostream>

using namespace std;

class Box{
    int h, w, b;

    public:
    Box(){
        cout<<"Constructor Called"<<endl;
    }
};

int main(){
    Box b1, b2, b3, b4, b5;
    return 0;
}

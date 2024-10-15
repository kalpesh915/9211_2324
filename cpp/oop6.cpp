#include<iostream>

using namespace std;

class Box{
    int h, w, b;

    public:
    Box(){
        cout<<"Default Constructor Called"<<endl;
        h = w = b = 5;
    }

    void volume(){
        cout<<"\n Volume of Box is "<<h*w*b;
    }
};

int main(){
    Box b1, b2, b3, b4, b5;
    b1.volume();
    b2.volume();
    b3.volume();
    b4.volume();
    b5.volume();
    return 0;
}

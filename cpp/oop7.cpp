#include<iostream>

using namespace std;

class Box{
    int h, w, b;

    public:
    Box(int i, int j, int k){
        cout<<"Parameterized Constructor Called"<<endl;
        h = i;
        w = j;
        b = k;
    }

    void volume(){
        cout<<"\n Volume of Box is "<<h*w*b;
    }
};

int main(){
    Box b1(2,3,3), b2(3,4,5), b3(1,4,6), b4(5,6,7), b5(4,4,3);
    b1.volume();
    b2.volume();
    b3.volume();
    b4.volume();
    b5.volume();
    return 0;
}

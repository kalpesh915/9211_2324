#include<iostream>

using namespace std;

class Box{
    int h, w, b;

    public:
    Box(int i, int j, int k){
        ///cout<<"Parameterized Constructor Called"<<endl;
        h = i;
        w = j;
        b = k;

        volume();
    }

    void volume(){
        cout<<"Volume of Box is "<<h*w*b<<endl;
    }
};

int main(){
    Box b1(2,3,3), b2(3,4,5), b3(1,4,6), b4(5,6,7), b5(4,4,3);
    return 0;
}

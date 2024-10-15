#include<iostream>

using namespace std;

class Box{
    int h, w, b;

    public:
    Box(int i, int j, int k){
        h = i;
        w = j;
        b = k;
    }

    void volume(){
        cout<<"Volume of Box is "<<h*w*b;
    }
};

int main(){
    Box b1(5, 6, 7);
    b1.volume();
    return 0;
}

#include<iostream>

using namespace std;

class Box{
    int h, w, b;

    public:
    void setData(int i, int j, int k){
        h = i;
        w = j;
        b = k;
    }

    void volume(){
        cout<<"Volume of Box is "<<h*w*b;
    }
};

int main(){
    Box b1;
    b1.setData(3, 4, 5);
    b1.volume();
    return 0;
}

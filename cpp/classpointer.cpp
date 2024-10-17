#include<iostream>

using namespace std;

class Box{
    private:
    int h, w, b;

    public:
    Box(int i, int j, int k){
        h = i;
        w = j;
        b = k;
    }

    int volume(){
        return ( h * w * b);
    }
};

int main(){

    Box *boxptr;

    Box b1(7,4,5), b2(4,5,6), b3(5,6,7), b4(6,7,8), b5(7,8,9);

    boxptr = &b1;
    cout<<"Volume of b1 is "<<boxptr->volume()<<endl;

    boxptr = &b2;
    cout<<"Volume of b2 is "<<boxptr->volume()<<endl;

    boxptr = &b3;
    cout<<"Volume of b3 is "<<boxptr->volume()<<endl;

    boxptr = &b4;
    cout<<"Volume of b4 is "<<boxptr->volume()<<endl;

    boxptr = &b5;
    cout<<"Volume of b5 is "<<boxptr->volume()<<endl;

    return 0;
}

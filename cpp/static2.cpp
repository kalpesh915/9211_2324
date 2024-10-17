#include<iostream>

using namespace std;

class Box{
    private:
    int h, w, b;

    public:
    static int i;

    Box(int x, int y, int z){
        h = x;
        w = y;
        b = z;

        i++;
    }


};

int Box::i = 0;

int main(){
    cout<<"\n i is "<<Box::i;
    Box b1(1,2,3), b2(2,3,4), b3(3,4,5), b4(5,6,7), b5(7,8,9);
    cout<<"\n i is "<<Box::i;
    return 0;
}

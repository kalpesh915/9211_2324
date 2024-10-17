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

    int compare(Box box){
        return this->volume() > box.volume();
    }
};

int main(){

    Box b1(3,4,5), b2(4,5,6);

    cout<<"Volume of b1 is "<<b1.volume()<<endl;
    cout<<"Volume of b2 is "<<b2.volume()<<endl;

    return 0;
}

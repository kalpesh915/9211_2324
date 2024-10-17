#include<iostream>

using namespace std;

class Box{
    private:
    int h, w, b;

    public:
    Box(){
        h = w = b = 0;
    }

    Box(int x, int y, int z){
        h = x;
        w = y;
        b = z;
    }

    int volume(){
        return h * w * b;
    }

    /// operator overloading
    Box operator+(Box box){
        Box tmp;

        tmp.h = this->h + box.h;
        tmp.w = this->w + box.w;
        tmp.b = this->b + box.b;

        return tmp;
    }
};

int main(){
    Box b1(2,3,4), b2(5,6,7), ans;
    cout<<"\n Box 1 is "<<b1.volume();
    cout<<"\n Box 2 is "<<b2.volume();
    ans = b1 + b2;
    /**
            b1      b2      ans
      h      2       5      7
      w      3       6      9
      b      4       7      11

    */
    cout<<"\n Box ans is "<<ans.volume();
    return 0;
}

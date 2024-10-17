#include<iostream>

using namespace std;

class Box{
    public:
    static int i;
};

int Box::i = 0;

int main(){
    cout<<"i is "<<Box::i;
    return 0;
}

#include<iostream>

using namespace std;

const int SIZE = 10;
class mySafeArray{
    private:
    int data[SIZE];

    public:
    mySafeArray(){
        int i;
        for(i = 0; i<SIZE; i++){
            data[i] = i;
        }
    }

    int &operator[](int index){
        if(index >= SIZE){
            cout<<"\n Array Index out of Bound";
            return data[0];
        }else{
            return data[index];
        }
    }
};

int main(){
    mySafeArray msa;

    cout<<"\n Value is 0 "<<msa[0];
    cout<<"\n Value is 3 "<<msa[3];
    cout<<"\n Value is 7 "<<msa[7];
    cout<<"\n Value is 4 "<<msa[4];
    cout<<"\n Value is 40 "<<msa[140];
    return 0;
}

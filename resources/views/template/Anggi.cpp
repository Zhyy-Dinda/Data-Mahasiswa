#include <iostream>
using namespace std;

void fungsi(){
    cout<<"menghitungluas segi tiga"<<endl;
}

void LuasSegiTiga(){
    int alas,tinggi;
        cout<<"nilai alas = ";
        cin >>alas;
        cout<<"nilai tinggi = ";
        cin >>tinggi;

    float Galuh = 0.5*alas*tinggi;
        cout<<"Luas segi tiga adalah = "<<Galuh<<endl;
}


int main(){
    fungsi ();
    LuasSegiTiga();
    return 0;
}

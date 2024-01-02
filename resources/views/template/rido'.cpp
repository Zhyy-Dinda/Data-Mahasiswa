#include <iostream>
using namespace std;

void fungsi1(){
    cout << "Hello" << endl;
}
void fungsi2(){
    int als, ting;
    float luas;
    cout << "=== HITUNG LUAS SEGITIGA === "<< endl;
    cout << endl;
    cout << "Masukan alas segitiga : ";
    cin >> als;
    cout <<"Masukan tinggi segitiga : ";
    cin >> ting;
    luas = als/2 * ting;
    cout << "Luas segitiga adalah = "<< luas <<endl;
}
int main(){
    fungsi1();
    fungsi2();
}

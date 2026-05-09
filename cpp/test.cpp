#include <iostream>
using namespace std;

int main(){
    string name;
    int age;

    cout << "What is your name: ";
    cin >> name;
    cout << "What is your age: ";
    cin >> age;

    cout << "Hello " << name << " you are " << age << " years old.";
}
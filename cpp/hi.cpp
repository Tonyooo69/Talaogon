#include <iostream>
using namespace std;

int main() {
    int num1, num2;
    cout << "Enter First Number: ";
    cin >> num1;
    cout << "Enter Second Number: ";
    cin >> num2;
    
    for (int i = 0; i < 10; i++) {
        cout << num1 << " x " << i << " = " << num1 * i << endl;
    }
    return 0;
}

#include <iostream>
#include <cstdio>
#include <math.h>
using namespace std;

int main()
{
	int a, b;
	double r;
	int n;
	cin >> r >> n;
	double x, y;
	double firstX, firstY;
	double preX, preY, sum;
	bool hasFirst = false;
	for(int i = 0; i < n; ++i){
		cin >> x >> y;
		if(! hasFirst){
			firstX = x;
			firstY = y;
			preX = x;
			preY = y;
			sum = 0.0;
			hasFirst = true;
		}else{
			sum = sum + sqrt((x - preX) * (x - preX) + (y - preY)*(y - preY));
			preX = x;
			preY = y;
		}
	}
	sum = sum + sqrt((x - firstX) * (x - firstX) + (y - firstY) * (y - firstY));
	sum = sum + 2 * 3.14 * r;		
	printf("%.2f\n", sum);
	return 0;
}

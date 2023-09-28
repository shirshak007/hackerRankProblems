A person wants to determine the most expensive computer keyboard and USB drive that can be purchased with a give budget. Given price lists for keyboards and USB drives and a budget, find the cost to buy them. If it is not possible to buy both items, return -1.

<b>Example</b>
b = 60<br>
keyboards = [40, 50, 60]<br>
drives = [5, 8, 12]<br>



The person can buy a 40 keyboards + 12 USB drives = 52, or a 50 keyboards + 8 USB drives = 58. Choose the latter as the more expensive option and return 58.

<h5>Function Description</h5>

Complete the getMoneySpent function in the editor below.

<h5>getMoneySpent has the following parameter(s):</h5>

int keyboards[n]: the keyboard prices <br>
int drives[m]: the drive prices<br>
int b: the budget<br>

<b>Returns</b><br>
-> int: the maximum that can be spent, or -1 if it is not possible to buy both items

<br>
<b>Input Format</b><br>
-> The first line contains three space-separated integers b, n, and m, the budget, the number of keyboard models and the number of USB drive models.
-> The second line contains n space-separated integers , the prices of each keyboard model.
-> The third line contains m space-separated integers , the prices of the USB drives.

<b>Sample Input 0</b><br>
10 2 3<br>
3 1<br>
5 2 8<br>
<b>Sample Output 0</b><br>
9<br>

<h6>Explanation 0</h6>
Buy the 2nd keyboard and the 3rd USB drive for a total cost of 8 + 1 = 9.

<br>
<br>
<b>Sample Input 1</b><br>
5 1 1<br>
4<br>
5<br>
<b>Sample Output 1</b><br>
-1<br>

<h6>Explanation 1</h6>
<br>
There is no way to buy one keyboard and one USB drive because 4 + 5 > 5, so return -1.

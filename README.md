An avid hiker keeps meticulous records of their hikes. During the last hike that took exactly  steps, for every step it was noted if it was an uphill, , or a downhill,  step. Hikes always start and end at sea level, and each step up or down represents a  unit change in altitude. We define the following terms:

A mountain is a sequence of consecutive steps above sea level, starting with a step up from sea level and ending with a step down to sea level.
A valley is a sequence of consecutive steps below sea level, starting with a step down from sea level and ending with a step up to sea level.
Given the sequence of up and down steps during a hike, find and print the number of valleys walked through.

<b>Example</b><br>
<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg">
<foreignObject width="100" height="100">
    <div xmlns="http://www.w3.org/1999/xhtml">
        <ul>
            <li>steps = 8 = [DDUUUUDD]</li>
        </ul>
        <!-- Other embed HTML element/text into SVG -->
    </div>
</foreignObject>
</svg>

The hiker first enters a valley  units deep. Then they climb out and up onto a mountain  units high. Finally, the hiker returns to sea level and ends the hike.

<b>Function Description</b>

Complete the counting Valleys function in the editor below.

countingValleys has the following parameter(s):
<ul>
  <li>int steps: the number of steps on the hike</li>
  <li>string path: a string describing the path</li>
</ul>

<b>Returns</b>
<ul>
  <li>int: the number of valleys traversed</li>
</ul>

<b>Input Format</b>

The first line contains an integer , the number of steps in the hike.
The second line contains a single string , of  characters that describe the path.

Constraints
<ul>
  <li>
    2 <= steps <= 10^6
  </li>
  <li>
    path[i] ε {UD}  
  </li>
</ul>


<b>
Sample Input
</b>
<br>
8<br>
UDDDUDUU
<br>
<br>
<b>
Sample Output
</b><br>
1
<h5>Explanation</h5>

If we represent _ as sea level, a step up as /, and a step down as \, the hike can be drawn as:

<p>
_/\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;\/\/
</p>
The hiker enters and leaves one valley.

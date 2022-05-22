<?php
print("值日生<br>");
$duty=array(0,2,3,4,5,6,7,8,9,11,12,13,14,15,16,18,19,20,21,23,24,25);
shuffle($duty);
for($i=0;$i<22;$i=$i+2){print($duty[$i].",".$duty[$i+1]."<br>");}
shuffle($duty);
for($i=0;$i<22;$i=$i+2){print($duty[$i].",".$duty[$i+1]."<br>");}
print("打掃<br>");
$duty=array(2,3,4,6,7,8,9,11,12,13,14,15,16,18,19,20,21,23,24,25);
shuffle($duty);
shuffle($duty);
shuffle($duty);
shuffle($duty);
for($i=0;$i<20;$i++){print($duty[$i]."<br>");}

?>

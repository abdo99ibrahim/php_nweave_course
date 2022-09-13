<?php

$count = 0;
// while($count<=10){
//     echo $count.", "; // 0 , 1 , 2 , 3 , 4 , 5 , 6 , 7 , 8 , 9 , 10 
//     $count++;
// }
// echo "<br>";
// echo "Count: {$count}"; // 11
// echo "<br>";


echo "Even No between 1 to 100 are:--";
echo"<br />";
while($count <=100){
    if($count % 2 == 0){
        echo $count.", ";
    }
    $count++;
}
echo "<br> <br>";
echo "Odd No between 1 to 100 are:--";
echo"<br />";
for($x=1;$x<=100;$x++)
    if($x % 2 != 0){
        echo $x.", ";
    }
?>
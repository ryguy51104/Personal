<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignment 08b - More PHP programming</title>

    <style>
        h3{
            color: blue;
        }


    </style>
</head>

<header>
    <h2>Assignment 8b - Ryan Cahill</h2>
</header>
<body>
    


<?php

echo"<h3>Part 1 - The multiplication table for 12</h3>";

for ($i = 1; $i < 11; $i++) {
    $sum = 12 * $i;
    echo "<br>12 X $i = $sum";
}

echo"<h3>Part 2 - The the next 20 leap years!</h3>";

for ($i = 2023; $i < 2043; $i++) {

    if ($i %4== 0) {
        echo "<span style = \"color: green\">$i </span> ";
    } else {
        echo "$i ";
    }
}

echo"<h3>Part 3 - The factorials up to 10 (<u>not</u> using a php function)</h3>";

echo"<table border = '1'>";
echo"<tr>";
echo "<th>Number</th>";
echo "<th>Factorials</th>";
echo"</tr>";
for ($i = 1; $i < 11; $i++) {
    echo "<tr>";
    echo"<td>$i!</td>";
    echo"<td>";
    $sum = 1;
    for ($j = 1; $j < $i+1; $j++) {
        if ($j == $i) {
            echo"<b>$sum ";
        } else {
            echo"$sum ";
        }
        $sum += $j * $sum ;
    }
    echo "</td>";
        
}
echo"</table>";


echo"<h3>Check 10 random grades from 40 to 90 & note if they passed (Grade is 60 or higher)</h3>";


for ($i = 0; $i <= 9; $i++){
    $grade = rand(40,90);

    if ($grade >= 60){
        echo"<span style = \"color: green\"> <br>Random Grade $i - $grade Passed!";
    } else {
        echo"<span style = \"color: red\"> <br>Random Grade $i - $grade Failed!";

    }

}


?>



</body>
</html>
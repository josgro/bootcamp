<?php

print("<h1>Loops</h1>");

print("<h2>Opdracht 1</h2>");

// Display 1-2-3-4-5-6-7-8-9-10

for($x = 1; $x < 11; $x++) {
    echo "$x";
    if ($x == 10){
        break;
    }
    echo "-";
}

echo "<br><br>";    

print("<h2>Opdracht 2</h2>");

// Add all the integers between 0 and 30 and display the total

for ($y = 0; $y < 30; $y++) {
    $z = $z + $y;
}
echo "$z";

echo "<br><br>";

print("<h2>Opdracht 3</h2>");

/* Create a script to construct the following pattern, using nested for loop
*
**
***
****
***** */

for ($x = 0; $x < 5; $x++) {
    for ($y = 0; $y <= $x; $y++) {
        echo "*";
    }
    echo "<br>";
}

echo "<br><br>";

print("<h2>Opdracht 4</h2>");

/* Create a script to construct the following pattern, using nested for loop
*
**
***
****
*****
*****
****
***
**
* */

for ($x = 0; $x < 5; $x++) {
    for ($y = 0; $y <= $x; $y++) {
        echo "*";
    }
    echo "<br>";
}
for ($x = 0; $x < 5; $x++) {
    for ($z = $x; $z < 5; $z++) {
        echo "*";
    }
    echo "<br>";
}

print("<h2>Opdracht 5</h2>");

/* Write a PHP script using nested for loop that creates a chess board as shown below. Use table width="270px" and take 30px as cell height and width. */

echo '<table style="border: solid 1px black">';

for ($i = 1; $i <= 4; $i++) {
        echo '<tr>';
        for ($y = 1; $y <= 4; $y++) {
        echo '<td style="border: solid 1px black; background-color: black; height: 30px; width: 30px;"></td><td style="border: solid 1px black; background-color: white; height: 30px; width: 30px;"></td>';
        }
        echo '</tr><tr>';
        for ($x = 1; $x <= 4; $x++) {
        echo '<td style="border: solid 1px black; background-color: white; height: 30px; width: 30px;"></td><td style="border: solid 1px black; background-color: black; height: 30px; width: 30px;"></td>';
        }
        echo '</tr>';

}

echo "</table>";

?>
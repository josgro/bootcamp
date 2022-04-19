<?php

print("<h1>Arrays</h1>");

print("<h2>Opdracht 1</h2>");

$color1 = array('white', 'green', 'red', 'blue', 'black');

// Write a script which will display the following string
// "The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"

// and the words 'red', 'green' and 'white' will come from $color.

echo '<p>"The memory of that scene for me is like a frame of film forever frozen at that moment: the '. $color1[2] . ' carpet, the ' . $color1[1] . ' lawn, the ' . $color1[0] . ' house, the leaden sky. The new president and his first lady. - Richard M. Nixon"</p>';

print("<h2>Opdracht 2</h2>");

$color2 = array('white', 'green', 'red');

// Write a PHP script which will display the colors in the following way :

// Output :

// green
// red
// white

echo "<ul>
    <li>$color2[1]</li>
    <li>$color2[2]</li>
    <li>$color2[0]</li>
</ul>";

print("<h2>Opdracht 3</h2>");

// Create a PHP script which displays the capital and country name from the above array $ceu. Sort the list by the capital of the country.

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

asort($ceu);

foreach($ceu as $country => $capital){
    echo "The capital of $country is $capital"."<br>";
}

print("<h2>Opdracht 4</h2>");

// Write a PHP script to calculate and display average temperatures, five lowest and highest temperatures

$temps = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
$tempsArray = explode (',', $temps);

$total = 0;
$length = count($tempsArray);

foreach($tempsArray as $temp){
    $total = $total + $temp;
}
$average = $total / $length;
echo "The average temperature is: $average.<br>";

sort($tempsArray);
echo "List of five lowest temperatures: ";
for ($i = 0; $i < 5; $i++){
    echo "$tempsArray[$i]";
} echo "<br>";

rsort($tempsArray);
echo "List of five highest temperatures: ";
for ($i = 0; $i < 5; $i++){
    echo "$tempsArray[$i]";
}

print("<h2>Opdracht 5</h2>");

// Write a PHP script that displays the highest temperature that day and which city this was in.

$weeklyTemps = [
    "Maandag" => [ 
    	"Groningen" => 25,
        	"Assen" => 12,
       	 "Emmen" => 19
    ],
     "Dinsdag" => [ 
    	"Groningen" => 26,
        "Assen" => 28,
        "Emmen" => 19
    ],
     "Woensdag" => [ 
    	"Groningen" => 16,
        "Assen" => 30,
        "Emmen" => 35
    ]
];

foreach($weeklyTemps as $day => $cityTemp){
    asort($cityTemp);
    foreach($cityTemp as $city => $temp){
    }
    $temp[0];

    echo "De hoogste temperatuur op " . $day . ", was " . $temp . " in " . $city . ".<br>";
}

?>


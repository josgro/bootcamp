<?php

print("<h1>Functions</h1>");

print("<h2>Opdracht 1</h2>");

// Write a function to check whether a number is prime or not.

// Note: A prime number (or a prime) is a natural number greater than 1 that has no positive divisors other than 1 and itself.


echo '<form><input type="number" method="get" name="inputNum" placeholder="Enter a number"></form>';

$n = $_GET['inputNum'];


// Version 1: 
// function isPrime($i) {
//     if ($i == 2 || $i == 3 || $i == 5 || $i == 7 || $i == 11 || $i == 13 || $i == 17){
//         echo "$i is a prime.";
//     } elseif ($i == NULL) {
//     } elseif ($i <= 1) {
//         echo "$i is NOT a prime.";
//     } elseif ($i%2 == 0 ) {
//         echo "$i is NOT a prime.";
//     } elseif ($i%3 == 0 ) {
//         echo "$i is NOT a prime.";
//     } elseif ($i%5 == 0 ) {
//         echo "$i is NOT a prime.";
//     } elseif ($i%7 == 0 ) {
//         echo "$i is NOT a prime.";
//     } elseif ($i%11 == 0 ) {
//         echo "$i is NOT a prime.";
//     } elseif ($i%13 == 0 ) {
//         echo "$i is NOT a prime.";
//     } elseif ($i%17 == 0 ) {
//         echo "$i is NOT a prime.";
//     } else {
//         echo "$i is a prime.";
//     }
// }
// Werkt niet met hogere nummers.


// Version 2:

function isPrime($n){
    if ($n == 1)
    return 0;
    for ($i = 2; $i <= $n/2; $i++){
        if ($n % $i == 0)
            return 0;
    }
    return 1;
}

$trueOrFalse = isPrime($n);
if ($n == NULL){}
elseif ($trueOrFalse == 1){
    echo "$n is a prime.";
} else{
    echo "$n is NOT a prime.";
}
    
isPrime($n);


print("<h2>Opdracht 2</h2>");

// Write a function to reverse a string.

echo '<form><input type="text" method="get" name="inputString" placeholder="Enter a string"></form>';

$str = $_GET['inputString'];

function reverse($str) {
    return strrev($str);
}

echo reverse($str);

print("<h2>Opdracht 3</h2>");

// Write a PHP function that checks whether a string is all lowercase.

echo '<form><input type="text" method="get" name="inputLc" placeholder="Enter a string"></form>';

$lcStr = $_GET['inputLc'];

function isLowerCase($lcStr) {
    if ($lcStr == NULL){
    } elseif (ctype_lower($lcStr)){
        echo "$lcStr exists only of lowercase letters.";
    } else {
        echo "$lcStr is NOT all lowercase.";
    }
}

isLowerCase($lcStr);

print("<h2>Opdracht 4</h2>");

// Write a function to sort an array.

print("Sort how?");

print("<h2>Opdracht 5</h2>");

// Write a PHP function that checks whether a person is eligible to vote.

// Condition
// Je moet een parameter naam en leeftijd kunnen als parameter kunnen passen aan je function.
// Je moet dynamisch kunnen outputten met echo of de persoon oud genoeg is om te stemmen.
// Tomi je bent niet oud genoeg om te stemmen.
// De stem grens is 18 jaar. 

$name = 'Jos';
$age = 13;

function isEligible ($name, $age) {
    if ($age == NULL || $name == NULL){
    } elseif ($age >= 18){
        echo "$name mag stemmen.";
    } else {
        echo "$name mag niet stemmen.";
    }
}

isEligible($name, $age);
<?php

print("<h2>Opdracht 1</h2>");

// Write a simple PHP class which displays the following string.
// 'MyClass class has been initialized!'

class myFirstClass {
    
    public static function initF(){
        echo "'MyClass class has been initialized!'";
    }
  }

myFirstClass::initF();

print("<h2>Opdracht 2</h2>");

// Write a simple PHP class which displays an introductory message like "Hello All, I am Scott", where "Scott" is an argument value of the method within the class.

class simpleClass {
    public $message = "Hello All, I am ";
    public function helloAll($name){
        return $this->message.$name;
    } 
}

$mymessage = New simpleClass();

echo $mymessage->helloAll('Scott');

print("<h2>Opdracht 3</h2>");

// Write a PHP calculator class which will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request.

// For example :
// $mycalc = new MyCalculator( 12, 6);
// echo $mycalc- > add(); // Displays 18
// echo $mycalc- > multiply(); // Displays 72

class myCalc {
    public $x;
    public $y;

    function __construct($x, $y){
        $this->x = $x;
        $this->y = $y;
    }
    public function add(){
        return $this->x + $this->y;
    }
    public function subtract(){
        return $this->x - $this->y;
    }
    public function multiply(){
        return $this->x * $this->y;
    }
    public function divide(){
        return $this->x / $this->y;
    }
}

$myAnswer = New myCalc(12, 6);
echo $myAnswer->add(); echo "<br>";
echo $myAnswer->subtract(); echo "<br>";
echo $myAnswer->multiply(); echo "<br>";
echo $myAnswer->divide(); echo "<br>";
<?php
define("FACTOR",9/5);
define("OFFSET",32);


echo("Enter temperature\n");
$temperature=(float)readline();

echo"Convert temperature into  1.Celsius  2.Fahrenheit\n ";
$choice=(int)readline();

switch($choice)
{

case 1: 
        $result= ($temperature-OFFSET)/FACTOR;
        echo"The temperature in celsius is : $result\n";
        break;

case 2: 
        $result=$temperature*FACTOR + OFFSET;
        echo"The temperature in Fahrenheit is : $result\n";
        break;
default:
        echo"Wrong choice\n";
}
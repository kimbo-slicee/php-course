<?php
//single Line Comment
# single Line comment
/* multiple line commend */
/*-------------------------------------------------------------------------------*/
//Let's start withe single line Comment
function sum($num1,$num2){
    return $num1+$num2; // this function return the somme of two number
};
$x=10;
$y=20;
# invoke function sum
echo sum($x,$y);
//let's use multi line comment:
/* create function that can help us to know time steps :
 * [1]:create function withe Name my Time
 * [2]:invoke PHP Time Function That's return timestamp
 * [3]:check user Time sessions it's same as current Time
 * [4]:set up Logic
 * */
function userTime(){
    $currentTime=time();
    echo $currentTime;
    // her you can Set up your own Logic and that is just an Example of multi line comments
}


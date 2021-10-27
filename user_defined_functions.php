<?php
function motto(){
    echo "Hi there,this is our motto";
    echo"<br>";
}
motto();
function addition(){
    $x=10;
    $y=20;
    $z=$x+$y;
    echo "Your answer is $z";
    echo"<br>";
}
addition();

function avg($x,$y,$z){
    $average=($x+$y+$z)/3;
    echo "Your average is $average";
     echo"<br>";
}
avg(90,56,78);
avg(67,45,78);

function simple_interest($p,$r,$t){
    $interest=($p*$r*$t)/100;
echo "Your interest at the end of loan period will be $interest";
echo"<br>";
}
simple_interest(67,34,56);
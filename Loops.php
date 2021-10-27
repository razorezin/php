<?php
//while loop
//do while loop
//for loop
//for each loop

       //while loop

$number=0;
while ($number<=5){
    echo $number;
    $number++;
}
     //do while loop


$numberTwo=10;
do{
    echo $numberTwo;
    $numberTwo++;
    echo"<br>";
}while($numberTwo<=15);

     //for loop

for ($numberThree=20; $numberThree<=25; $numberThree++){
    echo $numberThree;
    echo "<br>";
}

    //for each loop

$names=array("King","Cliff","Allan","Udi","Kiki","Hibo","Mike");
foreach ($names as $jina){
    echo $jina;
    echo"<br>";
}

for ($numberx=100;$numberx>=0;$numberx--){
     if ($numberx%2==0)
     echo $numberx;
     echo"<br>";
}
$numbery=100;
do{
    if ($numbery%2==0)
    echo $numbery;
    $numbery--;

    echo "<br>";
}while($numbery>=0);


$numberz=100;
while ($numberz>=0){
    if ($numberz%2==0)
        echo $numberz;
    $numberz--;

}
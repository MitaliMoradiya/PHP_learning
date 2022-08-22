<?php
 echo "hello world";

 echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora, nobis."; "<br>";//lorem 1..n it print no.of word


//----------------------------VARIABLE==========================
$name = "abc";echo "<br>";

$fname = "gunjan";
$lname = "gard"; 
echo "my name is:".$fname.$lname; echo "<br>";
print "my name is:".$fname.$lname; "<br>";

$x = 1234;
var_dump($x);  //dump fuction return datatype and value;
echo "$x";  //echo print only value

$y = array("std1","std2","std3");
var_dump($y); "<br>";


$variable1 = 34;   
$variable2 = 40;
echo $variable1;
echo $variable2;
echo "<br>";

echo $variable1 + $variable2;

//----------------------------Operators==========================
//Arithmatic Operators
echo "the value of variable1 + variable2 is:";
echo "<br>";
echo $variable1 + $variable2;

echo "<h1>Assignment Operators</h1>";
$newVar = $variable1;               //newvar is == to variable1  
 $newVar += 2;                      // (add 2 in var1)
// $newVar *= 2;
// $newVar -= 2;    
// $newVar /= 2;                   //add to in new variable
echo "value of new variable:";
echo $newVar;                      // new variable is == to variable1
echo "<br>";


//Comparison Operators
echo"<h1> comparison operator</h1>";
echo var_dump(1==10)."<br>";
echo var_dump(1!=10). "<br>";
echo var_dump(1>=10)."<br>";
echo var_dump(1<=10)."<br>";


echo "<h1>Increent/Decrement Operators</h1>";
echo $variable1++;
echo "<br>";
echo $variable1;

echo $variable2++;
echo "<br>";

echo $variable2;
echo "<br>";

echo $variable1--;
echo "<br>";
echo $variable1;


//lOgical Operators
//and(&&)
$myVar = (true and true); "<br>";

$name = "helo world";
echo "helooo " ;


//============================ IF STATEMENT ========
 
$a = 10;
$b = 50;
if ($a>$b)
    {
    echo " $a is true";
}
else{
    echo "$a is fAlse"."<br>";
}

//=========================== ELSE IF============


$marks = 100;
if ($marks<50)
{
    echo "AVERAGE MARKS"."<br>";
}
elseif ($marks>50)
{
    echo "GOOD MARKS"."<br>";

}
elseif ($marks==100){
    echo "ExCELLENT"."<br>";
}
else
{
    echo "better marks";
}

//============================ SWITCH ===========
$month = "oct";
switch($month){
    case "jan":
        echo "1";
        break;
    case "feb":
        echo "2";
        break;
    case "march":
        echo "3";
        break;
    default:
        echo "there is no num of month";
}

echo "<h1> switch days</h1>";
$days = "monday";
switch($days){
    case "monday":
        echo "1";
        break;
    case "tuseday":
        echo "2";
        break;
    case "wednesday":
        echo "3";
        break;
    default:
    echo "there is no days";
}

//=================================== WHILE =======

$i = 4;
while($i <=10){
    echo $i++;

}

//================================ DO WHILE ========
$b = 5;
 do{
   
    $b++;
 }
 while($b <= 10);

 
//================================ FOR LOOP ============

for($i=0; $i<=10; $i++){
    echo "*";
}

echo "<h1> explode </h1>";
$str = "a:b:c:d";
$ar = explode(":",$str);


//=============CURRENT POINTER==========

$snacks= array("biscuites", "chocoltes", "wafers","rolls");
$snack= current($snacks);
echo ("the current snacks is $snack");

$car = array("bmw", "audi", "kia");
$cars = current($car);
echo("the current car is $cars");

$cars = next($car);                     //next point
echo("the next car is $cars");

$cars = prev($car);                        //previous point
echo("the previous car is $cars");


$cars = next($car);
echo("the next car is $cars");

$cars = reset($car);                        //first element print
echo("first car is: $cars");

$cars = end($car);                          //last elemtnt print
echo("first car is: $cars");

unset($car[0]);
print_r($car);                      //delete 0 index element


//====================ARRAY_DIFF==================
$color1= array("a" => "pink","b" => "blue","c" => "white");
$color2 = array("d"=> "pink","e" => "blue","g"=> "white");
$color3 = array("g" => "yellow","h"=>"blue","i"=> "red");      //it defines differnce between no.of array given

$result = array_diff($color1,$color2,$color3);
print_r($result);

//================ ARRAY_CHUNK ======================
$Stattionary = array ("pen", "pencil", "eraser", "sharpner", "colorbox","scale");
print_r(array_chunk($Stattionary,2));         //it create new array after 2 element

//================= ARRAY_COLUMN==================
// $a = array(
//     array(

//         "id" => 1001,
//         'f_name' => "gify";
//         "l_name" => "joe";
//     ),
//     array(
//         "id" => 1002,
//         "f_name" => "smit",
//         "l_name" => "louise";
//     )
//     );
//     $last_name = array-column($a, "l_name");
//     print_r($last_name);

//===================== CONSTANT ============

define("MESSAGE", "helloo javatpoint");
echo MESSAGE;

//==================== STRING ===================
$string_1 = "double quote";
$string_2 = 'single quote';
echo  $string_1, "<br>,$string_2";

$str1 = "helooo";
$str2 = "1234";
echo $str1."".$str2;

strlen($str1); echo"<br>";

echo date("y.d.m");


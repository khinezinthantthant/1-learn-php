<?php

// variable

//$a;
// $a=10;
// $myName='hein htet zan';
// $age=28;
// $myWeight =230.0;

// print($myName);

// var_dump($a);
// var_dump($myName);
// var_dump($age);

// print("my name is $myName");
// print('my name is $myName');

//index array
// $students = ['mg mg','kyaw kyaw','zaw zaw'];
// $students[3]='k k';
// $students[4]='t t';
// $students[7]='a a';
// $students[8]='ma ma';


// print_r($students);
// print_r($students[0]);
// print_r($students[1]);
// print_r($students[2]);

// associated array 
// $mySelf = [
//     "name"=>'hhz',
//     "age"=>28,
//     "weight"=>230.8,
//     "skill"=>["html","css",'js','php'],
// ];

// print_r($students);
// print_r($mySelf);
// print_r($mySelf["name"]);
// print_r($mySelf["age"]);
// print_r($mySelf["weight"]);
// print_r($mySelf["skill"]);
// print_r($mySelf["skill"][1]);

// $x=null;

// print($x);

// $true = true;
// $false = false;

// var_dump($true);
// var_dump($false);

// $firstname ="hein";
// $lastname="htet";

// print($firstname.$lastname);

// function run(){
//     return "I'm run function \n";
// }

// function add($x,$y){
//     return $x+$y;
// }

// function aaa(){
//     $x =5;
//     $y = 100;
//     // echo $x+$y;
// }

// print(run());
// print(add(5,10));
// var_dump(aaa());

// echo count($students);
// echo strtoupper($myName);

// $add = fn($x,$y) => $x+$y;

// echo $add(5,10);

// if(false){
//     echo "this is true";
// }else{
//     echo "this is false";
// }

// $mark =95;

// if($mark < 40){
//     echo "U are fail";
// }else if($mark <80){
//     echo "U are pass";
// }else if($mark >= 80){
//     echo 'U are d';
// }

// if($mark >=80){
//     echo 'U are d';
// }else if($mark >= 40){
//     echo 'U are pass';
// }else if($mark < 40){
//     echo 'U are fail';
// }


// $mark =30;


// switch($mark){
//     case $mark >= 80;
//     echo "U are D";
//     break;

//     case $mark >=40;
//     echo "U are pass";
//     break;

//     case $mark <40;
//     echo "U are fail";
//     break;
// }

// for($i=0;$i<=10;$i++){
//     echo "loop $i \n";
// }


// $students = ['mg mg','kyaw kyaw','zaw zaw'];
// $mySelf = [
//     "name"=>"hhz",
//     "age"=>28,
//     "weight"=>230.8,
//     "skill"=>["html","css",'js','php'],
// ];

// foreach($mySelf as $value){
//     var_dump($value);
// }
// foreach($mySelf as $key=>$value){
//     echo $key."\n";
//     var_dump($value);
// }


// for($i=0;$i<count($students);$i++){
//     echo ($i+1)." ".$students[$i]."\n";
// }

// foreach($students as $student){
//     echo $student."\n";
// }

// foreach($students as $key => $value){
//     echo $key." ".$value."\n";
// }

// $i=1;

// while($i <= 10){
//     print("while loop $i \n");
//     $i++;
// }

// do{

//     print("While loop $i \n");
//     $i++;

// }while($i <= 10);


// for($i=0;$i<=10;$i++){
//     if($i=== 5){
//         break;
//     }
//     echo "loop $i \n";
// }

// system("clear");

// $a=12;
// echo $a;

// $a='aaa';

// echo $a;

// $books =array("a","b","c");

// print_r($books);

// define("MYNAME",'HEIN HTET ZAN');

// echo MYNAME;
 
// const MYNAME ='hein htet zan';
// echo MYNAME;


// $gg = 'this is global \n';

// echo $gg;
// echo $GLOBALS['gg'];

// function run(){
//     $ll ='this is local \n';
//     global $gg;
//     return $ll;
//     // return $gg;
//     // return $GLOBALS['gg'];
// }

// echo run();
// echo $ll;


// function counter(){
//    static $n =1;
//     echo $n;
//     $n++;
//     // echo $n;
// }

// counter();
// counter();
// counter();
// counter();
// counter();

// $one = 1;
// $onePlusOne =" $one + $one ";
// echo $onePlusOne;

$text ='Min ga lar par khin byar';

// echo strlen($text);
// echo str_word_count($text);
// echo strtolower($text);
// echo strtoupper($text);
// echo ucfirst($text);
// echo ucwords($text);
// echo strrev($text);
// echo str_shuffle($text);
// echo strpos($text,"ga");
// echo str_replace('ga','za',$text);

// echo $text[0];
// echo $text[1];
// echo $text[2];
// echo $text[3];

// $longText ="Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam suscipit maiores et? Reiciendis at aliquam adipisci sapiente, repellat ab provident, architecto assumenda ratione ut similique, exercitationem quod illum natus facere?"
// $longMmText="မြန်မာနိုင်ငံသည် အရှေ့အာရှ ထိပ်သီးအစည်းအဝေး၊ ဘက်မလိုက်လှုပ်ရှားမှု၊ အာဆီယံ၊ ဘင်းမ်စတက်စသည်တို့၏ အဖွဲ့ဝင်နိုင်ငံဖြစ်သည်။";
// echo substr($longText,0,100);
// echo substr($longMmText,0,100);//not working correctly on UTF-8

// echo mb_substr($longMmText,0,150);//work with mm text

// echo str_pad("a",10,"0",STR_PAD_LEFT);
// echo "\n";

// echo str_pad("a",10,"0",STR_PAD_RIGHT);
// echo "\n";

// echo str_pad("a",10,"0",STR_PAD_BOTH);
// echo "\n";

// echo $text;
// echo "\n";

// print_r(explode(" ",$text));

// $arr = ['a','b','c','d'];
// echo implode($arr);

// $name ="    hein htet     ";
// echo strlen(rtrim($name));

// $h1 ="<h1>min ga lar par</h1>";

// echo htmlentities($h1);

// $car ="car";
// $bus = "bus";

// echo md5($car);
// echo "\n";

// echo md5($bus);

// echo "\n";

//  echo PHP_INT_MAX;
// echo "\n";
// echo PHP_INT_MIN;
// echo "\n";
// echo PHP_INT_SIZE;

// var_dump(1.2e3);

// var_dump(PHP_INT_MAX * 1000);

// echo PHP_FLOAT_MIN;
// echo "\n";
// echo PHP_FLOAT_MAX;
// echo "\n";
// echo PHP_FLOAT_DIG;
// echo "\n";
// echo PHP_FLOAT_EPSILON;

// var_dump(is_int("123"));
// var_dump(is_float(1));
// var_dump(is_infinite(10/3));

// var_dump("abc"1);

// echo pi();
// echo min(0.12,1.14,1.2,0.01);

// echo sqrt(8900);
// echo pow(2,4);
// echo round(1.5123,3);
// echo ceil(12.1234);
// echo floor(12.7734);

// echo rand(1,10);
// echo mt_rand(1,10);
// echo number_format(1000000.1234,3,".","-");

var_dump("a"+1);
echo "\n";





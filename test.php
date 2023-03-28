<?php

system("clear");

$nums =[1,42,4,7,8,19,9,20];
// // even တွေ စုပြီးတော့ ထုတ်ပေး

// $r =[];
// for($i=0;$i<count($nums);$i++){

//     if($nums[$i]%2 === 0){
//         array_push($r,$nums[$i]);
//     }
// }

// print_r($r);

$r = array_filter($nums,fn($num) => $num%2 === 0);

print_r($r);
<?php 

$txtFileName = "aa.txt";

$s = fopen($txtFileName,"a");

fwrite($s,"htet san kyi tar \n");


// $txt = file_get_contents($txtFileName);
// $txt = readfile($txtFileName);

$stream = fopen($txtFileName,"r");

// while(!feof($fopen)){
//     var_dump(fgetc($fopen));
// }

var_dump(fgetc($stream));
var_dump(feof($stream));
var_dump(fgetc($stream));
var_dump(fgetc($stream));
var_dump(fgetc($stream));
var_dump(fgetc($stream));
var_dump(fgetc($stream));
var_dump(fgetc($stream));
var_dump(feof($stream));




// $txt = fread($stream,filesize($txtFileName));
// $txt = fread($stream,15);
// $txt = file($txtFileName);

// echo fgetc($stream);
// echo fgetc($stream);
// echo fgetc($stream);
// echo fgetc($stream);
// echo fgetc($stream);
// echo fgetc($stream);
// echo fgetc($stream);
// echo fgetc($stream);



// print_r($txt);
// echo $txt;
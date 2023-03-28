<?php 

//read write

// echo file_get_contents("data.json");

// open
// read & write 

$file = fopen("data.json","r"); //stream 
$json = fread($file,filesize("data.json"));
$myName = "hein htet zan";

// copy

// copy("data.json","info.json");
// $newfileName = "aa.txt";
// if(!is_file($newfileName)){
//     touch($newfileName);
//     $f = fopen($newfileName,"w");

//     fwrite($f,$myName."\n");
//     fwrite($f,$myName);
//     fwrite($f,$myName);


//     fclose($f);
// }

$data = ["a"=>"aaa","b"=>"bbb","c"=>"ccc"];
$json = json_encode($data);
$f = fopen("data.json","w");
fwrite($f,$json);
fclose($f);










// $fileName ="bb.json";
// $folderName ="test";

// $file = $folderName."/".$fileName;
// $data = ["a"=>"aaa","b"=>"bbb","c"=>"ccc"];

// if(!is_dir($folderName)){
//     mkdir($folderName);
// }

// if(!is_file($file)){
//     touch($file);
//     $json = json_encode($data);

//     $fopen = fopen($file,"w");
//     $fwrite = fwrite($fopen,$json);
// }

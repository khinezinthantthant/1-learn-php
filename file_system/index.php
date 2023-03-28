<?php 

$fileName = "aa";
$fileExt = ".txt";
$folderName = "text-files";

// aa.txt 

// var_dump(is_dir($folderName));

if(!is_dir($folderName)){
    mkdir($folderName);
}
touch($folderName."/"."aa".$fileExt);
touch($folderName."/"."bb".$fileExt);
touch($folderName."/"."cc".$fileExt);


// unlink($folderName."/".$fileName.$fileExt);
// rmdir($folderName);

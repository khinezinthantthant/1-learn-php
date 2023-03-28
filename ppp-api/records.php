<?php

require_once "./functions.php";

// dd(scanFiles(RECORD_DIR),true);

$data = array_map(function ($file){
    $currentFile = json_decode(file_get_contents(RECORD_DIR."/".$file),true);
    $currentFile["file"] = $file;
    $currentFile["location"] = url($file);
    return $currentFile;
},scanFiles(RECORD_DIR));

echo response($data);
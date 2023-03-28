<?php 

// echo "<pre>";
// print_r($_FILES);

// die();

$dir="store";
foreach($_FILES["certificates"]["name"] as $key=>$file){

    $newName = $dir."/".uniqid().".photo." . pathinfo($file)["extension"];
    move_uploaded_file($_FILES["certificates"]["tmp_name"][$key],$newName);
    // echo $newName."<br>";
}
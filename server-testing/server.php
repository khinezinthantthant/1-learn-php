<?php

// echo "<pre>";
// print_r($_REQUEST);
// print_r($_GET);
// print_r($_POST);

// print_r($_FILES);

// $data = file_get_contents('php://input');
// echo $data;

// echo "My name is {$_POST['your_name']} and my email is {$_POST['your_email']}";

// header("Content-type:application/json");
// header("Content-type:Image/jpeg");
header("HTTP/1.1 404 Not Found");

// header("Content-type:application/pdf");

echo json_encode($_POST);
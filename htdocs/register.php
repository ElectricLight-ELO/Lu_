<?php
$name = "";
$first = "";
$second = "";
$email = "";
$password = "";
if(isset($_POST["userName"])){
    $name = $_POST["userName"];
}
if(isset($_POST["firstName"])){
    $first = $_POST["firstName"];
}
if(isset($_POST["lastName"])){
    $second = $_POST["lastName"];
}
if(isset($_POST["email"])){
    $email = $_POST["email"];
}
if(isset($_POST["password"])){
    $password = $_POST["password"];
}

$dataToWrite = $name . ':' . $first . ':' . $second . ':' . $email . ':' . $password;

$file = fopen("profileData.txt", "a");

fwrite($file, $dataToWrite . PHP_EOL);

header("Location: profile.html");
exit;
?>
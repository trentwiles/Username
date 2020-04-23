<?php
$score = 0;
$fails = 0;
$eval = 0;
$word = "YT";
$word2 = "Studios";
$word3 = "Productions";
$word4 = "Plays";
$word5 = "Playz";
$word6 = "plays";
$word7 = "RBLX";
$word8 = "Roblox";
$word9 = "playz";
$wordz = "0";
$wordz2 = "0";
$wordz3 = "0";
$wordz4 = "0";
$wordz5 = "0";
$wordz6 = "0";
$wordz7 = "0";
$wordz8 = "0";
$wordz9 = "0";

$mystring = $_GET['username'];
 
// Test if string contains the word 
if(strpos($mystring, $word) !== false){
    $score = $score + 1;
    $wordz = 1;
} else{
    $fails = $fails + 1;
}

if(strpos($mystring, $word2) !== false){
    $score = $score + 1;
    $wordz2 = 1;
} else{
    $fails = $fails + 1;
}

if(strpos($mystring, $word3) !== false){
    $score = $score + 1;
    $wordz3 = 1;
} else{
    $fails = $fails + 1;
}

if(strpos($mystring, $word4) !== false){
    $score = $score + 1;
    $wordz4 = 1;
} else{
    $fails = $fails + 1;
}

if(strpos($mystring, $word5) !== false){
    $score = $score + 1;
    $wordz5 = 1;
} else{
    $fails = $fails + 1;
}

if(strpos($mystring, $word6) !== false){
    $score = $score + 1;
    $wordz6 = 1;
} else{
    $fails = $fails + 1;
}

if(strpos($mystring, $word7) !== false){
    $score = $score + 1;
    $wordz7 = 1;
} else{
    $fails = $fails + 1;
}

if(strpos($mystring, $word8) !== false){
    $score = $score + 1;
    $wordz8 = 1;
} else{
    $fails = $fails + 1;
}

if(strpos($mystring, $word9) !== false){
    $score = $score + 1;
    $wordz9 = 1;
} else{
    $fails = $fails + 1;
}

if (preg_match('/[0-9]/', $mystring)) {
    $score = $score + 1;
} else {
    $fails = $fails + 1;
}

if (0 == $score) {
  $eval = ">13";
}elseif (1 == $score) {
  $eval = "12";
}elseif (2 == $score) {
  $eval = "9";
}elseif (3 == $score) {
  $eval = "7";
}elseif (4 == $score) {
  $eval = "6";
}

echo "<script src=\"https://kit.fontawesome.com/281a5c53f1.js\" crossorigin=\"anonymous\"></script>";
echo "<link href=\"/style.css\" rel=\"stylesheet\">";
echo "<h1>Results:</h1>";
echo "We found " . $score . " word(s) that set off a red flag.<br>";
echo "Your age based off your username is: " . $eval . ".<br><br>";
echo "<h1><i class=\"fas fa-info-circle\"></i>Here are some tips:</h1><br><br>";

  echo "<i class=\"fas fa-check-circle\"></i>Avoid using YT in your name. You are already on YouTube after all!<br><br>";

  echo "<i class=\"fas fa-check-circle\"></i>Avoid using Studios in your name.<br><br>";

  echo "<i class=\"fas fa-check-circle\"></i>Avoid using Prodcutions in your name. It doesn't really add to your name because every video is a production.<br><br>";

  echo "<i class=\"fas fa-check-circle\"></i>Avoid using numbers in your name. YouTube does not require a unique username, so numbers are not needed.<br><br>";


  echo "<i class=\"fas fa-check-circle\"></i>Avoid using Plays in your name. Results about your gaming videos will come up in search.<br><br>";

  echo "<i class=\"fas fa-check-circle\"></i>Avoid using Playz in your name. Results about your gaming videos will come up in search.<br><br>";

  echo "<i class=\"fas fa-check-circle\"></i>Avoid using RBLX in your name. Results about your roblox gaming videos will come up in search.<br><br>";

  echo "<i class=\"fas fa-check-circle\"></i>Avoid using Roblox in your name. Results about your roblox gaming videos will come up in search.<br><br>";


?>
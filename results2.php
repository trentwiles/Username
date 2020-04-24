<?php
$score = 0;
$fails = 0;
$eval = "highly common";
$word = "_";
$word2 = ".";
$word3 = "the";
$word4 = "real";
$word6 = "plays";

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

if (strlen($mystring)>15) {
    $score = $score + 1;
}else {
    $fails = $fails + 1;
}

if (preg_match('/[0-9]/', $mystring)) {
    $score = $score + 1;
} else {
    $fails = $fails + 1;
}

if (-0 == $score) {
  $eval = "very rare! Very well done";
}elseif (0 == $score) {
  $eval = "rare! Well done";
}elseif (1 == $score) {
  $eval = "uncommon";
}elseif (2 == $score) {
  $eval = "common";
}elseif (3 == $score) {
  $eval = "very common";
}

echo "<script src=\"https://kit.fontawesome.com/281a5c53f1.js\" crossorigin=\"anonymous\"></script>";
echo "<link href=\"/style.css\" rel=\"stylesheet\">";
echo "<h1>Results:</h1>";
echo "We found " . $score . " word(s) that set off a red flag.<br>";
echo "Your username is " . $eval . ".<br><br>";
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
<?php
/*
Write a function that reverses a sentence without exploding. 

Example

solution(‘exposing the evil’) => ‘evil the exposing’
*/
$str = "My Name is Fred";
$output = "";
$new = "";
for($i=0; $i<strlen($str); $i++){
  $char = $str[$i];
  if($char == " "){
      $output = " ".$new.$output;
      $new = "";
  }else{
      $new .= $char;
  }
}
$rev = $new.$output;
echo $rev;
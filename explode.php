<?php
$str = "Hello,world,It'sa,beautiful,day";
 
 echo $str . "<br>";

$arr = explode("," , $str);

 echo "<pre>";
 print_r($arr);
 echo "</pre>";
 
for ($i = 0; $i < count($arr); $i ++) {
echo "<li style= 'color:red; list_style:none;'>". $arr[$i]."</li>";
}
 
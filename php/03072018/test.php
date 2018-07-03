<!-- trim($str) removes all the spaces before & after the string -->
<!-- similarly lstring & rstring removes left and right spaces respectively -->

<?php

// $name = " Anju Kumari ";
// echo strlen(ltrim($name));
// echo strlen($name);

//////////////////////////////////////////////////////////
// array_map(callback, array[])

// $str_arr = [" Youtube ", "She is a programmer ", " Ravan"];
// $str_arr = array_map('trim', $str_arr);
// foreach($str_arr as $word){
// 	echo '"'.$word.'"'.'<br>';
// }


/////////////////////////////////////////////////////
// array_walk(array, callback(&$var1, $var2))
$arr = ["PHP", "Javascript", "5"];
array_walk($arr, function($v, $k){
	echo $k."=>".$v."<br>";
});
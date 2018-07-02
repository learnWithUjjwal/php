<!-- Important points -->
<!-- //// Any valid PHP code may appear inside a function, even other functions and class definitions.  -->
<!-- PHP does not support function overloading, nor is it possible to undefine or redefine previously-declared functions.  -->


<?php

// echo sum(1,2);
function sum($a, $b){
	// $a=5;
	// $b=6;
	return $a+$b;
	// echo $a+$b;
}
// Arguements must be passed to the function else it will give error
// function can be called before its definition. 
///////////////////////////////////////////////////////////////////////////////////////////////////
function foo() 
{
  function bar() 
  {
    echo "I don't exist until foo() is called.\n";
  }
}

/* We can't call bar() yet
   since it doesn't exist. */

// foo();

/* Now we can call bar(),
   foo()'s processing has
   made it accessible. */

// bar();

// Inner functions are not available until outer functions are called

///////////////////////////////////////////////////////////////////////////////////////////////////////

// function fact($x){
// 	$fact=1;
// 	for($i=1; $i<=$x; $i++){
// 		$fact = $fact*$i;
// 	}
// 	echo $fact;
// }

// function factr($x, $fact){
// 	if($x==1){
// 		return $fact;
// 	}
// 	$fact = $fact*$x;
// 	return factr($x-1, $fact);
// }
// echo factr(5,1);

function fact($x){
	if($x == 1){
		return 1;
	}
	echo "$x <br/>";
	return $x * fact($x-1);
}

// echo fact(5);
// // my_print(1);
// // $x=10;
// // echo $x + --$x;


$a = [10, 87, 67, 23];
foreach ($a as $num){
	$flag = 0;
	for($i=2; $i<$num; $i++){
		if($num % $i == 0){
			$flag = 1;
			break;
		}
	}
	if($flag == 1){
		echo "$num is not prime<br>";
	}else{
		echo "$num is prime<br>";
	}
}




// function add_some_extra($string)
// {
//     $string .= 'and something extra.';
//     echo $string."<br>";
// }
// $str = 'This is a string, ';
// add_some_extra($str);
// echo $str;    // outputs 'This is a string, and something extra.'

// $b = 10;
// function jsum(&$a){
// 	$a = $a + 5;
// 	echo $a;
// }
//  jsum($b);
//  echo $b;


 // Find the product of numbers from 5 to 10 using recursive function
 // Print 1 to 100 using recursive function
 // Write an example program to show the difference between pass by value & pass by reference
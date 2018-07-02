<?php
// function makecoffee($types = array("cappuccino"), $coffeeMaker = NULL)
// {
//     $device = is_null($coffeeMaker) ? "hands" : $coffeeMaker;
//     return "Making a cup of ".join(", ", $types)." with $device.\n";
// }
// // echo makecoffee();
// echo makecoffee(array("cappuccino", "lavazza"), "teapot");

/////////////////////////////////////////////////////////////////////////////////////////////////

//Variable length arguements
// It will accept infinite number of arguments & can be accessed inside the function using the array

// function sums(...$nums){
// 	$sum=0;
// 	foreach($nums as $v){
// 		$sum+= $v;
// 	}
// 	return $sum;
// }
// echo sums(1, 2, 3, 4);

//////////////////////////////////////////////////////////////////////
// Globals variables are stored in $GLOBALS array then it can be accessed using $GLOBALS['variable_name'];
// variable name should be without $

// $num1 = 10;
// $num2=20;
// function sum(){

// 	echo $GLOBALS['num1'] + $GLOBALS['num2'];
// }
// sum();

// Global variables can also be accesed inside function using glocal keyword.
// By declaring them global keyword made them available inside the function.
// $num1 = 10;
// $num2 = 20;
// function sum(){
// 	global $num1, $num2;
// 	echo $num1+ $num2;
// }
// sum();

// use function is used only with anonymous functions
// $num1 = 10;
// $num2=20;
// $sum = function() use($num1, $num2){
// 	// global $num1, $num2;
// 	echo $num1 + $num2;
// };
// $sum();


/////////////////////////////////////////////////////////////////////////////

// function small_numbers()
// {
//     return array (0, 1, 2);
// }
// list ($zero, $one, $two) = small_numbers();
// echo $zero;

///////////////////////////////////////////////////////////////////////////////

class SimpleClass{
	public $var1 = 10;
	private $var2 = 20;

	public function Sum(){
		echo $this->var1 + $this->var2;
	}

}

$c2 = new SimpleClass;
$c2->sum();
echo "<br>".$c2->var1;
echo "<br>".$c2->var2;
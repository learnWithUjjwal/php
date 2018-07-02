 <!-- with the help of array_map(), make a square of each element of an array. -->
<?php
function sqr($n1){
    return $n1 * $n1;
}
$arr= array(1,21,3,4,5);
$output = array_map('sqr', $arr);

var_dump($output);
echo "<br>";
for($i=0; $i<count($arr); $i++){
    echo "Square of $arr[$i] = $output[$i]<br>";

}
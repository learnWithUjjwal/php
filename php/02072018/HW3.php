<!-- print only the numbers from this string $str = "5 is not 2 digits but 1 digit number" -->
<?php
$str = "53is not 2 digits13246 but 1 digit num132454654ber";
$arr1 = explode(' ', $str);
foreach($arr1 as $word){
    
    echo checkDigit($word);
}    

function checkDigit($arr){
    $flag=0;
    for($i=0; $i<strlen($arr); $i++){

    if(ctype_digit($arr[$i])){
        echo $arr[$i];
        $flag = 1;
         }
    }
    if($flag==1){
        echo "<br>";
    }

}


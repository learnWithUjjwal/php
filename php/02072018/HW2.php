<!-- // show usage of use array_walk. -->

<!-- ##array_map has no collateral effects while array_walk can; in particular, array_map never changes its arguments.

##array_map cannot operate with the array keys, array_walk can.

##array_map returns an array, array_walk only returns true/false. Hence, if you don't want to create an array as a result of traversing one array, you should use array_walk.

##array_map also can receive an arbitrary number of arrays, while array_walk operates only on one.

##array_walk can receive an extra arbitrary parameter to pass to the callback. This mostly irrelevant since PHP 5.3 (when anonymous functions were introduced).

##The resulting array of array_map/array_walk has the same number of elements as the argument(s); array_filter picks only a subset of the elements of the array according to a filtering function. It does preserve the keys. -->

<!-- // in array_walk, the callback function takes two parameters, first is value & second is key -->
<?php
function displayover($item, $color){
    echo "i like $color colored $item<br>";
}

$a= [
    'red'=>'bulb',
    'blue'=>'t-shirt'
];

array_walk($a, 'displayover');
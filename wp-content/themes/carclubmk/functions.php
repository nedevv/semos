<?php

require_once 'core/theme-setup.php';


$name = 'Filip';
var_dump( $name );


// $number1 = 5;
// $number2 = 6;

// if( $number1 > $number2) {
//     echo '<p>' . $number1 . ' is bigger than ' . $number2;
// } else {
//     echo '<h2>' . $number1 . ' is smoller than ' . $number2;
// }

// var_dump( '<br /> <br />' . $number2 );



// function getSum($number1, $number2) {
//     $number1 = 5;
//     $number2 = 6;

//     if( $number1 > $number2) {
//         echo '<p>' . $number1 . ' is bigger than ' . $number2;
//     } else {
//         echo '<h2>' . $number1 . ' is smoller than ' . $number2;
//     }
// }
// getSum(13, $number2 );


// const DDV = 5;
// $productPrice = 2;
// $price = 6;
// function getSum($number1, $number2) {
//     $sum = $n1 + $n2;

//     return $sum; // 11
// }
// $priceSum = getSum( $price, DDV ); // 2 + 11
// $sum = $productPrice + $priceSum; // 2 + 11 = 13
// echo 'The price is ' . $sum . ' den';



const DDV = 5;
$productPrice = 2;
$price = 6;
function getSum($n1, $n2) {
    if( $n1 <= 0 && $n2 >= 0 ){
        $sum = $n1 + $n2;
        return $sum;
    }
    return 'Wrong price!'; // 11
};
$priceSum = getSum( $price, DDV ); // 2 + 11
echo $priceSum;
if(is_int($priceSum)) {
    $sum = $productPrice + $priceSum; // 2 + 11 = 13
}
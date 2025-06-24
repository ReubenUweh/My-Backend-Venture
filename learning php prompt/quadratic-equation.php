<?php 

//solving a real world quadratic equation

// Function to solve the quadratic equation ax^2 + bx + c = 0

$aValue = readline("Enter the value of a: ");
$bvalue = readline("Enter the value of b: ");
$cValue = readline("Enter the value of c: ");

//step 1  - making b a negative value
$bNegative = -abs($bvalue);

//step 2 - calculating the value of the equation
$equationValue = ($bNegative * $bNegative) - (4 * $aValue * $cValue);
if ($equationValue < 0) {
    echo "The equation has no real roots value.";
} else {
    //step 3 - calculating the square root of the equation value
    $sqrtValue = sqrt($equationValue);
    
    //step 4 - calculating the two possible values of x
    $b1 = (-$bNegative + $sqrtValue) / (2 * $aValue);
    $b2 = (-$bNegative - $sqrtValue) / (2 * $aValue);

    echo "The roots of the equation are: b1 = $b1 and b2 = $b2";
}

//php quadratic-equation.php
?>
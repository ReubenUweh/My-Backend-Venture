<?php

//calculate the amount of money a user will pay for a loan

$principle = readline("Amount of money to pay:");

$rate = readline("How many percent rate:");
$time = readline("Time taken to pay the loan:");

$solution = $principle * $rate * $time / 100;
$totalOutcome = $solution + $principle;

echo "A loan taken of amount $principle at a $rate % for $time years is $totalOutcome";

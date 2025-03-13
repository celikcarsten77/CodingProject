<?php
// This function generates a random number between 1 and 10
function getRandomNumber() {
    $randomNumber = rand(1, 10);
    return $randomNumber;
}

// This function checks if the input is a palindrome (reads the same backwards as forwards)
function isPalindrome($input) {
    $reversedInput = strrev($input);
    if ($input === $reversedInput) {
        return true;
    } else {
        return false;
    }
}

// This function returns the largest prime factor of a given number
function getLargestPrimeFactor($number) {
    // Find all prime factors of the number
    $primeFactors = [];
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            $primeFactors[] = $i;
        }
    }
    // Return the largest prime factor
    return end($primeFactors);
}

// This function returns the number of days in a given month and year
function getNumberOfDaysInMonth($month, $year) {
    $daysInMonth = [
        1 => 31,
        2 => 28,
        3 => 31,
        4 => 30,
        5 => 31,
        6 => 30,
        7 => 31,
        8 => 31,
        9 => 30,
        10 => 31,
        11 => 30,
        12 => 31
    ];
    if ($month < 1 || $month > 12) {
        return -1;
    }
    if ($year % 4 === 0 && ($month === 2 || $month > 2)) {
        return 29;
    }
    return $daysInMonth[$month];
}

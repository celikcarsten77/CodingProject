<?php

// function to generate a random number between 1 and 10
function getRandomNumber() {
  return rand(1, 10);
}

// function to generate a random string of length 5
function getRandomString() {
  $length = 5;
  $characters = 'abcdefghijklmnopqrstuvwxyz';
  $string = '';
  for ($i = 0; $i < $length; $i++) {
    $string .= $characters[rand(0, strlen($characters) - 1)];
  }
  return $string;
}

// function to generate a random boolean value
function getRandomBoolean() {
  return (bool) rand(0, 1);
}

// function to generate a random color
function getRandomColor() {
  $colors = array('red', 'blue', 'green', 'yellow');
  return $colors[rand(0, count($colors) - 1)];
}

// function to generate a random shape
function getRandomShape() {
  $shapes = array('square', 'circle', 'triangle', 'rectangle');
  return $shapes[rand(0, count($shapes) - 1)];
}

// function to generate a random number between 1 and 10, with no duplicates
function getRandomNumberNoDuplicates() {
  $arr = array();
  while (count($arr) < 10) {
    $randNum = rand(1, 10);
    if (!in_array($randNum, $arr)) {
      $arr[] = $randNum;
    }
  }
  return implode(', ', $arr);
}

// function to generate a random string of length 5 with no duplicates
function getRandomStringNoDuplicates() {
  $str = '';
  while (strlen($str) < 5) {
    $randStr = rand(1, 10);
    if (!in_array($randStr, str_split($str))) {
      $str .= $randStr;
    }
  }
  return $str;
}

// function to generate a random boolean value with a 50% chance of being true
function getRandomBooleanWithChance() {
  if (rand(1, 2) == 1) {
    return true;
  } else {
    return false;
  }
}

?>
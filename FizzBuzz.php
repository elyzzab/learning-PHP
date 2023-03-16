<?php
/*
  "FizzBuzz" (index.php only)
  Chapter: Loops in PHP
  ---
  Task:
  "FizzBuzz is one of the most commonly used interview questions for applicants to programming positions.
  Each interviewer has their own variant, but the prompt is usually something like:
  Write code that prints the numbers from 1 to 100 (inclusive), except for these cases:
  - If a number is a multiple of 3, write 'Fizz'.
  - If a number is a multiple of 5, write 'Buzz'.
  - If a number is a multiple of both 3 and 5, write 'FizzBuzz'."
*/

$counter = 1;

// using while loop
while($counter <= 100){
  if($counter % 15 === 0){
      echo "FizzBuzz";
      $counter++;
  } elseif($counter % 3 === 0){
      echo "Fizz";
      $counter++;
  } elseif($counter % 5 === 0){
      echo "Buzz";
      $counter++;
  } else {
  echo $counter;
  $counter++;
  }
  echo "\n";
}

echo "\n\nUsing the for loop and foreach loop.\n";
// using for, foreach loop
$output = [];

for($i = 1; $i <= 100; $i++){
    if($i % 15 === 0){
      array_push($output, "FizzBuzz");
  } elseif($i % 3 === 0){
      array_push($output, "Fizz");
  } elseif($i % 5 === 0){
      array_push($output, "Buzz");
  } else {
  array_push($output, $i);
  }
}

// foreach loop ver.1
foreach($output as $value){
  echo $value . "\n";
}

// foreach loop ver.2
echo "\n\nUsing the foreach loop again.\n";

foreach($output as $value){
  if($value === "Fizz"){
    continue;
  } elseif($value === "FizzBuzz"){
    break;
  }
  echo $value . "\n";
}

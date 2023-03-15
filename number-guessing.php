<?php

/*
  "PHP Number Guessing" Project (index.php file only)
  Chapter: Conditionals and Logic in PHP
  ---
  Task: "In this project, you’ll create a number guessing game. Your program will generate a random number
  between 1 and 10. You’ll run the game 10 times and tell the user some information about their guessing abilities."
*/


$play_count = 0;
$play_left = 10;
$correct_guesses = 0;
$guess_high = 0;
$guess_low = 0;

echo "Good at guessing?\nPick a number between 1 and 10 (inclusive) and see how close you get.\n\n";

function guessNumber(){
  global $play_count, $correct_guesses, $guess_high, $guess_low, $play_left;
  
  $play_count++;
  $rand_num = rand(1, 10);

  echo "What's your guess?\n";
  $guess = intval(readline(">> "));

  echo "Number of Rounds Played: " . $play_count . "\nThe random number was " . $rand_num . ".\nYou guessed " . $guess . ".\n\n";
  
  if($guess > 10){
    echo "Invalid number!\n";
    } elseif($guess < 1){
    echo "Invalid number!\n";
    } else {
    if($guess === $rand_num){
      $correct_guesses++;
      echo "Good guess!\n";
    } elseif($guess < $rand_num){
      $guess_low++;
    } elseif($guess > $rand_num){
      $guess_high++;
    }
  }

}

guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();
guessNumber();

$correct_percent = ($correct_guesses / $play_count) * 100;

echo "You guessed " . $correct_percent . "% correctly these past $play_count rounds.\n";

if($guess_high > $guess_low){
  echo "When you guessed wrong, you tended to guess high.";
} elseif($guess_high < $guess_low){
  echo "When you guessed wrong, you tended to guess low.";
} elseif($guess_high === $guess_low){
  echo "The amount of times you guessed too high or too low is the same.";
}


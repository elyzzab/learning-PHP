<?php

/*
  "Magic 8 Ball" Project (index.php file only)
  Chapter: Conditionals and Logic in PHP
  ---
  Task: "Create a function that can answer any 'yes' or 'no' question."
*/


function magic8Ball() {
  echo "Ask me a yes or no question.";
  $question = readline(">> ");
  echo "So you wonder about \"" . $question . "\"...\nI have consulted the spirits and their answer is so: \n~~";
  $answer = rand(0,19);
//  echo $answer . "\n"
  switch ($answer){
    case 0:
      echo "It is certain.";
      break;
    case 1:
      echo "It is decidedly so.";
      break;
    case 2:
      echo "Without a doubt.";
      break;
    case 3:
      echo "Yes - definitely.";
      break;
    case 4:
      echo "You may rely on it.";
      break;
    case 5:
      echo "As I see it, yes.";
      break;
    case 6:
      echo "Most likely.";
      break;
    case 7:
      echo "You can forget about it.";
      break;
    case 8:
      echo "Absolutely not.";
      break;
    case 9:
      echo "It's a no from me.";
      break;
    case 10:
      echo "You can count on it!";
      break;
    case 11:
      echo "Hard no, sorry.";
      break;
    case 12:
      echo "It's a yes from us.";
      break;
    case 13:
      echo "Not today at least.";
      break;
    case 14:
      echo "Not in this lifetime.";
      break;
    case 15:
      echo "Sure, why not.";
      break;
    case 16:
      echo "You would think so but no.";
      break;
    case 17:
      echo "Thankfully not, trust us.";
      break;
    case 18:
      echo "Yes, absolutely.";
      break;
    case 19:
      echo "We wish but it is not so.";
      break;
    default:
      echo "Try asking again.";
  }
echo "~~\n";
}

magic8Ball();
magic8Ball();
magic8Ball();

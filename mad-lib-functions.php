<?php

/*
  "Mad Lib Functions" Project (index.php file only)
  Chapter: Introduction to Functions in PHP
  ---
  Task: "Create a function that 1) takes desired words as arguments, 2) returns the story with the words put into blanks in the right place."
  AKA write a function that fills in a Mad Libs story.
  ---
  Mad lib based off the last stanza of Robert Frost's "Stopping by Woods on a Snowy Evening" poem.
*/


function generateStory($singular_noun, $verb, $color, $distance_unit){
  $story = "\nThe $singular_noun are lovely, $color, and deep.\nBut I have promises to keep\nAnd miles to go before I sleep,\nAnd miles to go before I sleep.\n";
  $story = str_replace("miles", $distance_unit, $story);
  $story = str_replace("sleep", $verb, $story);
  return $story;
}

echo generateStory("chicken","buy","white","kilometers");
echo generateStory("coin","crash","orange","inches");
echo generateStory("snake","roll","blue","millimeters");

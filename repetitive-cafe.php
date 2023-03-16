<?php

/*
  "Repetitive Cafe" Project (index.php file only)
  Chapter: Loops in PHP
  ---
  Task: "Make use of some of the PHP loop shorthand to create HTML for a restaurant menu. Practice using the different loop types with HTML."
*/

  $drinks = [
    "butterfly arnold palmer" => 5.00
    ,"rose lemonade" => 3.50
    ,"lavender milk tea" => 4.50
    , "plain milk" => 2.50];

  $pastries = [
    "ladyfingers"
    , "biscotti"
    , "almond cookies"
    , "cream puffs"];

  $food = [
    "plain bagel with cheese"  => 2.5
    , "everything bagel with cheese" => 4
    , "breakfast panini" => 5.5];
?>

<h1>Welcome to the Repetitive Cafe</h1>

<!-- use foreach loop -->
<h3>Drinks!</h3>
<ul>
<?php foreach($drinks as $item => $price): ?>
<li><?= $item . "..........$" . $price ?></li>
<?php endforeach; ?>
</ul>

<!-- use for loop -->
<h3>Pastries! ($2 each)</h3> 
<ul>
<?php for($i = 0; $i < 4; $i++): ?>
<li><?= $pastries[$i] ?></li>
<?php endfor; ?>
</ul>

<!-- challenge: use while loop; works but could probably be better -->
<h3>Food!</h3>
<ul>
<?php 
  $a = 0;
  while($a < 1):
    foreach($food as $item2 => $price2):
?>
<li><?= $item2 . "......$" . $price2 ?></li>
<?php
  endforeach;
  $a++;
  endwhile; ?>
</ul>

<?php

/*
  "Going to Bed" (index.php)
  Chapter: Classes and Objects in PHP
  ---
  "This project provides practice for:
  - Creating objects from classes
  - Writing and using methods
  - Using static methods
  In this project, we will be creating some pajamas for barnyard animals."
*/


class StringUtils {
  public static function secondCase($string) {
    $string = strtolower($string);
    if(strlen($string) === 1){
      return strtolower($string);
    } elseif($string === ""){
      return "";
    } else {
      $string[1] = strtoupper($string[1]);
      return $string;
    }
  }
}
/*
$str = new StringUtils();

echo $str->secondCase("");
*/

echo StringUtils::secondCase("HAND") . "\n";
echo StringUtils::secondCase("") . "\n";

class Pajamas {
  private $owner, $fit, $color;
  function __construct($owner="me", $fit="classic", $color="pink"){
    $this->owner = StringUtils::secondCase($owner);
    $this->fit = $fit;
    $this->color = $color;
  }

  public function describe(){
    return "These pajamas for $this->owner are $this->color and fit $this->fit.\n";
  }

  public function setFit($new_fit){
    $this->fit = $new_fit;
  }
}

$chicken_PJs = new Pajamas("CHICKEN", "oversized","yellow");

echo $chicken_PJs->describe();
echo $chicken_PJs->setFit("slim");
echo $chicken_PJs->describe();

class ButtonablePajamas extends Pajamas{
  private $button_state = "unbuttoned";
  
  public function describe(){
    return parent::describe() . "They also have buttons which are $this->button_state.\n";
  }

  public function toggleButtons(){
    if($this->button_state === "unbuttoned"){
      $this->button_state = "buttoned";
    } elseif($this->button_state === "buttoned"){
      $this->button_state = "unbuttoned";
    }
  }
}

$moose_PJs = new ButtonablePajamas("moose","tight","black");

echo $moose_PJs->describe();
echo $moose_PJs->toggleButtons();
echo $moose_PJs->describe();

// challenge: create a class of pajamas that has a hat
class hasHat extends Pajamas{
  private $hat = "included";

  public function describe(){
    return parent::describe() . "The hat is $this->hat.";
    $this->hat_state = $hat;
  }
}

$bear = new hasHat("bear","just right","orange");
echo $bear->describe();

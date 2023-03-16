<?php

/*
  "Bobby Tables" (index.php only)
  Chapter: PHP Form Validation
  ---
  Task: "Collecting input from users is necessary, but nefarious users can use this as an opportunity to mess with things.
  Just like the parents of Bobby Tables.
  We’ve made a form for a user to create a profile on our site. We want to collect the user’s name, character, email and birth year.
  Our users have been having a field day with this and we need to clean up our form."
*/

$name = "";
$character = "";
$email = "";
$birth_year = 1969;
$validation_error = "";
$existing_users = ["admin", "guest"];
$options = ["options" => ["min_range" => 1908, "max_range" => date("Y")]];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $raw_name = trim(htmlspecialchars($_POST["name"]));
  $raw_character = $_POST["character"];
  $raw_email = $_POST["email"];
  $raw_birth_year = $_POST["birth_year"];
  
  if(in_array($raw_name, $existing_users)){
    $validation_error .= "This name is taken. <br>";
  } else {
    $name = $raw_name;
  }

  if(in_array($raw_character, ["wizard","mage","orc"])){
    $character = $raw_character;
  } else {
    $validation_error .= "You must pick a wizard, mage, or orc. <br>";
  }

  if(filter_var($raw_email, FILTER_VALIDATE_EMAIL)){
    $email = $raw_email;
  } else {
    $validation_error .= "Invalid email. <br>";
  }

  if(filter_var($raw_birth_year, FILTER_VALIDATE_INT, $options)){
    $birth_year = $raw_birth_year;
  } else {
    $validation_error .= "That can't be your birth year. <br>";
  }
}
?>


<h1>Create your profile</h1>
<form method="post" action="">
<p>
Select a name: <input type="text" name="name" value="<?php echo $name;?>" >
</p>
<p>
Select a character:
  <input type="radio" name="character" value="wizard" <?php echo ($character=='wizard')?'checked':'' ?>> Wizard
  <input type="radio" name="character" value="mage" <?php echo ($character=='mage')?'checked':'' ?>> Mage
  <input type="radio" name="character" value="orc" <?php echo ($character=='orc')?'checked':'' ?>> Orc
</p>
<p>
Enter an email:
<input type="text" name="email" value="<?php echo $email;?>" >
</p>
<p>
Enter your birth year:
<input type="text" name="birth_year" value="<?php echo $birth_year;?>">
</p>
<p>
  <span style="color:red;"><?= $validation_error;?></span>
</p>
<input type="submit" value="Submit">
</form>
  
<h2>Preview:</h2>
<p>
  Name: <?=$name;?>
</p>
<p>
  Character Type: <?=$character;?>
</p>
<p>
  Email: <?=$email;?>
</p>
<p>
  Age: <?=date("Y")-$birth_year;?>
</p>

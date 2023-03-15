<html>
<body>

  
<!-- 
  "HTML - PHP Calculator"
  Chapter: PHP Form Handling
  ---
  Task: "In this project, you’ll use PHP and HTML to build a calculator. You’ll create a front-end in HTML
  with forms and handle the math on the back-end with PHP."
-->
  
  
 <!--Your code goes here-->
<h1>Initial Page</h1>

<!-- Addition calculator -->
<form method="GET" action="addition.php">
  <fieldset>
  <h2>Addition Calculator</h2>
  <span>First number: </span>
  <input name="add_first" type="number">
  <br>
  <span>Second number:</span>
  <input name="add_second" type="number">
  <br><br>
  <button type="submit">Add</button>
  </fieldset>
</form>

<!-- Division calculator -->
<form method="GET" action="division.php">
  <fieldset>
  <h2>Divison Calculator</h2>
  <span>Number to divide into (dividend):</span>
  <input name="dividend" type="number">
  <br>
  <span>Number to divide by (divisor):</span>
  <input name="divisor" type="number">
  <br><br>
  <button type="submit">Divide</button>
  </fieldset>
</form>

<a href="index.php">Reset</a>
</body>
</html>

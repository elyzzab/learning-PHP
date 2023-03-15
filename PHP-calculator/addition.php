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
<h1>Addition Calculator</h1>

<p>
  <?= $_GET["add_first"];?> plus <?= $_GET["add_second"];?> equals 
  <?= $_GET["add_first"] + $_GET["add_second"];?>.
</p>

<a href="index.php">Reset</a>
</body>
</html>

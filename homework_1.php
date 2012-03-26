<!DOCTYPE html>
<html>
<head>
<title>Homework 1</title>
</head>
<body>
<form action=”homework_1.php” method=”get”>
Number: <input type="text" name="number" />
<button type=”submit”>Submit</button>
</form>
<?php
if (isset($_GET['number'])) {
  if (is_numeric($_GET['number']) == FALSE) {
    echo '<p><font color="#FF0000"> The parameter is not a number </font></p>'
	;
  }
  else {
	  if ($_GET['number'] < 0 || $_GET['number'] > 19999) {
		  echo '<p><font color="#FF0000"> The parameter is not within the range [0,19999] </font></p>' 
		  ;
	  }
	  $division_counter = 0;
	  for ($i = 1; $i <= $_GET['number'] / 2; $i++ ) {
		  if ($_GET['number'] % $i == 0) {
			  $division_counter++;
		  }
	  }
	  if ($division_counter > 1) {
		  $num = $_GET['number'];
		  echo "<p><font color='blue'> The number $num is NOT prime ! </font></p>"
		  ;
	  }
  }
}
?>

</body>
</html>
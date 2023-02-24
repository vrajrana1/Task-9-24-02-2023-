<?php

$numbers = [1, 2, 3];

if (isset($_POST['submit'])) {
  $input = $_POST['number'];
  if (!is_numeric($input)) {
    echo "Please enter a valid number.";
    exit;
  }
  $numbers[] = $input;
}

if (isset($_POST['reset'])) {
  $numbers = [1, 2, 3];
}

echo "Array: ";
print_r($numbers);

echo "<br><br>";

echo "<form method='post'>";
echo "<label for='number'>Enter a number:</label>";
echo "<input type='text' name='number' id='number'>";
echo "<input type='submit' name='submit' value='Add Number'>";
echo "<input type='submit' name='reset' value='Reset Array'>";
echo "</form>";

?>

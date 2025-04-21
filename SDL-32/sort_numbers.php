<!DOCTYPE html>
<html>
<head>
  <title>Sort Numbers & Sum</title>
  <style>
    body { font-family: Arial; padding: 20px; }
    input[type="text"] { width: 300px; padding: 5px; }
    button { padding: 5px 10px; }
    .output { margin-top: 20px; font-weight: bold; }
  </style>
</head>
<body>

  <h2>Enter Numbers (comma separated)</h2>

  <form method="post">
    <input type="text" name="numbers" placeholder="e.g. 10, 4, 7, 22" required>
    <button type="submit">Submit</button>
  </form>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $input = $_POST["numbers"];
      $numberArray = array_map('intval', explode(',', $input));
      sort($numberArray);
      $sum = array_sum($numberArray);

      echo "<div class='output'>";
      echo "Sorted Numbers: " . implode(", ", $numberArray) . "<br>";
      echo "Sum: $sum";
      echo "</div>";
    }
  ?>

</body>
</html>

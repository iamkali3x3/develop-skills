<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Book Catalog</title>
  <style>
    body { font-family: Arial; padding: 20px; }
    .book { border: 1px solid #ccc; padding: 10px; margin: 10px; border-radius: 5px; }
    .book h3 { margin: 0; }
  </style>
</head>
<body>
  <h2>Book Catalogue</h2>
  <?php
    $result = $conn->query("SELECT * FROM books");
    while ($row = $result->fetch_assoc()) {
      echo "<div class='book'>
              <h3>{$row['title']}</h3>
              <p>Author: {$row['author']}</p>
              <p>Genre: {$row['genre']}</p>
            </div>";
    }
  ?>
</body>
</html>

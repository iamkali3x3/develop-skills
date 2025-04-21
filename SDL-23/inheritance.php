<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Shape Area Calculator - PHP Inheritance</title>
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(to right, #c2e9fb, #a1c4fd);
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: flex-start;
      min-height: 100vh;
    }

    .container {
      background-color: #ffffff;
      padding: 40px 35px;
      border-radius: 15px;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
      width: 100%;
      max-width: 500px;
      margin-top: 60px;
    }

    h2 {
      text-align: center;
      color: #37474F;
      font-size: 30px;
      margin-bottom: 30px;
    }

    label {
      font-size: 17px;
      font-weight: 500;
      display: block;
      margin-bottom: 6px;
      color: #333;
    }

    input[type="number"] {
      width: 100%;
      padding: 12px;
      font-size: 16px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    .shape-option {
      display: flex;
      align-items: center;
      margin-bottom: 15px;
      font-size: 17px;
    }

    .shape-option .emoji {
      font-size: 22px;
      margin-right: 12px;
      width: 32px;
      text-align: center;
    }

    input[type="radio"] {
      margin-right: 10px;
      transform: scale(1.2);
      cursor: pointer;
    }

    input[type="submit"] {
      background: linear-gradient(to right, #00c6ff, #0072ff);
      color: #ffffff;
      font-size: 18px;
      padding: 14px 20px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      display: block;
      width: 100%;
      transition: background 0.3s;
      margin-top: 10px;
    }

    input[type="submit"]:hover {
      background: linear-gradient(to right, #0072ff, #00c6ff);
    }

    .result {
      margin-top: 30px;
      font-size: 20px;
      color: #2e7d32;
      text-align: center;
      font-weight: 600;
    }

    .form-group {
      margin-bottom: 25px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>🧮 Shape Area Calculator</h2>
    <form method="post">
      <div class="form-group">
        <label>Select a Shape:</label>

        <div class="shape-option">
          <span class="emoji">🔺</span>
          <input type="radio" name="shape" value="triangle" required> Triangle
        </div>

        <div class="shape-option">
          <span class="emoji">🟥</span>
          <input type="radio" name="shape" value="square"> Square
        </div>

        <div class="shape-option">
          <span class="emoji">⚪</span>
          <input type="radio" name="shape" value="circle"> Circle
        </div>
      </div>

      <div class="form-group">
        <label>Base / Side / Radius:</label>
        <input type="number" name="val1" step="0.01" required>

        <label>Height (only for Triangle):</label>
        <input type="number" name="val2" step="0.01">
      </div>

      <input type="submit" name="submit" value="Calculate Area">
    </form>

    <?php
    class Shape {
      public function area() {
        return 0;
      }
    }

    class Triangle extends Shape {
      public $base, $height;
      public function __construct($b, $h) {
        $this->base = $b;
        $this->height = $h;
      }
      public function area() {
        return 0.5 * $this->base * $this->height;
      }
    }

    class Square extends Shape {
      public $side;
      public function __construct($s) {
        $this->side = $s;
      }
      public function area() {
        return $this->side * $this->side;
      }
    }

    class Circle extends Shape {
      public $radius;
      public function __construct($r) {
        $this->radius = $r;
      }
      public function area() {
        return 3.1416 * $this->radius * $this->radius;
      }
    }

    if (isset($_POST['submit'])) {
      $shape = $_POST['shape'];
      $val1 = $_POST['val1'];
      $val2 = isset($_POST['val2']) ? $_POST['val2'] : 0;

      echo '<div class="result">';
      if ($shape == "triangle") {
        $tri = new Triangle($val1, $val2);
        echo "🔺 Area of Triangle: " . round($tri->area(), 2);
      } elseif ($shape == "square") {
        $sq = new Square($val1);
        echo "🟥 Area of Square: " . round($sq->area(), 2);
      } elseif ($shape == "circle") {
        $cir = new Circle($val1);
        echo "⚪ Area of Circle: " . round($cir->area(), 2);
      }
      echo '</div>';
    }
    ?>
  </div>
</body>
</html>

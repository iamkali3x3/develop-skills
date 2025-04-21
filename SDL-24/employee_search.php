<!DOCTYPE html>
<html>
<head>
    <title>Employee Name Search</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 30px;
            background-color: #f5f5f5;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"] {
            padding: 10px;
            width: 300px;
            margin-right: 10px;
        }
        input[type="submit"] {
            padding: 10px 20px;
        }
        .result {
            padding: 10px;
            margin-top: 20px;
            background-color: #fff;
            border-left: 5px solid #007BFF;
            width: fit-content;
        }
    </style>
</head>
<body>

    <h2>Search Employee Name</h2>
    <form method="POST">
        <input type="text" name="search_name" placeholder="Enter employee name" required>
        <input type="submit" value="Search">
    </form>

    <?php
    // Indexed array of 20 employee names
    $employee_names = [
        "Parth", "Pranav", "Siddhesh", "Siddhesh", "Siddhesh",
        "Nikhil", "Amar", "Piyush", "Rohit", "Soham",
        "Sumedh", "Atharva", "Avadhut", "Jay", "Sakshi",
        "Riya", "Prerana", "Aishwarya", "Manasi", "Gaurav"
    ];

    // If form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $search_name = trim($_POST['search_name']);

        if (in_array($search_name, $employee_names)) {
            echo "<div class='result'><strong>$search_name</strong> exists in the employee list.</div>";
        } else {
            echo "<div class='result'><strong>$search_name</strong> does not exist in the employee list.</div>";
        }
    }
    ?>

</body>
</html>

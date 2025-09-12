<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EECS 348 Lab Three Practice Four</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
            text-align: center;
        }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>EECS 348 Lab Three Practice Four</h1>
    <form action="practice4.php" method="POST">
        <label for="table_size">Size of the multiplication table:</label>
        <input type="number" id="table_size" name="table_size" min="1" required>
        <button type="submit">Submit</button>
    </form>
    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['table_size'])) {
        $size = intval($_POST['table_size']);
        echo "<table>";
        echo "<tr><th></th>";
        for ($col = 1; $col <= $size; $col++) {
            echo "<th>$col</th>";
        }
        echo "</tr>";
        for ($row = 1; $row <= $size; $row++) {
            echo "<tr><th>$row</th>";
            for ($col = 1; $col <= $size; $col++) {
                echo "<td>" . ($row * $col) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
    ?>
</body>
</html>

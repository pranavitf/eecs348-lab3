<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EECS 348 Lab Three Practice Four</title>
    <style>
        /* General styling for the whole page */
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background-color: #f4f7f6; /* A light grey background */
            color: #333; /* Darker text for readability */
            margin: 0;
            padding: 40px;
        }

        /* The container for our main content */
        .container {
            max-width: 700px;
            margin: 0 auto; /* Center the container */
            background-color: #ffffff; /* White background for the content area */
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); /* A subtle shadow for depth */
        }

        /* Header Design */
        h1 {
            color: #ffffff; /* White text */
            background: linear-gradient(90deg, #0051ba, #0033a0); /* A blue gradient background */
            padding: 20px;
            margin: -30px -30px 30px -30px; /* Make it stretch to the edges of the container */
            border-radius: 8px 8px 0 0; /* Rounded top corners */
            text-align: center;
            font-size: 1.8em;
        }

        /* Styling for form elements */
        input[type="number"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 10px;
        }

        button {
            padding: 10px 20px;
            background-color: #0051ba; /* KU Blue */
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1em;
            font-weight: bold;
        }

        button:hover {
            background-color: #0033a0; /* Darker blue on hover */
        }

        hr {
            border: none;
            border-top: 1px solid #eee;
            margin: 30px 0;
        }

        /* === New Stylish Table Design === */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #0051ba;
            color: #ffffff;
            font-weight: bold;
        }

        /* Zebra-striping for rows for readability */
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
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
            echo "<h2>Multiplication Table (1 to $size)</h2>";
            echo "<table>";
            echo "<tr><th>&times;</th>"; // Use multiplication symbol for corner
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
    </div>
</body>
</html>

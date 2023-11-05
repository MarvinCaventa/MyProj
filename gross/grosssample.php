<!DOCTYPE html>
<html>
<head>
    <title>Gross to Net Sales Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }

        h1 {
            color: #333;
        }

        form {
            display: inline-block;
            text-align: left;
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        label, input {
            display: block;
            margin: 10px 0;
        }

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<h1>Gross to Net Sales Calculator</h1>

<form method="post">
    <label for="month">Month:</label>
    <input type="text" id="month" name="month" required><br>

    <label for="gross_sales">Gross Sales:</label>
    <input type="number" id="gross_sales" name="gross_sales" required><br>

    <label for="expenses">Expenses:</label>
    <input type="number" id="expenses" name="expenses" required><br>

    <input type="submit" value="Calculate">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $month = $_POST["month"];
    $gross_sales = $_POST["gross_sales"];
    $expenses = $_POST["expenses"];
    $net_sales = $gross_sales - $expenses;

    echo "<h2>Results for $month</h2>";
    echo "Gross Sales: $gross_sales<br>";
    echo "Expenses: $expenses<br>";
    echo "Net Sales: $net_sales<br>";

    // Generate report content
    $report_content = "Month: $month\n";
    $report_content .= "Gross Sales: $gross_sales\n";
    $report_content .= "Expenses: $expenses\n";
    $report_content .= "Net Sales: $net_sales\n";

    // Save report to a file
    $file_name = "sales_report.txt";
    file_put_contents($file_name, $report_content);

    // Provide download link
    echo "<a href='$file_name' download>Download Report</a>";
}
?>

</body>
</html>

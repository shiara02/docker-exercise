<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f5f5f5;
        }
        h2 {
            color: #333;
            margin-top: 20px;
        }
        form {
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            width: 300px;
            background-color: #D8DADA;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);
            border-radius: 5px;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="number"] {
            width: 200px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        select {
            width: 60px;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #FFFFFF;
            color: #444444;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 3px;
            font-weight: bold;
            margin-top: 15px;
        }
        input[type="submit"]:hover {
            background-color: #F2F2F2;
        }
        p {
            font-size: 18px;
            color: #333;
            margin-top: 20px;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h2>Simple Calculator</h2>
    <form method="post" action="">
        <label for="num1">Enter the first number:</label>
        <input type="number" name="num1" required>
        
        <label for="operator">Select the operator:</label>
        <select name="operator" required>
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">x</option>
            <option value="divide">/</option>
        </select>
        
        <label for="num2">Enter the second number:</label>
        <input type="number" name="num2" required>
        
        <input type="submit" value="Calculate">
    </form>

    <?php
    // form submission check
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // form input retrieval
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        // calculator logic
        switch ($operator) {
            case 'add':
                $result = $num1 + $num2;
                break;
            case 'subtract':
                $result = $num1 - $num2;
                break;
            case 'multiply':
                $result = $num1 * $num2;
                break;
            case 'divide':
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    echo "<p class='error'>" . "Division by zero is not allowed." . "</p>";
                }
                break;
            default:
                echo "<p class='error'>" . "Invalid operator" . "</p>";
                break;
        }
        // result display
        if (isset($result)) {
            echo "<p>" . "Result:" . " " . $result . "</p>";
        }
    }
    ?>
</body>
</html>

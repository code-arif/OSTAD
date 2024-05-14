<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
    <style>
        <?php include "style.css"?>
    </style>
</head>

<body>
    <div class="container">
        <h2>Basic Calculator</h2>
        <form method="post" action="">
            <input type="number" name="input_number_01" placeholder="Enter first number" required><br>
            <input type="number" name="input_number_02" placeholder="Enter second number" required><br>
            <select name="operation">
                <option value="add">Addition</option>
                <option value="subtract">Subtraction</option>
                <option value="multiply">Multiplication</option>
                <option value="divide">Division</option>
                <option value="binary">Binary Conversion</option>
                <option value="octal">Octal Conversion</option>
                <option value="hexadecimal">Hexadecimal Conversion</option>
            </select><br>
            <button type="submit">Calculate</button>
        </form>
        <div id="result">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $input_number_01 = $_POST["input_number_01"];
                $input_number_02 = $_POST["input_number_02"];
                $operation = $_POST["operation"];

                switch ($operation) {
                    case "add":
                        $result = $input_number_01 + $input_number_02;
                        echo "Result: $result";
                        break;
                    case "subtract":
                        $result = $input_number_01 - $input_number_02;
                        echo "Result: $result";
                        break;
                    case "multiply":
                        $result = $input_number_01 * $input_number_02;
                        echo "Result: $result";
                        break;
                    case "divide":
                        if ($input_number_02 != 0) {
                            $result = $input_number_01 / $input_number_02;
                            echo "Result: $result";
                        } else {
                            echo "infinity.";
                        }
                        break;
                    case "binary":
                        echo "Binary: " . decbin($input_number_01);
                        break;
                    case "octal":
                        echo "Octal: " . decoct($input_number_01);
                        break;
                    case "hexadecimal":
                        echo "Hexadecimal: " . dechex($input_number_01);
                        break;
                }
            }
            ?>
        </div>
    </div>
</body>

</html>
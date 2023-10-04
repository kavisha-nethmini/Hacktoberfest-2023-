<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <h1>Simple Calculator</h1>
    <form method="post" action="">
        Enter the first number: <input type="text" name="num1"><br>
        Enter the second number: <input type="text" name="num2"><br>
        <input type="submit" name="submit" value="Calculate">
    </form>
    <?php
    // PHP code starts here
    if (isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        
        if (is_numeric($num1) && is_numeric($num2)) {
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is: $sum";
        } else {
            echo "Please enter valid numeric values.";
        }
    }
    // PHP code ends here
    ?>
</body>
</html>

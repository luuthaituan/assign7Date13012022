<!doctype html>
<html lang="en">
<head>
    <title>Divisors</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
    <h1>Divisor of an integer</h1>
    <form action="btvn.php" method="get">
        <div class="form-group">
            <label for="email">Enter your number here:</label>
            <input type="number" class="form-control" id="number" placeholder="Enter a number" name="number">
            <button type="submit" class="btn btn-primary" value="submit">Submit</button>
        </div>
    </form>
</div>
<?php
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
// Viết chương trình tính tổng của tất cả các ước số của 1 số nguyên dương n - Finding the sum of the divisors of n
$number = null; //create a variable to store number
if($_SERVER["REQUEST_METHOD"]== "GET"){
    if(empty($_GET['number'])){
        echo '<div class="alert alert-danger"><strong>Please type a number</strong></div>';
        die;
    }else {
        $number = test_input($_GET['number']);
        if($number < 0){
            echo '<div class="alert alert-danger"><strong>This is not an integer number</strong></div>';
            die;
        }
    }
}
echo "<br>";
echo "Your number is: " . $number . "<br>";
echo "Here is all of the divisors of your number: " . "<br>";
//finding divisor
$sum = 0;
for($i=1; $i <= $number; $i++){
    if($number % $i ==0){
        echo $i . "   ";
        $sum = $sum + $i;
    }
}
echo "<br>";
echo "The sum of all divisors: " . $sum; //show the total of all divisors.
?>
</body>
</html>
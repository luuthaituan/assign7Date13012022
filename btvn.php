<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign 7</title>
</head>
<body>
    <h1>Divisor of an integer</h1>
    <form action="btvn.php" method="get">
        Enter your number here: <input type="text" name="number"> <br>
        <input type="submit" value="submit">
    </form>
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
        if(isset($_GET['number'])){
            $number = $_GET['number'];
            if(is_numeric($number)==FALSE){
                echo "<br>";
                echo "This is not a number. Please check again.";
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
              echo $i . "<br>";
              $sum = $sum + $i;
          }
      }
      echo "The sum of all divisors: " . $sum; //show the total of all divisors
    //done
?>
</body>
</html>
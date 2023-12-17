<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        Enter number :<input type="number" id="number" name="number">
        <input type="submit">
    </form>
    <?php
      if($_SERVER["REQUEST_METHOD"]=="GET"){
        $num=intval($_GET["number"]);
        isPrime($n){
            for($i=2;$i<$n;$i++){
                if($n%$i==0){
                    return false;
                }
            }
            return true;
        }
        if(isPrime($num)){
            echo "Number is prime";
        }
        else{
            echo "Number is not prime";
        }
      }
    ?>
</body>
</html>
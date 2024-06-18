<?php
    if($_POST)
    {
        $number01=$_POST["num1"];
        $number02=$_POST["num2"];
        $number03=$_POST["num3"];
        if($number01 >= $number02){
            if($number01 >= $number03){
                $max=$number01;
                if($number02 >= $number03){
                    $min=$number03;
                }else{
                    $min=$number02;
                }
            }else{
                $max=$number03;
                $min=$number02;
            }
        }elseif($number02 >= $number03){
            $max=$number02;
            if($number03 > $number01){
            $min=$number01; 
            }else{
                $min=$number03;
            }
        }else{
            $max=$number03;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <form action="" method="post" >
        <label for="num1" class="form-label">Number1: </label>
        <input type="number" class="form-control" name="num1" id="num1">
        <label for="num2" class="form-label">Number2:</label>
        <input class="form-control" type="number" name="num2" id="num2">
        <label class="form-label" for="num3">Number3</label>
        <input class="form-control" type="number" name="num3" id="num3">
        <input type="submit" class="btn btn-primary my-2 d-block mx-auto"  value="Get Min & Max">
    </form>
    <div class="alert alert-success w-50 mx-auto">
            <p>Min : <?php isset($min)?print_r($min):""?></p>
            <p>Max : <?php isset($max)?print_r($max):""?></p>
    </div>

    <script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>
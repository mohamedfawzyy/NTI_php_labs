<?php
    if($_POST){
        if($_POST['number'] % 2 ==0){
            $result=$_POST['number'] ." is even";
        }else{
            $result=$_POST['number'] ." is odd";
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
    <form action="" method="post" class="w-50 mx-auto alert alert-danger my-5">
        <input type="number" name="number" id="" class="form-control my-2" placeholder="enter number!">
        <input type="submit" value="check odd or even" class="btn btn-primary my-2 d-block mx-auto">
        <input type="text" name="result" value="<?php isset($result)?print_r($result):""?>" readonly id="" class="form-control">
    </form>
</body>
</html>
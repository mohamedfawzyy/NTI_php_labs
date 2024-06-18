<?php

    if($_POST){
        $number=$_POST['num'];
        if($number >= 0){
            $check="positive";
        }else{
            $check="negative";
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
   <form action="" method="post">
        <label for="num" class="form-label">Enter Your number : </label>
        <input type="number" name="num" id="num" class="form-control">
        <input type="submit" value="Check negative or Positive" class="btn btn-primary d-block mx-auto my-2">
        <input type="text" name="check" id="check" readonly value="<?php isset($check)?print_r("$number is $check"):""?>" class="form-control">
   </form>
   <script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>
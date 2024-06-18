<?php
    if($_POST){
        $result=pow($_POST['number'],1/$_POST['root']);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" class= "alert alert-info w-75 mx-auto mt-5">
        <input type="text" name="number" id="" class="form-control" placeholder="enter number">
        <input type="number" name="root" id="root" placeholder="enter your root " class="form-control my-2">
        <input type="submit" value="Get Root " class="btn btn-success d-block mx-auto my-2">
        <input type="text" name="result" id="result" value="<?php isset($result)?print_r("result is $result"):"" ?>" readonly class="form-control">
    </form>
</body>
</html>
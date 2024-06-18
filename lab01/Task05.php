<?php
define('totalmarks',250);
    if($_POST){
        $total=$_POST['sub1']+$_POST['sub2']+$_POST['sub3']+$_POST['sub4']+$_POST['sub5'];
        $result=round(($total/totalmarks)*100);
        if($result >= 90){
            $finalGrade="$result your Grade is A";
        }elseif($result >= 80 && $result < 90){
            $finalGrade="$result your Grade is B"; 
        }elseif($result >= 70 && $result < 80 ){
            $finalGrade="$result your garde is C";
        }elseif($result >= 60 && $result < 70){
            $finalGrade="$result your grade is D";
        }elseif($result >= 50 && $result < 60){
            $finalGrade="$result Your Grade is E";
        }else{
            $finalGrade ="$result Your Grade is F";
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
    <form action="" method="post" class="w-50 alert alert-secondary mx-auto my-5">
        <input type="number" name="sub1" placeholder="enter your subject01 mark" id="" max=50 min=0 class="form-control my-2">
        <input type="number" name="sub2" placeholder="enter your subject02 mark" id="" max=50 min=0 class="form-control my-2">
        <input type="number" name="sub3" placeholder="enter your subject03 mark" id="" max=50 min=0 class="form-control my-2">
        <input type="number" name="sub4" placeholder="enter your subject04 mark" id="" max=50 min=0 class="form-control my-2">
        <input type="number" name="sub5" placeholder="enter your subject05 mark" id="" max=50 min=0 class="form-control my-2">
        <input type="submit" value="get grade" class="btn btn-success d-block mx-auto">
        <input type="text" name="result" readonly class="border border-0 my-2 form-control" value="<?php isset($finalGrade)?print_r($finalGrade):""?>" id="">
    </form>
</body>
</html>
<?php
    if($_POST){
        $consumtion=$_POST['consumtion'];
        if($consumtion <= 50 )
        {
            $fees=0.5;
            $initialCost= $consumtion * 0.5;
            $finalCost=$initialCost *1.2;
        }
        elseif($consumtion > 50 && $consumtion < 100)
        {
            $fees=0.75;
            $initialCost = $consumtion*0.75;
            $finalCost=$initialCost *1.2;
        }elseif($consumtion >= 100 && $consumtion < 200)
        {
            $fees=1.2;
            $initialCost = $consumtion * 1.20;
            $finalCost=$initialCost *1.2;
        }else
        {
            $fees=1.5;
            $initialCost = $consumtion * 1.50;
            $finalCost=$initialCost *1.2;
        }
    }else{
        echo"bad request !!!!";
        header("Task06.php");
    }
?>
<!--  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    <div class="w-50 mx-auto alert alert-success mt-5">
        <h3>Bill</h3>
        <ul>
            <li>your consumtion: <?= $consumtion;?></li>
            <li>your consumtion: <?= $fees;?></li>
            <li>your initialCost: <?= $initialCost;?></li>
            <li>your fees: <?= "14%";?></li>
            <li>your Total Bills: <?= $finalCost;?></li>
        </ul>
    </div>
</body>
</html>
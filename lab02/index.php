<?php
    $users=[
        (object)[
            'id'=>1,
            'name'=>'ahmed',
            'gender'=>(object)[
                'gender'=>'m'
            ],
            'hobbies'=>[
                'football','swimming','running'
            ],
            'activities'=>[
                'school'=>'drawing',
                'home'=>'painting'
            ]
        ],
        (object)[
            'id'=>2,
            'name'=>'mohamed',
            'gender'=>(object)[
                'gender'=>'m'
            ],
            'hobbies'=>[
                'football','swimming'
            ],
            'activities'=>[
                'school'=>'painting',
                'home'=>'drawing'
            ]
        ],
        (object)[
            'id'=>3,
            'name'=>'mena',
            'gender'=>(object)[
                'gender'=>'f'
            ],
            'hobbies'=>[
                'running'
            ],
            'activities'=>[
                'school'=>'painting',
                'home'=>'drawing'
            ]
        ]
    ];

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
    <table class="table table-striped mt-4 container">
        <thead>
            <?php
                foreach ($users[0] as $key => $value) {
                    echo "<th>$key</th>";
                }
            ?>
        </thead>
        <tbody>
            <?php
                foreach($users as $index => $user){
                    $userHobbies = "" ; 
                    $activites = "";
                   $tr = "
                    <tr>
                        <td>$user->id</td>
                        <td>$user->name</td>
                    ";
                    // gender
                    if($user->gender->gender == 'm'){
                        $gender ="male";
                    }else{
                        $gender = "female";
                    }
                    $tr.="<td>$gender</td>";
                    // hobbies
                    foreach ($user->hobbies as $index => $value) {
                     $userHobbies.=$value . ', ';
                    }    
                    $tr .="<td>$userHobbies</td>";
                    // activities
                    foreach ($user->activities as $key => $value) {
                       $activites .=$value . ', ';
                    }
                    $tr.= "<td>$activites</td>";
                    $tr.= '</tr>';
                    echo $tr;
                }
            ?>
        </tbody>
    </table>
</body>
</html>
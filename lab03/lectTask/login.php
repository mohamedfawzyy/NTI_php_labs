<?php
include "./header.php";
session_start();
if(isset($_SESSION['user'])){
    header("location: ./profile.php");
}
$users=[
   (object) [
        "id"=>1,
        "name"=>"mohamed",
        "image"=>"1.jpg",
        "gender"=>"m",
        "email"=>"mo@gmail.com",
        "password"=>"123456"
    ],
    (object)[
        "id"=>2,
        "name"=>"sara",
        "image"=>"2.jpg",
        "gender"=>"f",
        "email"=>"sara@gmail.com",
        "password"=>"123456"
    ],
    (object)[
        "id"=>3,
        "name"=>"Ali",
        "image"=>"3.jpg",
        "gender"=>"m",
        "email"=>"ali@gmail.com",
        "password"=>"123456"
    ]
];
if($_POST){
    //validation
    $errors=[];
    if(empty($_POST['email'])){
        $errors['email']="<div class='alert alert-danger'>*Email is required</div>";
    }
    if(empty($_POST['password'])){
        $errors['password']="<div class='alert alert-danger'>*Password is required</div>";
    }
    //authentication
    if(empty($errors)){
        foreach ($users as $index => $user) {
            if($user->email == $_POST['email'] && $user->password == $_POST['password']){
                $_SESSION['user']=$user;
                header("location:profile.php");
            }else{
                $errors['auth']="<div class='alert alert-danger my-2'>email or Password not correct</div>";
            }
        }
    }



}
?>

    <div class="container">
        <form method="post" action="" class="w-50 mx-auto mt-5 alert alert-info" >
        <h1 class="text-center">Welcome back</h1>
          <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                <input type="email" name="email" value="<?php echo isset($_POST['email'])?$_POST['email']:"";?>" class="form-control" id="inputEmail3">
                <?php echo isset($errors['email'])?$errors['email']:""?>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="password" name="password" class="form-control" id="inputPassword3">
                <?php echo isset($errors['password'])?$errors['password']:""?>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
            <?php echo isset($errors['auth'])?$errors['auth']:""?>
        </form>   
    </div>
<?php 
include "./footer.php";
?>
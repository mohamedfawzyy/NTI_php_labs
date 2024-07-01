<?php
require "./header.php";
session_start();
if($_POST){
    $errors=[];
    if(empty($_POST['name'])){
            $errors['name']="name is required";
    }
    if(empty($_POST['email'])){
        $errors['email']="email is required";
    }
    if(empty($_POST['gender'])){
        $errors['gender']="gender is required";
    }
    if(!$errors){
        $_SESSION['user']->name=$_POST['name'];
        $_SESSION['user']->email=$_POST['email'];
        $_SESSION['user']->gender=$_POST['gender'];
        if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
                $imagepath="./images/".$_FILES['image']['full_path'];
                move_uploaded_file($_FILES['image']['tmp_name'],$imagepath);
                $_SESSION['user']->image=$_FILES['image']['full_path'];
        }
        echo "<div class='alert alert-success text-center'>Congratulations {$_SESSION['user']->name} you update your data </div>";
    }
}else{
    header("location:profile.php");
}

?>

<div class="container">
        <div   class="w-50 mx-auto mt-5 alert alert-warning" >
        <h1 class="text-center">Welcome <?= $_SESSION['user']->name;?></h1>
        <div class="row mb-3">
                   <div class="col-6 offset-3">
                        <img src="./images/<?php echo $_SESSION['user']->image;?>" alt="" class="w-100 rounded-circle">
                        
                   </div>
            </div>
            <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="email" name="email" value="<?= $_POST['email']; ?>" class="form-control" id="inputEmail3" readonly>
                    <?php if(isset($errors['email'])){
                        echo "<div class='alert alert-danger my-2'>{$errors['email']}</div>";
                    }
                    ?>
                    </div>
            </div>
            <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">name</label>
                    <div class="col-sm-10">
                    <input type="text" name="name" value="<?= $_POST['name']; ?>" class="form-control" id="name" readonly>
                    <?php if(isset($errors['name'])){
                        echo "<div class='alert alert-danger my-2'>{$errors['name']}</div>";
                    }
                    ?>
                    </div>
            </div>
            <div class="row mb-3">
                <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                <select class="form-control" name="gender" id="gender">
                    <option <?= $_POST['gender']=='m'?"selected":"";?> value="m" disabled>Male</option>
                    <option <?= $_POST['gender']=='f'?"selected":"";?> value="f" disabled>Female</option>
                </select>
                <?php if(isset($errors['gender'])){
                        echo "<div class='alert alert-danger my-2'>{$errors['gender']}</div>";
                    }
                    ?>
                </div>
            </div>
            <a href="./profile.php" class="btn btn-primary">profile</a>
            <a href="./logout.php" class="btn btn-secondary">LogOut</a>
        </div>   
</div>




<?php
require "./footer.php";
?>
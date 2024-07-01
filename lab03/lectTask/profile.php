<?php
include "./header.php";
session_start();
if(!isset($_SESSION['user'])){
    header("location:login.php");
}

?>
<div class="container">
        <form method="post" enctype="multipart/form-data" action="./update.php" class="w-50 mx-auto mt-5 alert alert-warning" >
        <h1 class="text-center">Welcome <?= $_SESSION['user']->name;?></h1>
        <div class="row mb-3">
                   <div class="col-6 offset-3">
                        <img src="./images/<?php echo $_SESSION['user']->image?>" alt="" class="w-100 rounded-circle">
                        <input type="file" name="image" class="form-control my-2" >
                   </div>
            </div>
            <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                    <input type="email" name="email" value="<?= $_SESSION['user']->email; ?>" class="form-control" id="inputEmail3">
                    </div>
            </div>
            <div class="row mb-3">
                    <label for="name" class="col-sm-2 col-form-label">name</label>
                    <div class="col-sm-10">
                    <input type="text" name="name" value="<?= $_SESSION['user']->name; ?>" class="form-control" id="name">
                    </div>
            </div>
            <div class="row mb-3">
                <label for="gender" class="col-sm-2 col-form-label">Gender</label>
                <div class="col-sm-10">
                <select class="form-control" name="gender" id="gender">
                    <option <?= $_SESSION['user']->gender=='m'?"selected":"";?> value="m">Male</option>
                    <option <?= $_SESSION['user']->gender=='f'?"selected":"";?> value="f">Female</option>
                </select>
                </div>
            </div>
            <button type="submit" class="btn btn-warning">update</button>
            <a href="./logout.php" class="btn btn-secondary">LogOut</a>
        </form>   
</div>

<?php
include "./footer.php";
?>
<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM utilisateur WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: login-signup/reset-code.php');
            }
        }else{
            header('Location: login-signup/verif-code.php');
        }
    }
}else{
    header('Location: login-signup/login-user.php');
}
?>
<html lang="en">
<head>

</head>
<body>
    <button type="button" class="btn btn-light"><a href="logout-user.php">Logout</a></button>   
</body>

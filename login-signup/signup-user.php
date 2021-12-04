<?php require_once "../controllerUserData.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Signup Form</h2>
                    <p class="text-center">It's quick and easy.</p>
                    <?php
                    if(count($errors) == 1){
                        ?>
                        <div class="alert alert-danger text-center">
                            <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                        </div>
                        <?php
                    }elseif(count($errors) > 1){
                        ?>
                        <div class="alert alert-danger">
                            <?php
                            foreach($errors as $showerror){
                                ?>
                                <li><?php echo $showerror; ?></li>
                                <?php
                            }
                            ?>
                        </div>
                        <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="text" name="nom" placeholder="Nom" required value="<?php echo $nom ?>">
                        <input class="form-control" type="text" name="prenom" placeholder="Prenom" required value="<?php echo $prenom ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="mdp" placeholder="Password" required>
                    </div>
                    <div>
                        <input class="form-control" type="password" name="cmdp" placeholder="Confirm password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required value="<?php echo $email ?>">
                        <input class="form-control" type="number" name="telephone" placeholder="Telephone" required value="<?php echo $telephone ?>">
                    </div>
                    <div>
                        <input class="form-control" type="text" name="ville" placeholder="Ville" required value="<?php echo $ville ?>">
                    </div>
                    <div>
                        <input class="form-control" type="text" name="address" placeholder="Addresse" required value="<?php echo $address ?>">
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Signup">
                    </div>
                    <div class="link login-link text-center">Already a member? <a href="login-user.php">Login here</a></div>
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>
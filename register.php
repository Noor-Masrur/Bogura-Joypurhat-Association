<?php include("path.php");?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <link rel="icon" type="assets/image/png" href="assets/images/bja_logo.png">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Text Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>


<body>
    <?php include(ROOT_PATH . "/app/includes/header.php");
    guestOnly(); ?>

    <div class="login-grad">
        <div class="auth-content">
            <form action="register.php" method="post">
                <h2 class="form-title">Register</h2>
                <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
    
                <div>
                    <label>Username</label>
                    <input type="text" name="username" value="<?php echo $username; ?>" class="text-input" />
                </div>
                
                <div>
                    <label>Email</label>
                    <input type="email" name="email" value="<?php echo $email; ?>" class="text-input" />
                </div>
                <div>
                    <label>Password</label>
                    <input type="password" name="password" value="<?php echo $password; ?>" class="text-input" />
                </div>
                <div>
                    <label>Password Confirmation</label>
                    <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input" />
                </div>

                

                <div>
                    <button type="submit" name="register-btn" class="btn big-btn">Register</button>
                </div>
                <p>Or<a href="<?php echo BASE_URL . '/login.php'?>"><b> Log In</b></a></p>
            </form>
        </div>
    </div>





    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>




</body>
</html>
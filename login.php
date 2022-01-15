<?php include("path.php")?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>

    <link rel="icon" type="image/png" href="assets/images/bja_logo.png">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Text Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="css/style.css">

</head>


<body>
    <?php include(ROOT_PATH . "/app/includes/header.php") ?>

    <div class="login-grad">

        <div class="auth-content">
            <form action="register.html" method="post">
                <h2 class="form-title">Log In</h2>
                <div>
                    <label>Username</label>
                    <input type="text" name="username" class="text-input" />
                </div>

                <div>
                    <label>Password</label>
                    <input type="password" name="password" class="text-input" />
                </div>

                <div>
                    <button type="submit" name="login-btn" class="btn big-btn">Log In</button>
                </div>
                <p>Or <a href="register.html"><b>Sign Up</b></a></p>
            </form>
        </div>
    </div>




    <!-- //Footer -->
    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>




</body>
</html>
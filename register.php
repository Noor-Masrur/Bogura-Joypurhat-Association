<?php include("path.php")?>
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
    <?php include(ROOT_PATH . "/app/includes/header.php") ?>

    <div class="login-grad">
        <div class="auth-content">
            <form action="register.html" method="post">
                <h2 class="form-title">Register</h2>


                <!-- <div class="msg error">
        <li>Username Required</li>
    </div>
    -->
                <div>
                    <label>Username</label>
                    <input type="text" name="username" class="text-input" />
                </div>
                
                <div>
                    <label>Email</label>
                    <input type="email" name="email" class="text-input" />
                </div>
                <div>
                    <label>Password</label>
                    <input type="password" name="password" class="text-input" />
                </div>
                <div>
                    <label>Password Confirmation</label>
                    <input type="password" name="passwordConf" class="text-input" />
                </div>

                <div>
                    <label>Role</label>
                    <select name="activity" class="text-input">
                        <option value="Student">Student</option>
                        <option value="Alumni">Alumni</option>

                    </select>
                </div>

                <div>
                    <button type="submit" name="register-btn" class="btn big-btn">Register</button>
                </div>
                <p>Or <a href="login.html"><b>Log In</b></a></p>
            </form>
        </div>
    </div>





    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>




</body>
</html>
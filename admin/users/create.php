<?php include("../../path.php");?>
<?php include(ROOT_PATH . "/app/controllers/users.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Section - Add Users</title>

    <link rel="icon" type="image/png" href="../../assets/images/bja_logo.png">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Text Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

    <!-- Custom Styling -->
    <link rel="stylesheet" href="../../assets/css/style.css">
    <!-- Admin Styling -->
    <link rel="stylesheet" href="../../assets/css/admin.css">

</head>


<body>

    <?php include(ROOT_PATH . "/app/includes/adminHeader.php")?>
    <!--Admin Page Wrapper-->
    <div class="admin-wrapper">

        <!--Left Sidebar-->
        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php")?>

        <!--//Left Sidebar-->
        <!--Admin Content-->
        <div class="admin-content">
            <div class="button-group">
                <a href="create.php" class="btn big-btn">Add Users</a>
                <a href="index.php" class="btn big-btn">Manage Users</a>
            </div>

            <div class="content">
                <h2 class="page-title">Add Users</h2>

                <form action="create.php" method="post">
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
                    <?php if (empty($admin)):?>
                            <label>
                            <input type="checkbox" name="admin"> Admin
                            </label>
                        <?php else: ?>
                            <label>
                            <input type="checkbox" name="admin" checked> Admin
                            </label>
                        <?php endif; ?> 
                    </div>
                    <div>
                        <button type="submit" name= "create-admin" class="btn btn-big">Add User</button>
                    </div>
                </form>




                
                

            </div>

        </div>

        <!--//Admin Content-->







    </div>

    <!--//Admin Page Wrapper-->
    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- Online editor-->
    <script src="https://cdn.ckeditor.com/ckeditor5/31.1.0/classic/ckeditor.js"></script>

    <!-- Custom Script -->
    <script src="../../assets/js/scripts.js"></script>




</body>
</html>
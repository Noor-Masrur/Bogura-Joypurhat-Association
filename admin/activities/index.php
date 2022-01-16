<?php include("../../path.php");?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Section - Manage Activites</title>

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
                <a href="create.php" class="btn big-btn">Add Activity</a>
                <a href="index.php" class="btn big-btn">Manage Activity</a>
            </div>

            <div class="content">
                <h2 class="page-title">Manage Activites</h2>
                <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
                <table>
                    <thead>
                    <th>SN</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th colspan="3">Action</th>
                    </thead>

                    <tbody>

                        <?php foreach ($posts as $key => $post):?>
                            <tr>
                                <td><?php echo $key+1; ?></td>
                                <td><?php echo $post['title']; ?></td>
                                <td>Noor</td>
                                <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">Edit</a></td>
                                <td><a href="index.php?delete_id=<?php echo $post['id']; ?>" class="delete">Delete</a></td>
                                <?php if($post['published']):?>
                                <td><a href="edit.php?published=0&p_id=<?php echo $post['id'] ?>" class="unpublish">Unpublish</a></td>
                                <?php else:?>
                                <td><a href="edit.php?published=1&p_id=<?php echo $post['id'] ?>" class="Publish">Publish</a></td>
                                <?php endif;?>
                            </tr>
                        <?php endforeach;?>
                        


                    </tbody>
                </table>
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
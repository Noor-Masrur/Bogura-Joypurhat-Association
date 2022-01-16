<?php include("../../path.php");?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Section - Edit Activites</title>

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
                <h2 class="page-title">Edit Activites</h2>
                <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>
                

                <form action="edit.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id ?>" class="text-input" />
                <div>
                        <label>Title</label>
                        <input type="text" name="title" value="<?php echo $title ?>" class="text-input" />
                    </div>
 
                    <div>
                        <label>Body</label>
                        <textarea name="body" value="<?php echo $body ?>" id="body"><?php echo $body ?></textarea>
                    </div>

                    <div>
                        <label>Image</label>
                        <input type="file" name="image" class="text-input" />
                    </div>

                    <div>
                        <label>Activity</label>
                        <select name="activity_id" class="text-input">
                            

                            <?php foreach ($topics as $key => $topic):?>
                                <?php if (!empty($activity_id) && $activity_id === $topic['id']):?>
						            <option selected value="<?php echo $topic['id']?>"><?php echo $topic['name'];?></option>
                                <?php else: ?>
                                    <option value="<?php echo $topic['id']?>"><?php echo $topic['name'];?></option>
                                <?php endif; ?>    
                            <?php endforeach;?>
                        </select>
                    </div>
                    <div>
                        <?php if (empty($published) && $published == 0):?>
                            <label>
                            <input type="checkbox" name="published"> Publish
                            </label>
                        <?php else: ?>
                            <label>
                            <input type="checkbox" name="published" checked> Publish
                            </label>
                        <?php endif; ?> 
                        
                    </div>

                    <div> 
                        <button type="submit" name = "update-post" class="btn btn-big">Update Activity</button>
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
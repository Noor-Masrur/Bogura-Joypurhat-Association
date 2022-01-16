<?php include("path.php");?>
<?php include(ROOT_PATH . "/app/controllers/posts.php");


if(isset($_GET['id'])){
    $post = selectOne('posts', ['id' => $_GET['id']]);
}
else{
    $post = selectOne('posts', ['id' => 32]);
}
$posts = getPublishedPosts();
$topics = selectAll('activities');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $post['title'];?></title>

    <link rel="icon" type="image/png" href="assets/images/bja_logo.png">

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
    <!-- Facebook SDK-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0" nonce="xRrBpqfI"></script>
    <!-- //Facebook SDK-->

    <?php include(ROOT_PATH . "/app/includes/header.php") ?>

    <div class="page-wrapper">



        <!-- Activities -->
        <!-- Project Hasimukh -->

        <div class="content clearfix">

            <!-- Main Content -->
            <div class="main-content single">
                <h1 class="post-title"><?php echo $post['title'];?></h1>

                <div class="post-content">
                   <?php echo html_entity_decode($post['body']);?>
                </div>

            </div>

            <!-- //Main Content -->
            <!-- Side bar -->

            <div class="sidebar single">
                <!-- Facebook page -->
                <div class="fb-page" data-href="https://www.facebook.com/bjakuet" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/bjakuet" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/bjakuet">বগুড়া-জয়পুরহাট এসোসিয়েশন, কুয়েট</a></blockquote></div>
                <!-- //Facebook page -->


                <div class="section hasimukh">
                    <h2 class="section-title">All Activites</h2>
                    <?php foreach ($posts as $p):?>
                    <div class="post clearfix">
                        <img src="<?php echo BASE_URL . '/assets/images/' . $p['image'];?>" alt="event 2021" />
                        <a href="activities.php?id=<?php echo $p['id'];?>" class="title"><h4><?php echo $p['title'];?></h4></a>
                    </div>
                <?php endforeach;?>

                </div>
                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                    <?php foreach ($topics as $topic):?>
						<li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']?>"><?php echo $topic['name'];?></a></li>
                        <?php endforeach;?>
                    </ul>

                </div>

            </div>

            <!-- //Side bar -->



        </div>

        <!-- //Project Hasimukh -->






    </div>



    <!-- Footer -->
    <?php include(ROOT_PATH . "/app/includes/footer.php") ?>


    <!-- //Footer -->
    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>




</body>
</html>
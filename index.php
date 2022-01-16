<?php include("path.php");

include(ROOT_PATH . "/app/controllers/hasimukh.php");

$posts = array();
$posts_p = array();
$posts_title ='Project Hasimukh';

if(isset($_GET['t_id'])){
	$posts_p = getPostsByTopic($_GET['t_id']);
	$posts_title =$_GET['name'];
	$posts =  getPublishedPosts();
}

else if(isset($_POST['search-term'])){
	$posts_title ="Search results for '" . $_POST['search-term'] . "'";
	$posts_p = searchPosts($_POST['search-term']);
	$posts = getPublishedPosts();
}
else{

	$posts = getPublishedPosts();
	$posts_p = getNotHasimukhPosts();
	
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>BJA KUET</title>

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

	<?php include(ROOT_PATH . "/app/includes/header.php") ?>
	<?php include(ROOT_PATH . "/app/includes/messages.php") ?>

	
	<div class="page-wrapper">



		<!-- Activities -->

		<div class="post-slider">
			<h1 class="post-slider slider-title">Activites</h1>
			<i class="fas fa-angle-left prev"></i>
			<i class="fas fa-angle-right next"></i>

			<div class="post-wrapper">
				
				<?php foreach($posts as $post): ?>

				<div class="post">
					<img src="<?php echo BASE_URL . '/assets/images/' . $post['image'];?>" alt="" class="slider-image" />
					<div class="post-info">
						<h4><a href="activities.php?id=<?php echo $post['id'];?>"><?php echo $post['title'];?></a></h4>
						<i class="fa fa-user"> <?php echo $post['username'];?></i>
						&nbsp;
						<i class="far fa-calendar-week"> <?php echo date('F j, Y',strtotime($post['created_at']));?></i>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
		</div>
		<!-- //Activities -->

		<!-- Project Hasimukh -->

		<div class="content clearfix">

			<!-- Main Content -->

			<div class="main-content">
				<h1 class="project-hasimukh"><?php echo $posts_title?></h1>
				<?php foreach($posts_p as $post): ?>
					<div class="post clearfix">
						<img src="<?php echo BASE_URL . '/assets/images/' . $post['image'];?>" alt="" class="post-img">
						<div class="post-preview">
							<h2><a href="projectHasimukh.php?id=<?php echo $post['id'];?>"><?php echo $post['title'];?></a></h2>
							<i class="fa fa-user"><?php echo $post['username'];?></i>
							&nbsp;
							<i class="far fa-calendar-week"><?php echo date('F j, Y',strtotime($post['created_at']));?></i>
							<p class="preview-text">
								<?php echo html_entity_decode(substr($post['body'], 0 ,320) . '...');?>
							</p>
							<a href="projectHasimukh.php?id=<?php echo $post['id'];?>" class="btn read-more">Read More</a>

						</div>
					</div>
				<?php endforeach; ?>
				
				

			</div>

			<!-- //Main Content -->
			<!-- Side bar -->

			<div class="sidebar">
				<div class="section search">
					<h2 class="section-title">Search</h2>
					<form action="index.php" method="post">
						<input type="text" name="search-term" class="text-input" placeholder="Search...">
					</form>
				</div>


				<div class="section topics">
					<h2 class="section-title">Topics</h2>
					<ul>
						<?php foreach ($topics as $key => $topic):?>
							<li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name']?>"><?php echo $topic['name'];?></a></li>
                        <?php endforeach;?>
					




						<!--<li><a href="#">Excursion</a></li>
						<li><a href="#">Farewell</a></li>
						<li><a href="#">Get Togerther</a></li>
						<li><a href="#">Admission Festival</a></li>-->
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

	<!--Carosel-->
	<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

	<!-- Custom Script -->
	<script src="assets/js/scripts.js"></script>




</body>
</html>
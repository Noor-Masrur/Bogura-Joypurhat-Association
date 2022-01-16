<?php include("path.php");

include(ROOT_PATH . "/app/controllers/hasimukh.php");
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

				<div class="post">
					<img src="assets/images/activities/img1.jpg" alt="" class="slider-image" />
					<div class="post-info">
						<h4><a href="<?php echo BASE_URL . '/activities.php'?>">Farewell of 2k15</a></h4>
						<i class="fa fa-user"> Noor Masurur</i>
						&nbsp;
						<i class="far fa-calendar-week"> May 13, 2020</i>
					</div>
				</div>


				<div class="post">
					<img src="assets/images/activities/img2.jpg" alt="" class="slider-image" />
					<div class="post-info">
						<h4><a href="<?php echo BASE_URL . '/activities.php'?>">Futsal Tournament 2020</a></h4>
						<i class="fa fa-user"> Tamzid Shahrier Tomal</i>
						&nbsp;
						<i class="far fa-calendar-week"> May 13, 2021</i>
					</div>
				</div>


				<div class="post">
					<img src="assets/images/activities/img3.jpg" alt="" class="slider-image" />
					<div class="post-info">
						<h4><a href="<?php echo BASE_URL . '/activities.php'?>">Grand Lunch 2020</a></h4>
						<i class="fa fa-user"> Mahbubur Rahman</i>
						&nbsp;
						<i class="far fa-calendar-week"> May 13, 2021</i>
					</div>
				</div>

				<div class="post">
					<img src="assets/images/activities/img4.jpg" alt="" class="slider-image" />
					<div class="post-info">
						<h4><a href="<?php echo BASE_URL . '/activities.php'?>">Our respect for the martyrs</a></h4>
						<i class="fa fa-user">Mahmudul Hasan Shupto</i>
						&nbsp;
						<i class="far fa-calendar-week"> May 13, 2021</i>
					</div>
				</div>

			</div>


		</div>



		<!-- //Activities -->
		<!-- Project Hasimukh -->

		<div class="content clearfix">

			<!-- Main Content -->
			<div class="main-content">
				<h1 class="project-hasimukh">Project Hasimukh</h1>

				<div class="post">

					<img src="assets/images/img1.jpg" alt="" class="post-img">
					<div class="post-preview">
						<h2><a href="project_hasimukh.html">Project Hasimukh 2021</a></h2>
						<i class="fa fa-user"> Noor Masurur</i>
						&nbsp;
						<i class="far fa-calendar-week"> May 13, 2021</i>
						<p class="preview-text">
							Project Hasimukh is a charitable project where few KUETians from Bogura-Joypurhat Association have started
							this project to bring smile to people during Eid and other times as well.
						</p>

                        <a href="<?php echo BASE_URL . '/projectHasimukh.php'?>" class="btn read-more">Read More</a>

					</div>
				</div>

				<div class="post">

					<img src="assets/images/img2.jpg" alt="" class="post-img">
					<div class="post-preview">
						<h2><a href="<?php echo BASE_URL . '/projectHasimukh.php'?>">Project Hasimukh 2020</a></h2>
						<i class="fa fa-user"> Mahmubur Rahman Munna</i>
						&nbsp;
						<i class="far fa-calendar-week"> May 10, 2020</i>
						<p class="preview-text">
							Project Hasimukh is a charitable project where few KUETians from Bogura-Joypurhat Association have started
							this project to bring smile to people during Eid and other times as well.
						</p>

                        <a href="<?php echo BASE_URL . '/projectHasimukh.php'?>" class="btn read-more">Read More</a>

					</div>
				</div>

				<div class="post">

					<img src="assets/images/img3.jpg" alt="" class="post-img">
					<div class="post-preview">
						<h2><a href="<?php echo BASE_URL . '/projectHasimukh.php'?>">Project Hasimukh 2019</a></h2>
						<i class="fa fa-user">  Marufa Khandakar Dita</i>
						&nbsp;
						<i class="far fa-calendar-week"> June 17, 2019</i>
						<p class="preview-text">
							Project Hasimukh is a charitable project where few KUETians from Bogura-Joypurhat Association have started
							this project to bring smile to people during Eid and other times as well.
						</p>

                        <a href="<?php echo BASE_URL . '/projectHasimukh.php'?>" class="btn read-more">Read More</a>

					</div>
				</div>

			</div>

			<!-- //Main Content -->
			<!-- Side bar -->

			<div class="sidebar">
				<div class="section search">
					<h2 class="section-title">Search</h2>
					<form action="index.html" method="post">
						<input type="text" name="search-term" class="text-input" placeholder="Search...">
					</form>
				</div>


				<div class="section topics">
					<h2 class="section-title">Topics</h2>
					<ul>
						<?php foreach ($topics as $key => $topic):?>
						<li><a href="#"><?php echo $topic['name'];?></a></li>
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
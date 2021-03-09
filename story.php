<?php include 'header.php';?>
	<link href="single-post-1/css/styles.css" rel="stylesheet">
	<link href="single-post-1/css/responsive.css" rel="stylesheet">
	

 <?php 
        // Get post detail from database
        $query = $dBASE->query("SELECT * FROM post WHERE id='".$_GET['id']."'");
        $row = $query->fetch_array();
           
        // Get user detail from database  
        $query2 = $dBASE->query("SELECT * FROM users WHERE id='".$row['userid']."'");
        $row2 = $query2->fetch_array();

?>
	
	<section class="post-area section">
		<div class="container">

			<div class="row">

				<div class="col-lg-8 col-md-12 no-right-padding">

					<div class="main-post">

						<div class="blog-post-inner">

							<div class="post-info">

								<div class="left-area">
									<a class="avatar" href="#"><img src="images/post.jpg" alt="Profile Image"></a>
								</div>

								<div class="middle-area">
									<a class="name" href="#"><b><?php echo $row2['username'];?></b></a>
									<h6 class="date">on <?php echo $row['ondate'];?></h6>
								</div>

							</div><!-- post-info -->

							<h3 class="title"><a href="#"><b><?php echo $row['title'];?></b></a></h3>

							<p class="para"><?php echo $row['content'];?>
							<div class="post-image"><img src="images/blog-1-1000x600.jpg" alt="Blog Image"></div>

							<p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
							dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
							ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
							nulla pariatur. Excepteur sint
							occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>

						
						</div><!-- blog-post-inner -->

						<div class="post-icons-area">
							<ul class="post-icons">
								<li><a href="#"><i class="ion-heart"></i><?php echo $row['likes'];?></a></li>
								<li><a href="#"><i class="ion-chatbubble"></i><?php echo $row['comment'];?></a></li>
								<li><a href="#"><i class="ion-eye"></i><?php echo $row['views'];?></a></li>
							</ul>

							<ul class="icons">
								<li>SHARE : </li>
								<li><a href="#"><i class="ion-social-facebook"></i></a></li>
								<li><a href="#"><i class="ion-social-twitter"></i></a></li>
								<li><a href="#"><i class="ion-social-pinterest"></i></a></li>
							</ul>
						</div>

						<div class="post-footer post-info">

							<div class="left-area">
								<a class="avatar" href="#"><img src="images/post.jpg" alt="Profile Image"></a>
							</div>

							<div class="middle-area">
								<a class="name" href="#"><b><?php echo $row2['username'];?></b></a>
								<h6 class="date">on <?php echo $row['ondate'];?></h6>
							</div>

						</div><!-- post-info -->


					</div><!-- main-post -->
				</div><!-- col-lg-8 col-md-12 -->

				<div class="col-lg-4 col-md-12 no-left-padding">

					<div class="single-post info-area">

						<div class="sidebar-area about-area">
							<h4 class="title"><b>ABOUT Skooleo</b></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
								ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur
								Ut enim ad minim veniam</p>
						</div>

						<div class="sidebar-area subscribe-area">

							<h4 class="title"><b>SUBSCRIBE</b></h4>
							<div class="input-area">
								<form>
									<input class="email-input" type="text" placeholder="Enter your email">
									<button class="submit-btn" type="submit"><i class="icon ion-ios-email-outline"></i></button>
								</form>
							</div>

						</div><!-- subscribe-area -->

					
					</div><!-- info-area -->

				</div><!-- col-lg-4 col-md-12 -->

			</div><!-- row -->

		</div><!-- container -->
	</section><!-- post-area -->


				</div><!-- col-lg-8 col-md-12 -->

			</div><!-- row -->

		</div><!-- container -->
	</section>
<?php include 'footer.php';?>
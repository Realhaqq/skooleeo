<?php 
include 'header.php';
// gets the user IP Address
  $user_ip=$_SERVER['REMOTE_ADDR'];
  $check_ip = $dBASE->query("select userip from pageview where page='index' and userip='$user_ip'") or die($dBASE->error);
  if($check_ip->num_rows > 0)
  {
	
  }
  else
  {
    // Insert pageviews
    $insertview = $dBASE->query("insert into pageview values('','index','$user_ip')")or die($dBASE->error);
	$updateview = $dBASE->query("update totalview set totalvisit = totalvisit+1 where page='index' ")or die($dBASE->error);
  }
?>


	<section class="blog-area section">
		<div class="container">
			<div class="row">


 <?php 
//  Get List of stories from database
 $query = $dBASE->query("SELECT * FROM post ORDER BY id DESC");
            $i = 0;
 while($row = $query->fetch_array()){
            ?>
        
				<div class="col-lg-4 col-md-6">
					<div class="card h-100">
						<div class="single-post post-style-1">

							<div class="blog-image"><img src="images/marion-michele-330691.jpg" alt="Blog Image"></div>

							<a class="avatar" href="#"><img src="images/post.jpg" alt="Profile Image"></a>

							<div class="blog-info">

								<h4 class="title"><a href="process?read_story=<?php echo $row['id'];?>"><b><?php echo $row['title'];?></b></a></h4>

								<ul class="post-footer">
									<li><a href="#"><i class="ion-heart"></i><?php echo $row['likes'];?></a></li>
									<li><a href="#"><i class="ion-chatbubble"></i><?php echo $row['comment'];?></a></li>
									<li><a href="#"><i class="ion-eye"></i><?php echo $row['views'];?></a></li>
								</ul>

							</div><!-- blog-info -->
						</div><!-- single-post -->
					</div><!-- card -->
				</div><!-- col-lg-4 col-md-6 -->
<?php }?>
			
		</div><!-- container -->
	</section><!-- section -->

<?php include 'footer.php';?>
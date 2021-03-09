
	<footer>

		<div class="container">
			<div class="row">

				<div class="col-lg-4 col-md-6">
					<div class="footer-section">
						<p class="copyright">Skooleeo @ 2021. All rights reserved.</p>
						<ul class="icons">
							<li><a href="#"><i class="ion-social-facebook-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-twitter-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-vimeo-outline"></i></a></li>
							<li><a href="#"><i class="ion-social-pinterest-outline"></i></a></li>
						</ul>

					</div><!-- footer-section -->
				</div><!-- col-lg-4 col-md-6 -->

				<div class="col-lg-4 col-md-6">
						<div class="footer-section">
						<h4 class="title"><b>PAGES</b></h4>
						<ul>
							<li><a href="login">My Account</a></li>
						
						</ul>
						<ul>
						
						</ul>
					</div><!-- footer-section -->
				</div><!-- col-lg-4 col-md-6 -->

				<div class="col-lg-4 col-md-6">
					<div class="footer-section">

						<h4 class="title"><b>STATISTICS</b></h4>
						<div class="input-area">
						    <h4 style="color: red;">Visitors Count:<b> <?php 
						    $query2 = $dBASE->query("SELECT * FROM pageview") or die($dBASE->error);
						    $c = $query2->num_rows;
						    echo $c;
						    ?>
						    </h4>
						    
						    </span>
						
						</div>

					</div><!-- footer-section -->
				</div><!-- col-lg-4 col-md-6 -->

			</div><!-- row -->
		</div><!-- container -->
	</footer>


	<!-- SCIPTS -->

	<script src="common-js/jquery-3.1.1.min.js"></script>

	<script src="common-js/tether.min.js"></script>

	<script src="common-js/bootstrap.js"></script>

	<script src="common-js/scripts.js"></script>

</body>
</html>
  <?php include 'header.php';
  if(isset($_SESSION['email'])){

  }else{
          echo '<script>window.location = "login";</script>';
  }
  ?>

  <style>
        .ajax_loader{
          background: url(build/images/Preloader_8.gif);
          background-repeat: no-repeat;
          background-position: center; 
          background-size:auto;
          height:50px;
          cursor:default;
          z-index:-1;
        }
      </style>

    <link href="single-post-1/css/styles.css" rel="stylesheet">

    <link href="single-post-1/css/responsive.css" rel="stylesheet">

    <section class="blog-area section">
      <div class="container">

      <div class="container">


  <div class="row">
    
    <div class="col-sm-6">
          <footer>
      <div class="card">
          <b>Welcome back, <?php echo $_SESSION['username'];?></b>
        <div class="card-body">
          <h3>(<?php $query = $dBASE->query("SELECT * FROM post WHERE userid='$id'");
          
              $c = $query->num_rows;
              
              echo $c;
              
              ?>) post</h3>
          <!--<p class="card-text">post</p>-->
          <hr/>
          <a href="my-stories" class="btn btn-primary">My Stories</a>
          <a href="new-post" class="btn btn-info">New Story</a> 
          <a href="logout" class="btn btn-danger">Logout</a>
        </div>
      </div>
      </footer>
    </div>
  </div>






            </div>
          </div>   
        </div>




          </div>
          <div class="col-md-4"></div>

        </div>


      </div><!-- container -->
    </section><!-- section -->
  <?php include 'footer.php';?>

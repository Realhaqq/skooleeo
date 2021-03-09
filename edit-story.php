<?php include 'header.php';
if(isset($_SESSION['email'])){
    
}else{
    echo '<script>window.location = "login";</script>';
}
// Select post from database
$query = $dBASE->query("SELECT * FROM post WHERE id='".$_GET['id']."'");
$row = $query->fetch_array();
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
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

	<link href="single-post-1/css/styles.css" rel="stylesheet">

	<link href="single-post-1/css/responsive.css" rel="stylesheet">

	<section class="blog-area section">
		<div class="container">

		 <div class="container">

      <div class="row">

        <div class="col-md-4"></div>
        <div class="col-md-4">



          <div class="flip">
        <div class="card"> 
          <div class="face front"> 
              


            <div class="panel panel-default" >

                   <form class="form-horizontal" name="sign_in_form" id="sign_in_form">
               
                               <center><h4>Edit Story</h4></center>
                <br>
         

               <input class="form-control" placeholder="Title" id="title" name="title" value="<?php echo $row['title'];?>" type="text" autocomplete="on" required="true" />
               <input class="form-control" id="pid" name="pid" value="<?php echo $row['id'];?>" type="hidden" autocomplete="on" required="true" />
     <br/>          
               <textarea class="form-control" placeholder="Post content" id="content" name="content" type="text" required="true" size="70"><?php echo $row['content'];?></textarea>
<script>
                        CKEDITOR.replace( 'content' );
                </script>
<br/>
     <p id="sign_in_result"><button class="btn btn-primary btn-block" id="btn_sign_in">UPDATE POST</button></p>

<div id="haqq"></div>

                <hr>

              </form>

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


    <script src="build/js/jquery.min.js"></script>
    <script src="build/js/bootstrap.min.js"></script>

    <script>
      $(document).ready(function(){
        $("#sign_in_form").on('submit',function(e){
          e.preventDefault();
          
          $("#content").prop('disabled', true);
          $("#title").prop('disabled', true);
          

          $("#btn_sign_in").prop("disabled", true);
          $("#btn_sign_in").html("");
          $("#btn_sign_in").blur();
          $("#btn_sign_in").removeClass("btn-primary");
          $("#haqq").addClass("ajax_loader")

          $.ajax({
            url: "doeditpost.php",
            type: "POST",
            data: {
              title: $("#title").val(),
              content: $("#content").val(),
              pid: $("#pid").val()
            },
            beforeSend: function(){
                $("#btn_sign_in").prop("disabled", true);
            },
            success: function(result){
              $("#sign_in_result").html(result);
            },
            error: function(){
              $("#btn_sign_in").prop("disabled", false);
            }
          });
        });
      });
    </script>
<?php include 'footer.php';?>

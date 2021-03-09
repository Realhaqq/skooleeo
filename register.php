<?php include 'header.php';?>
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

        <div class="col-md-4"></div>
        <div class="col-md-4">



          <div class="flip">
        <div class="card"> 
          <div class="face front"> 
              


            <div class="panel panel-default" >
<form class="form-horizontal" name="sign_in_form" id="sign_in_form">
               

                <!--<h1 class="text-center"><img  src="img/logo.png" width="100"></h1>-->
                <center><h4>User Register</h4></center>

                <br/>
         
<input class="form-control" placeholder="Fullname" id="fullname" name="fullname" type="text" autocomplete="on" required="true" />
<br/>

               <input class="form-control" placeholder="Email" id="email" name="email" type="email" autocomplete="on" required="true" />

<br/>
               <input class="form-control" placeholder="Password" id="password" name="password" type="password" required="true" />
     <br/><p id="sign_in_result"><button class="btn btn-primary btn-block" id="btn_sign_in">CREATE ACCOUNT</button></p>

<div id="haqq"></div>

                <hr>


                <center><a href="login">Already have an account?</a></center>
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
          
          $("#email").prop('disabled', true);
          $("#password").prop('disabled', true);
          $("#fullanme").prop('disabled', true);
          

          $("#btn_sign_in").prop("disabled", true);
          $("#btn_sign_in").html("");
          $("#btn_sign_in").blur();
          $("#btn_sign_in").removeClass("btn-primary");
          $("#haqq").addClass("ajax_loader")

          $.ajax({
            url: "doregister.php",
            type: "POST",
            data: {
              email: $("#email").val(),
              password: $("#password").val(),
              fullname: $("#fullname").val()
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

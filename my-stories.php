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
    <div class="col-12">
        
        <h3>My Stories</h3>
   <hr/>
       <table class="table">
                   <tr>
                       <td><h4>S/N</h4></td>
                       <td><h4>Title</h4></td>
                       <td><h4>Views</h4></td>
                       <td><h4>Comment</h4></td>
                       <td><h4>Action</h4></td>
                   </tr>
                   
                   <!--Get post from database-->
     <?php $query = $dBASE->query("SELECT * FROM post WHERE userid='$id'");
            $i = 0;
            while($row = $query->fetch_array()){
            ?>
        
               <tr>
     
                        <td><h4><?php echo $i++;?></h4></td>
                        <td>
                            <h4><?php echo $row['title'];?></h4>
                             
                        </td>
                        
                         <td>
                            <h4><?php echo $row['views'];?></h4>
                             
                        </td>
                        
                         <td>
                            <h4><?php echo $row['comment'];?></h4>
                             
                        </td>
                        
                        <td><a href="edit-story?id=<?php echo $row['id'];?>">edit</a> | <a href="process?del_post=<?php echo $row['id'];?>">delete</a></td>
                  
            </tr>
         
    <?php } ?>
     
                </table>
     
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

<?php
   session_start();
   extract($_POST);
extract($_GET);
 include 'db/config.php';
       
           $query4 = $dBASE->query("INSERT INTO post
            (
                `title`,
                `content`,
                `userid`
            )
            VALUES
            (
                '$title',
                '$content',
                '".$_SESSION['id']."'
            );

            ") or die($dBASE->error);

           
        if(!$query4){}else{

                ?><button class="btn btn-success btn-block" id="btn_sign_up">Story post successfully</button><?php
                ?>
                    <script>
                        $(document).ready(function(){
                            $("#btn_sign_up").prop("disabled", true);
                            var setInteval = setTimeout(function(){
                            $("#btn_sign_up").html("");
                               $("#haqq").removeClass("ajax_loader");
                            $("#btn_sign_up").removeClass("btn-success");
                            }, 2000);
                        });
                        var setInterval = setTimeout(function(){
                            // location.reload();
                            location = "dashboard";
                        },2000);
                    </script>
                <?php
                
            
        
    }
?>
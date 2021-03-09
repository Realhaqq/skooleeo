<?php
   session_start();
   extract($_POST);
extract($_GET);
 include 'db/config.php';
    $pass = md5($password);
    $query1 = $dBASE->query("SELECT * FROM `users` WHERE `email` = '$email' ") or die($dBASE->error);

   if($query1->num_rows > 0){
        ?><button class="btn btn-danger btn-block" id="btn_sign_up">This email has already been used</button><?php
        ?>
            <script>
                $(document).ready(function(){
              
                    $("#btn_sign_up").prop("disabled", true);
                    $("#email").prop("disabled", true);
                    $("#fullname").prop("disabled", true);
                    $("#password").prop("disabled", true);
                   
                    var SetInerval = setTimeout(function(){
                        $("#btn_sign_in").html("Rolling Back Please wait...");
                            $("#btn_sign_in").addClass("#h");
                            $("#btn_sign_in").removeClass("btn-default");
                    }, 3000);
                    var setInterl = setTimeout(function(){
                      /*$("#pin_sign_up").prop("disabled", false);*/
                        $("#btn_sign_up").prop("disabled", false);
                        $("#email").prop("disabled", false);
                    $("#fullname").prop("disabled", false);
                    $("#password").prop("disabled", false);
                        $("#btn_sign_up").html("CREATE ACCOUNT");
                          $("#haqq").removeClass("ajax_loader");
                        $("#btn_sign_up").addClass("btn-primary");
                    }, 5000);

                })
            </script>
        <?php
    }else{
        
      
       
           $query4 = $dBASE->query("INSERT INTO users
            (
                `username`,
                `email`,
                `password`
            )
            VALUES
            (
                '$fullname',
                '$email',
                '$pass'
            );

            ") or die($dBASE->error);

           
        if(!$query4){}else{

                ?><button class="btn btn-success btn-block" id="btn_sign_up">Account successfully created</button><?php
                ?>
                    <script>
                        $(document).ready(function(){
                            $("#btn_sign_up").prop("disabled", true);
                            var setInteval = setTimeout(function(){
                            $("#btn_sign_up").html("");
                               $("#haqq").removeClass("ajax_loader");
                            $("#btn_sign_up").removeClass("btn-success");
                            }, 3000);
                        });
                        var setInterval = setTimeout(function(){
                            // location.reload();
                            location = "login";
                        },5000);
                    </script>
                <?php
                
            
        }
    }
?>
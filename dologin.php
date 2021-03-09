<?php
session_start();
extract($_SESSION);
extract($_POST);
extract($_GET);
    include 'db/config.php';
    $pass = md5($password);
    $query = $dBASE->query("SELECT * FROM users where email='$email' And password='$pass'")or die($dBASE->error);

    if($query->num_rows > 0){
        ?><button class="btn btn-default btn-block" id="btn_sign_in"><span class="fa fa-spinner"></span> Verify Please wait...</button><?php 
        $row = $query->fetch_assoc();
        $_SESSION["email"] = $row["email"];
        $_SESSION["id"] = $row["id"];
        $_SESSION["username"] = $row["username"];
        
      
        ?>
        <script src="build/js/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    $("#btn_sign_in").prop("disabled", true);
                    $("#email").prop("disabled", true);
                    $("#password").prop("disabled", true);
                    
                    var setInteva = setTimeout(function(){
                            $("#btn_sign_in").html("Please wait...");
                            $("#btn_sign_in").addClass("#h");
                            $("#btn_sign_in").removeClass("btn-default");
                    }, 3000);
                    var setInteral = setTimeout(function(){
    location = "dashboard";
    }, 3000);
                })
            </script>
        <?php
    }else{
        ?><button class="btn btn-danger btn-block" id="btn_sign_in">Invalid sign-in credentials</button><?php
        ?>
            <script>
                $(document).ready(function(){
                    $("#btn_sign_in").prop("disabled", true);
                    $("#email").prop("disabled", true);
                    $("#password").prop("disabled", true);
              
                    var SetInterval = setTimeout(function(){
                        $("#btn_sign_in").html("Rolling back Please wait...");
                        $("#btn_sign_int").addClass("ajax_loader");
                        $("#btn_sign_in").removeClass("btn-danger");
                    }, 3000);
                    var setnterval = setTimeout(function(){
                        $("#btn_sign_in").prop("disabled", false);
                        $("#email").prop("disabled", false);
                         $("#password").prop("disabled", false);
                       
                        $("#btn_sign_in").html("SIGN IN");
                        $("#haqq").removeClass("ajax_loader");
                        $("#btn_sign_in").addClass("btn-primary");
                    }, 5000);
                })
            </script>
        <?php
    }

?>


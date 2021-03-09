<?php 
session_start();
extract($_SESSION);
 include 'db/config.php';
extract($_GET);
if(isset($_GET['read_story'])){
    // echo "yess";
    $i = 1;
    $query = $dBASE->query("UPDATE post SET views = views + $i WHERE id='$read_story'") or die($dBASE->error);
    // if($query->num_rows > 0){
        header("Location: story?id=$read_story");
    // }else{
        // header("Location: index");

    // }
}


if(isset($_GET['del_post'])){
    $query = $dBASE->query("DELETE FROM post WHERE id='$del_post'");
    header("Location: my-stories");

}


?>
<?php
        session_start();
    include("server.php");

    $comment =$_POST['comment'];
    $id =@ $_SESSION['select'];

    if(empty($comment)){
       
    }else{
        $user=$_SESSION['username'];
        $query ="INSERT INTO comment(post_id,comment,user_comment,data_comment) VALUES('$id','$comment','$user',now())";
        $res = mysqli_query($conn,$query);
        header('location: detail.php');
        if($res){
            mysqli_query($conn,"UPDATE notebook SET comment=comment+1 WHERE id='$id'");
        }
    }
    


?>
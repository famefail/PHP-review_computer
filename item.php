<?php 

    include('server.php');
    session_start();

?> 

<?php 
    if(isset($_SESSION['notebook_name'])){
        echo $_SESSION['notebook_name']; 
    }

    
    // echo $_SESSION['price']; 
    // echo $_SESSION['img']; 

?>
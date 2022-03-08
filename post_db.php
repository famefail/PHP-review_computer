<?php include('server.php');
      

$name     = $_POST['notebook_name'];
$img      =$_POST['img'];
$price    =$_POST['price'];
$category =$_POST['category_id'];
$detail   =$_POST['detail'];
$date     =date("Y-m-d H:i:s");
    $sql  = "INSERT INTO notebook VALUES ('','$name','$img','$price','$date','$category','$detail','')";
    if ($conn->query($sql) === TRUE) {
      require('product.php');
         
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    $conn->close();
?>




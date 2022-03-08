<?php 

session_start();
include('server.php');

?>

<?php

if(!isset($_SESSION['username'])){
    header('location: login.php');
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}
$id = array();
$notebook_name = array();
$price = array();
$img = array();

$sql = "SELECT * FROM notebook ORDER BY notebook_name DESC LIMIT 4 " ;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      array_push($id, $row['notebook_id']);
      array_push($notebook_name, $row['notebook_name']);
      array_push($price, $row['price']);
      array_push($img, $row['img']);
    }
}



if(isset($_POST['clickProduct'])){
    echo "worl";
    $notebook_name = mysqli_real_escape_string($conn, $_GET['$notebook_name']);
    // $_SESSION['notebook_name'] = $notebook_name;
    // $_SESSION['price'] = $price;
    // $_SESSION['img'] = $img;
    echo $notebook_name;

    // header('location: item.php');

}

?>
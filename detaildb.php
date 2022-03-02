<?php 

    include('server.php');
    session_start();

?>

<?php

if(!isset($_SESSION['username'])){
    header('location: login.php');
}

if(isset($GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}
$id = array();
$notebook_name = array();
$price = array();
$img = array();

$sql = "SELECT * FROM notebook";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      array_push($id, $row['notebook_id']);
      array_push($notebook_name, $row['notebook_name']);
      array_push($price, $row['price']);
      array_push($img, $row['img']);
    }
}

$category_name = array();
$categorySql = "SELECT category_name FROM category";
$resultCategory = $conn->query($categorySql);

if ($resultCategory->num_rows > 0) {
    while($row = $resultCategory->fetch_assoc()) {
     array_push($category_name, $row['category_name']);
    }
}
?>
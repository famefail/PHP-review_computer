<?php include('server.php');

    session_start();
    if(isset($_GET['subPrice'])){
        $min = $_GET['min'];
        $max = $_GET['max'];
    $sql = "SELECT * FROM notebook WHERE price BETWEEN '$min' AND '$max'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        unset($_SESSION['id']);
         unset($_SESSION['notebook_name']);
         unset($_SESSION['price']);
         unset($_SESSION['img']);
        $_SESSION['id'] = array();
        $_SESSION['notebook_name'] = array();
        $_SESSION['price'] = array();
        $_SESSION['img'] = array();
        while($row = $result->fetch_assoc()) {
          array_push($_SESSION['id'], $row['notebook_id']);
          array_push($_SESSION['notebook_name'], $row['notebook_name']);
          array_push($_SESSION['price'], $row['price']);
          array_push($_SESSION['img'], $row['img']);
        }
        header('location: price.php');
     }
    }
    $category_id = array();
   $category_name = array();
   $categorySql = "SELECT * FROM category";
   $resultCategory = $conn->query($categorySql);
   if ($resultCategory->num_rows > 0) {
       while($row = $resultCategory->fetch_assoc()) {
        array_push($category_name, $row['category_name']);
        array_push($category_id, $row['category_id']);
       }
    }
?>
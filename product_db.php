
<?php
 include('server.php');
session_start();
// login / logout
if(!isset($_SESSION['username'])){
    header('location: login.php');
}

if(isset($GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
}

// item
$id = array();
$notebook_name = array();
$price = array();
$img = array();

//click category
if(isset($_GET['subCategory'])){
    $category = $_GET['category'];
    $_SESSION['category'] = $_GET['category'];
    $sql = "SELECT notebook.notebook_id, notebook.notebook_name,notebook.price,notebook.img, notebook.category_id, category.category_name
    FROM category
    INNER JOIN notebook ON notebook.category_id  = category.category_id
    WHERE category.category_name =  '$category'";
    $result  = $conn->query($sql);

    // array_splice($notebook_name,0, count($notebook_name));
    unset($_SESSION['id']);
    unset($_SESSION['notebook_name']);
    unset($_SESSION['price']);
    unset($_SESSION['img']);
    $id = array();
    $notebook_name = array();
    $price = array();
    $img = array();
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          array_push($id, $row['notebook_id']);
          array_push($notebook_name, $row['notebook_name']);
          array_push( $price, $row['price']);
          array_push($img, $row['img']);
        }
        
        
    }else{
        echo "error";
    }
    header("location: category.php");
   }
//    unclick category then show all product
   else if (!isset($_GET['subCategory'])){
    $sql = "SELECT * FROM notebook ORDER BY date DESC";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          array_push($id, $row['notebook_id']);
          array_push($notebook_name, $row['notebook_name']);
          array_push($price, $row['price']);
          array_push($img, $row['img']);
        }
    }
  }
    // show list category in select
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
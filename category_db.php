<?php include('server.php');
      session_start();
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
    $_SESSION['id'] = array();
    $_SESSION['notebook_name'] = array();
    $_SESSION['price'] = array();
    $_SESSION['img'] = array();
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              array_push($_SESSION['id'], $row['notebook_id']);
              array_push($_SESSION['notebook_name'], $row['notebook_name']);
              array_push($_SESSION['price'], $row['price']);
              array_push($_SESSION['img'], $row['img']);

            }
            
            
        }else{
            echo "error";
        }
        header("location: category.php");
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
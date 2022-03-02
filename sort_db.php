<?php include('server.php');
      session_start();

      if(isset($_GET['subSort'])){
          $sort = $_GET['sort'];
          switch ($sort) {
            case "new":
              $sql = "SELECT * FROM notebook ORDER BY date DESC";
              $query = $conn->query($sql);
              if ($query->num_rows > 0) {
                unset($_SESSION['id']);
                unset($_SESSION['notebook_name']);
                unset($_SESSION['price']);
                unset($_SESSION['img']);
                $_SESSION['id'] = array();
                $_SESSION['notebook_name'] = array();
                $_SESSION['price'] = array();
                $_SESSION['img'] = array();
                while($row = $query->fetch_assoc()) {
                  array_push($_SESSION['id'], $row['notebook_id']);
                  array_push($_SESSION['notebook_name'], $row['notebook_name']);
                  array_push($_SESSION['price'], $row['price']);
                  array_push($_SESSION['img'], $row['img']);
                  var_dump($_SESSION['notebook_name']);
                }
                header('location: sort.php');
            }
              break;
            case "old":
              $sql = "SELECT * FROM notebook ORDER BY date ASC";
              $query = $conn->query($sql);
              if ($query->num_rows > 0) {
                unset($_SESSION['id']);
                unset($_SESSION['notebook_name']);
                unset($_SESSION['price']);
                unset($_SESSION['img']);
                $_SESSION['id'] = array();
                $_SESSION['notebook_name'] = array();
                $_SESSION['price'] = array();
                $_SESSION['img'] = array();
                while($row = $query->fetch_assoc()) {
                  array_push($_SESSION['id'], $row['notebook_id']);
                  array_push($_SESSION['notebook_name'], $row['notebook_name']);
                  array_push($_SESSION['price'], $row['price']);
                  array_push($_SESSION['img'], $row['img']);
                  var_dump($_SESSION['notebook_name']);
                }
                header('location: sort.php');
              }
              break;
            case "A":
              $sql = "SELECT * FROM notebook ORDER BY notebook_name ASC";
              $query = $conn->query($sql);
              if ($query->num_rows > 0) {
                unset($_SESSION['id']);
                unset($_SESSION['notebook_name']);
                unset($_SESSION['price']);
                unset($_SESSION['img']);
                $_SESSION['id'] = array();
                $_SESSION['notebook_name'] = array();
                $_SESSION['price'] = array();
                $_SESSION['img'] = array();
                while($row = $query->fetch_assoc()) {
                  array_push($_SESSION['id'], $row['notebook_id']);
                  array_push($_SESSION['notebook_name'], $row['notebook_name']);
                  array_push($_SESSION['price'], $row['price']);
                  array_push($_SESSION['img'], $row['img']);
                  var_dump($_SESSION['notebook_name']);
                }
                header('location: sort.php');
              }
              break;
              case "Z":
                $sql = "SELECT * FROM notebook ORDER BY notebook_name DESC";
                $query = $conn->query($sql);
                if ($query->num_rows > 0) {
                  unset($_SESSION['id']);
                  unset($_SESSION['notebook_name']);
                  unset($_SESSION['price']);
                  unset($_SESSION['img']);
                  $_SESSION['id'] = array();
                  $_SESSION['notebook_name'] = array();
                  $_SESSION['price'] = array();
                  $_SESSION['img'] = array();
                  while($row = $query->fetch_assoc()) {
                    array_push($_SESSION['id'], $row['notebook_id']);
                    array_push($_SESSION['notebook_name'], $row['notebook_name']);
                    array_push($_SESSION['price'], $row['price']);
                    array_push($_SESSION['img'], $row['img']);
                    var_dump($_SESSION['notebook_name']);
                  }
                  header('location: sort.php');
                }
                    break;
            default:
              echo "null";
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
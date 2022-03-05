<?php include('server.php');

    session_start();

    
if(isset($_GET['subSearch'])){
    $search = $_GET['search'];
    $search .= '%';
    $sql = "SELECT * FROM notebook where notebook_name LIKE '$search'";
    $result = $conn->query($sql);
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
}
header('location: search.php');
}
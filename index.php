
<?php include('index_db.php')?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <title>home</title>
</head>
<body>

   
    <!-- nav  -->
    <div class = "nav-center"> 
       
        <nav class = "nav-logo">
            logo
        </nav>
        <nav>
            <a href="index.php">หน้าหลัก</a>
            <a href="product.php">สินค้า</a>
            <?php if (isset($_SESSION['username'])): ?>
            <a><?php echo $_SESSION['username']; ?></a>
            <?php endif?>
            <a href = "index.php?logout='1'">Logout</a>
        </nav>
        
    </div>
    <div class = "video">
        <video autoplay loop muted class = "video-container">
            <source src="video/home.mkv">
        </video>
        <div class = des-video>
            <h1>Good deal, Good price</h1>
         <button class = "video-btn">
            view more
        </button>
    </div>
    </div> 
    
     สินค้ามาใหม่ - New Release
    <div class = "new-release-container">
        
          <?php for($i = 0 ; $i < count($id) ; $i++) {
     echo '
        <form action = "index_db.php"method = "post" >
        <div value = $notebook_name[$i]> dwdwd</div>
        <button type = "submit" name = "clickProduct"></button>
            </form>


     <div class = "new-release">
      <div class = "new-release-img">
      <img class = "img-new-release" src='.$img[$i]. '>'.
    '</div>
    <div class = "new-release-des">' 
   .$notebook_name[$i].
    '<br>'.
     $price[$i].
     '
     </div>
     </div>
     '
      ;
     }  ?>

     
    
    </div>
    <script src = "index.js"></script>
</body>
</html>

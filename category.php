<?php 

    include('category_db.php');
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>category</title>
    <link rel="stylesheet" href="product.css">
</head>
<body>
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
    
    <div class = "brand">
    <form action="category_db.php" method="GET">
    <label for="ิcategory">ยี่ห้อ </label>
    <select name="category" >
        <!-- มส่ if else ให้ select -->
        <?php if (!isset($_SESSION['category'])){
             echo '<option value = </option>';
        }else
        echo '<option value = ' .$_SESSION['category'].'>'.$_SESSION['category'].'</option>';
        ?>
            
        <?php for($i = 0 ; $i < count($category_id) ; $i++) {
            echo '<option value = ' .$category_name[$i].'>'.$category_name[$i].'</option>'
        ;}?>
    </select>
    <input type="submit" name = "subCategory">
        </form>
        
    <!-- <form action="./action_page.php">
        <label for="birthday">วันที่:</label>
        <input type="date" id="birthday" name="birthday">
        <input type="submit" value = "ค้นหา" >
      </form> -->
    
</div>
<?php for($i = 0 ; $i < count($_SESSION['id']) ; $i++) {
     echo '
<div class = product-container>
    <div class = product-img> 
    <img src ='.$_SESSION['img'][$i].' style = "width: 150px; height:200px;" alt="">
</div>
    <div class = detail>
        '.$_SESSION['notebook_name'][$i].'
    </div>
</div>'
;}?>
</body>
</html>
</body>
</html>

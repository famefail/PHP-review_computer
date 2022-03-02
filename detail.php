<?php include('detaildb.php') ?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="detail1.css">
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
    <label for="ิbrand">ยี่ห้อ </label>
    <select name="brand" >
        <option value=""></option>
        <?php for($i = 0 ; $i < count($id) ; $i++) {
            echo '<option value = ' .$category_name[$i].'>'.$category_name[$i].'</option>'
        ;}?>
    </select>
    <form action="./action_page.php">
        <label for="birthday">วันที่:</label>
        <input type="date" id="birthday" name="birthday">
        <input type="submit" value = "ค้นหา" >
      </form>
    
      
</div>
    <div class="block-2">   
        <h3d>รายการสินค้าล่าสุด</h3d>
        </div>
    <?php 
            echo '
                <div align="center">
                <div class = product-img> 
                <img src ='.$img[0].' style = "width: 200px; height:200px;float:center;" >
                </div>
                </div>
                <br>
                <h3>ชื่อสินค้า :'.$notebook_name[0].'</h3>
                <br>
                <h3><u>รายละเอียดสินค้า</u></h3>
                <br>
                <h3>ราคา :'.$price[0].'</h3>
                
                <br>
                <h3>คะแนนรีวิว :</h3>
               
               '



    ?>




</body>
</html>
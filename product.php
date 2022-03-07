<?php include('product_db.php') ?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
    <link rel="stylesheet" href="product.css?v=<?php echo time(); ?>">
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

         <!-- search -->
        <form action="search_db.php" method = "get" class = "search">
                <label for="search">ค้นหาสินค้า</label>
                <input type = "text" name = "search">
                <input type = "submit" name =  "subSearch">
        </form>
        <!-- filter price  -->
        <form action="price_db.php" method = "get" class = "search">
                <label for="min">ราคาขั้นต่ำ</label>
                <input type = "text" name = "min">
                <label for="max">ราคาสูงสุด</label>
                <input type = "text" name = "max">
                <input type = "submit" name =  "subPrice">
        </form>
    <button class = "dark-btn">
        logo
            </button>
    
    <div class = "brand" class = "form">
    <form action="product_db.php" method="GET">
    <label for="ิcatrgory">ยี่ห้อ </label>
    <select name="category" >
        <!-- มส่ if else ให้ select -->
        <?php if (!isset($_GET['category'])){
             echo '<option value = </option>';
        }else
        echo '<option value = ' .$category.'>'.$category.'</option>';
        ?>
        <?php for($i = 0 ; $i < count($category_id) ; $i++) {
            echo '<option value = ' .$category_name[$i].'>'.$category_name[$i].'</option>'
        ;}?>
    </select>
    <input type="submit" name = "subCategory"class = submit >
        </form>
        
     <form action="sort_db.php" method = GET class = "form">
        <label for="birthday">เรียงตาม:</label>
        <select name = "sort">
        <option value = ""></option>
        <option value = "new">สินค้าใหม่-เก่า</option>
            <option value = "old">สินค้าเก่า-ใหม่</option>
            <option value = "A">ตัวอักษร A-Z</option>
            <option value = "Z">ตัวอักษร Z-A</option>
        </select>
        <input type="submit" name = "subSort"value = "ค้นหา"class = submit >
      </form>
    
</div>
<div class = "product-bg">
<?php for($i = 0 ; $i < count($id) ; $i++) {
     echo '
<div class = product-container>
    <div class = product-img> 
    <img src ='.$img[$i].' style = "width: 150px; height:200px;" alt="">
</div>
    <div class = detail>
        '.$notebook_name[$i].'
        <br>
        '.$price[$i].'
    </div>
</div>'
;}?>
</div>
  <script type = "text/javascript">
        const darkbtn =  document.querySelector('.dark-btn');
        const nav  = document.querySelector(".nav-center")
        const aa  = document.querySelectorAll("a")
        const product = document.querySelectorAll('.product-container')
        const select = document.querySelectorAll('select')
        const submit = document.querySelectorAll('.submit')
        darkbtn.addEventListener('click', function(){
        var element = document.body;
        element.classList.toggle("darkmode-black");
    nav.classList.toggle('darkmode-gray');
    for (let i = 0; i < aa.length; i++) {
    aa[i].classList.toggle('darkmode-gray');
  }
  for (let i = 0; i < submit.length; i++) {
    submit[i].classList.toggle('darkmode-gray');
  }
  for (let i = 0; i < select.length; i++) {
    select[i].classList.toggle('darkmode-gray');
  }
  for (let i = 0; i < product.length; i++) {
    product[i].classList.toggle('darkmode-gray');
  }
})
    for (let i = 0; i < product.length; i++) {
    product[i].addEventListener('mouseenter', function(){
        product[i].classList.add('product-hover');
        
    })
    product[i].addEventListener('mouseleave', function(){
        product[i].classList.remove('product-hover');
        
    })
    }
    </script>
</body>
</html>
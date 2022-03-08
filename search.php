<?php include('search_db.php');?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
    <link rel="stylesheet" href="product.css?v=<?php echo time(); ?>">
</head>
<body>
<div class = "nav-block">
    <div class = "nav-center">
        <nav class = "nav-logo">
        
        <!-- search -->
        <form action="search_db.php" method = "get" class = "search">
                <label for="search">ค้นหาสินค้า</label>
                <input type = "text" name = "search" class ="input">
                <input type = "submit" name =  "subSearch"class = submit>
        </form>

        </nav>
        <nav class = "nav-link">
        <a href="index.php">หน้าหลัก</a>
        <a href="product.php">สินค้า</a>
            <?php if (isset($_SESSION['username'])): ?>
            <a><?php echo $_SESSION['username']; ?></a>
            <?php endif?>
           <button class = "nav-btn">=</button> 
        </nav>
        
 
        </div>
        <!-- filter price  -->
        <form action="price_db.php" method = "get" class = "price">
                <label for="min">ราคาขั้นต่ำ</label>
                <input type = "text" name = "min"class ="input">
                <label for="max">ราคาสูงสุด</label>
                <input type = "text" name = "max"class ="input">
                <input type = "submit" name =  "subPrice"class = submit>
        </form>
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
      <a class = "logout" href = "index.php?logout='1'">Logout</a>
    </div>

       <!-- ปุ่ม darkmode  -->
    <button class = "dark-btn">
        D
            </button>
    
</div>
<div class = "product-bg">
<?php for($i = 0 ; $i < count($_SESSION['id']) ; $i++) {
     echo '
<div class = product-container>
<a href="detail.php?id='.$_SESSION['id'][$i].'">
    <div class = product-img> 
    <img src ='.$_SESSION['img'][$i].' style = "width: 150px; height:200px;" alt=""></a>
</div>
    <div class = detail>
        '.$_SESSION['notebook_name'][$i].'
        <br>
        ราคา: '.$_SESSION['price'][$i].'
    </div>
</div>'
;}?>
</div>
  <script type = "text/javascript">
         const input =  document.querySelectorAll('.input');
         const navblock =  document.querySelector('.nav-block');
         const navbtn =  document.querySelector('.nav-btn');
        const darkbtn =  document.querySelector('.dark-btn');
        const nav  = document.querySelector(".nav-center")
        const aa  = document.querySelectorAll("a")
        const product = document.querySelectorAll('.product-container')
        const select = document.querySelectorAll('select')
        const submit = document.querySelectorAll('.submit')
        const price  = document.querySelector(".price");

        navbtn.addEventListener('click', function(){
            navblock.classList.toggle('nav-hover')
        })
        
        // darkmode
        darkbtn.addEventListener('click', function(){
        var element = document.body;
        price.classList.toggle("darkmode-gray");
        element.classList.toggle("darkmode-black");
        navblock.classList.toggle('darkmode-gray')
        nav.classList.toggle('darkmode-gray');
    
        for (let i = 0; i < aa.length; i++) {
    aa[i].classList.toggle('darkmode-gray');
  }
  
  for (let i = 0; i < submit.length; i++) {
    submit[i].classList.toggle('darkmode-black');
  }
  
  for (let i = 0; i < input.length; i++) {
    input[i].classList.toggle('darkmode-black');
  }
  
  for (let i = 0; i < select.length; i++) {
    select[i].classList.toggle('darkmode-black');
  }
  
  for (let i = 0; i < product.length; i++) {
    product[i].classList.toggle('darkmode-black');
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
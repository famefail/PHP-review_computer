
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

    <!-- popup -->
    <!-- <div class = popup-bg>
    <div class = popup-container> 
        <div class = popup>
             popup
             <br>
             <button type="button" class = popupbtn>x</button>
         </div>
    </div>
</div> -->
   
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

        <!-- search -->
        <form action="search_db.php" method = "get" class = "search">
                <label for="search">ค้นหาสินค้า</label>
                <input type = "text" name = "search">
                <input type = "submit" name =  "subSearch">
        </form>

    <!-- video -->
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
    <!-- ปุ่ม darkmode  -->
    <button class = "dark-btn">
        logo
            </button>
<!-- แสดงข้อมูล 3 อัน -->
     สินค้ามาใหม่ - New Release
    <div class = "new-release-container">
        
          <?php for($i = 0 ; $i < count($id) ; $i++) {
     echo '
        <form action = "index_db.php"method = "post" >
        <div value = $notebook_name[$i]> dwdwd</div>
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
    <script type = "text/javascript">
        const darkbtn =  document.querySelector('.dark-btn');
        const newre = document.querySelector('.new-release-container');
        const body = document.querySelector("body")
        const aa = document.querySelectorAll("a")
        const nav  = document.querySelector(".nav-center")
        const popupbtn = document.querySelector('.popupbtn')
        const popup = document.querySelector('.popup-bg')

        popupbtn.addEventListener('click', function(){
            popup.classList.add('hide')
        })
        darkbtn.addEventListener('click', function(){
    console.log("click")
    newre.classList.toggle('darkmode-black');
    body.classList.toggle('darkmode-black'); 
    nav.classList.toggle('darkmode-gray');
    for (let i = 0; i < aa.length; i++) {
    aa[i].classList.toggle('darkmode-gray');
  }
 
})
    </script>
</body>
</html>

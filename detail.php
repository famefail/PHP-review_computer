<?php 
    
    include('product_db.php');
 $id = @$_GET['id'];
  if(!$id){
      echo 'no id';
      exit;
  }
$query = mysqli_query($conn, "SELECT * FROM notebook WHERE notebook_id = $id");
$result = mysqli_fetch_array($query);

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
    <link rel="stylesheet" type="text/css"href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.css">
    <link type="text/css"href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css"href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="detail1.css?v=<?php echo time(); ?>">
</head>
<body>
           
    <div class = "nav-center">
        <nav class = "nav-logo">
              <!-- search -->
        <form action="search_db.php" method = "get" class = "search">
                <label for="search">ค้นหาสินค้า</label>
                <input type = "text" name = "search">
                <input type = "submit" name =  "subSearch">
        </form>
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
      
</div>


        <?php 
        
        echo '
            
        <div class  = detail-container>
        <div class = detail-img> 
        <img src ='.$result['img'].' style = "width: 250px; height:270px;float:center;" >
        </div>
        <br>
        <div class = detail>
        <h3>ชื่อสินค้า :'.$result['notebook_name'].'</h3>
        <br>
        
        <h3 >รายละเอียดสินค้า:
        <a  href= '.$result['detail'].'>a</a></h3>
        
        <br>
        <h3 >ราคา :'.$result['price'].'</h3>
        
        <br>
        <h3 >คะแนนรีวิว :
        <button class="btn">3.5k<i class="bi bi-heart" style =float:right></i><i class="fa-regular fa-alicorn"></i></button></h3>
        <h3 >คอมเมนต์ : <button class="btn"><i class="far fa-comment"></i></button></h3>
        </div>
        </div>
        


    
    
'
 ?>
 <div class= comment-container>
            <form action="send_comment.php" method="POST">   
                <input type="text" name="comment"  placeholder="คอมเมนต์" class = "comment">
                    <input type="submit" name="addcomment" value="comment" class="btn btn-info my-2">
        </form>
        </div>
 <script type="text/javascript">

 $(document).on('click',".send",function(event){
        event.preventDefault();
        var comment = $("#comment").val();
        var id=$(this).attr("id");
        
        $.ajax({
            url:"send_comment.php",
            method:"POST",
            data:{comment:comment,id:id},
            success:function(data){
                $("#comment").val("");

            }
        });

  });
</script>



</body>
</html>
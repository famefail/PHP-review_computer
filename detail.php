<?php 
    include('product_db.php');
    if(isset($_GET['id'])){
 $_SESSION['select'] = @$_GET['id'];
  if(!$id){
      echo 'no id';
      exit;
  }
}
$query = mysqli_query($conn, "SELECT * FROM notebook WHERE notebook_id = $_SESSION[select]");
$result = mysqli_fetch_array($query);

$sqlComment = "SELECT * FROM comment WHERE post_id = $_SESSION[select]";
$queryComment = mysqli_query($conn, $sqlComment);
$commentID = array();
$comment = array();
$user = array();
$date = array();
if ($queryComment->num_rows > 0) {
    while($row = $queryComment->fetch_assoc()) {
      array_push($commentID, $row['id']);
      array_push($comment, $row['comment']);
      array_push($user, $row['user_comment']);
      array_push($date, $row['data_comment']);
    }
}
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
            
        <div class  = detail-container '.$result['notebook_id'].'>
        <div class = detail-img> 
        <img src ='.$result['img'].' style = "width: 250px; height:270px;float:center;" >
        </div>
        <br>
        <div class = detail>
        <h3>ชื่อสินค้า :'.$result['notebook_name'].'</h3>
        <br>
        <h3 >ราคา :'.$result['price'].'</h3>
        <br>
        <div class = detail-flex>
        <h3 >คะแนนรีวิว :</h3>
        <button class="btn" style = display:flex;><h3>3.5k</h3><i class="bi bi-heart" ></i><i class="fa-regular fa-alicorn"></i></button>
        </div>
        <div class = detail-flex>
        <h3 >คอมเมนต์ : </h3> <button class="btn"><i class="far fa-comment"></i></button>
        </div>
        <br>  
        <a class = "detail-link" href= '.$result['detail'].'>รายละเอียดสินค้า</a>
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

        <div class = view-count>
                  Review   <?php echo count($commentID)?>
            </div>
            
        <!-- คน comment -->
        <?php for($i = 0 ; $i < count($commentID) ; $i++) {
        echo '<div class = user-container>
        <div class = user-flex>
        <div class = user>'.$user[$i].'
        </div>
        <div class = "user-date">  
        '.$date[$i].'
        </div>
        </div>
        <div class = user-comment>
            '.$comment[$i].'
        </div>
     </div>';    
    }
 ?>
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
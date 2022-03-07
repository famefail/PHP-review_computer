<?php include('product_db.php')


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="post.css">
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

    
    
</div>


<br>
<h4 style="text-indent:20px;">Notebook Name:
    <input name="notebook_name" size="20" style="height: 5%"  type="text" required></h4>
<h4 style="text-indent:20px;">Price:
    <input name="price" size="20" style="height: 5%"  type="text" required></h4>
<h4 style="text-indent:20px;">Detail:
    <input name="price" size="20" style="height: 10%"  type="text" required></h4>
    <h4 style="text-indent:20px;">Category:
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




    
<br>

<button class="myButton" type ="submit" name="submit" value="send to database"> POST </button>
     











</body>
</html>


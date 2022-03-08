<?php include('category_db.php');
    $query = "SELECT * FROM  category WHERE category_id ";
    $result = mysqli_query($conn, $query);
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

    <form action="post_db.php" method="POST">
        <br>
        <h4 style="text-indent:20px;">Notebook Name:
        <input name="notebook_name" size="20" style="height: 5%"  type="text" required></h4>

        <h4 style="text-indent:20px;">IMG:
       <input name="price" size="20" style="height: 5%"  type="text" required></h4>
    
        <h4   h4 style="text-indent:20px;">Price:
         <input name="img" size="20" style="height: 5%"  type="text" required></h4>

        <h4 style="text-indent:20px;">Detail:
        <input name="detail" size="20" style="height: 10%"  type="text" required></h4>

        <h4 style="text-indent:20px;">Category:
            <select name="category_id"  required>
              <option value="category_id"></option>
              <?php foreach($result as $results){?>
              <option value="<?php echo $results["category_id"];?>">
                <?php echo $results["category_name"]; ?>
              </option>
              <?php } ?>
            </select>
<br>
<button class="myButton" href = "product.php" type ="submit" name="submit" > POST </button>
        </form>

    






</body>
</html>


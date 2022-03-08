<?php 
    session_start();
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css?v=<?php echo time(); ?>">
    <title>Log in</title>
</head>
<body> 

    <form  action = "login_db.php" method = "post" class = "container">
        <h3>Log in</h3>
       
       <div class = form>
           <input type="text" name = "username"placeholder = "ชื่อผู้ใช้" >
       </div>
       <div class = form>
        <input type="password" name = "password"placeholder = "รหัสผ่าน">
    </div>
       <div class = "submit">
        <button type = "submit" name = "login_user" class = "submit-btn">Login</button>
        <?php if (isset($_SESSION['error'])): ?>
            <h4><?php echo $_SESSION['error']; 
             unset($_SESSION['error']);?></h4>
            <?php endif?>
        <label for="sign in"style = display:block;>ยังไม่มีบัญชี  
            <a href="signin.php"> Sign in</a>
        </label>
       </div>
    </form>
</body>
</html>
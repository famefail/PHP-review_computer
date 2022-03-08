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
        <h3 style = "text-align: center;">Log in</h3>
       
       <div class = form>
       
           <label for="username">Username : </label>
           <input type="text" name = "username" >
       </div>
       <div class = form>
        <label for="password">Password : </label>
        <input type="password" name = "password">
    </div>
       <div class = "submit">
        <button>Cancel</button>
        <button type = "submit" name = "login_user">Log in</button>
        <?php if (isset($_SESSION['error'])): ?>
            <h3><?php echo $_SESSION['error']; 
             unset($_SESSION['error']);?></h3>
            
            <?php endif?>
        <label for="sign in"style = display:block;>dont have account  
            <a href="signin.php"> Sign in</a>
        </label>
       </div>
    </form>
</body>
</html>
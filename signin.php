<?php   include('server.php')?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css?v=<?php echo time(); ?>">
    <title>Sign in</title>
</head>
<body>
    <form  action = "signin_db.php" method = "POST" class = container>
        <h3 style = "text-align: center;">Sign in</h3>
       <div class = form>
           <input type="text" name = "username"placeholder = "ชื่อผู้ใช้">
       </div>
       <div class = form>
        <input type="text" name = "email"placeholder = "อีเมล์">
    </div>
       <div class = form>
        <input type="password"name = "password_1"placeholder = "รหัสผ่าน">
    </div>
    <div class = form>
        <input type="password"name = "password_2"placeholder = "ยืนยันรหัสผ่าน">
    </div>
       <div class = "submit">
        <button type = "submit" name = "sign_user"class = submit-btn >Sign in</a></button>
       </div>
        <br>  
         <a href = "login.php" class = cancel-btn><div>Cancel</div></a>
    </form>
   
</body>
</html>
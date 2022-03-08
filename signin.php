<?php   include('server.php')?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Sign in</title>
</head>
<body>
    <form  action = "signin_db.php" method = "POST" class = container>
        <h3 style = "text-align: center;">Sign in</h3>
       <div class = form>
           <label for="username">Username : </label>
           <input type="text" name = "username">
       </div>
       <div class = form>
        <label for="email">email : </label>
        <input type="text" name = "email">
    </div>
       <div class = form>
        <label for="password_1">Password : </label>
        <input type="password"name = "password_1">
    </div>
    <div class = form>
        <label for="password_2">Confirm Password : </label>
        <input type="password"name = "password_2">
    </div>
       <div class = "submit">
        <button>Cancel</button>
        <button type = "submit" name = "sign_user" >Sign in</a></button>
       </div>
    </form>
</body>
</html>
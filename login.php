<!doctype html>
<html lang="{{ str_replace('_','_',app()->getLocale()) }}">
    <head>
      <?php
         include ('connection.php');
      ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LOG IN</title>
        <!-- link -->
        <link rel="stylesheet" type="text/css" href="css/login.css">
    </head>
    <body>
        <div class="login-form">
          <img src="css/images/logo_web.png">
          <h1>Login Form</h1>
          <form action="index.php">
            <input type="text" name="UserName" placeholder="UserName" required="Write your name">
            <input type="password" name="password" placeholder="password" required="Write your password">
            <button type="submit">Login</button>
            <span>Admin login <a href="admin/login_admin.php">Click Here</a></span>
          </form>
        </div>
    </body>
</html>  
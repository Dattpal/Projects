<!DOCTYPE html>
<html  lang="{{ str_replace('_','_',app()->getLocale()) }}">
 <head>
	 <?php
         include ('connection.php');
      ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>REGISTER</title>
	 <!-- link -->
        <link rel="stylesheet" type="text/css" href="css/register.css">
 </head>
   <body>
      <div class="register">
      	<img src="css/images/logo_web.png">
      	<h1>Registration Form</h1>
      	<form action="login.php">
      		<input type="text" placeholder="full name" required="Write your name">
      		<input type="text" placeholder="User name" required="Write your user name">
      		<input type="mail" placeholder="Email address" required="Write your email">
      		<input type="password" placeholder="Password" required="Write your password">
      		<button type="submit">Registration</button>
      	</form>
      </div>
   </body>
</html>
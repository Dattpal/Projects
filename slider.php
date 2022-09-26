<!doctype html>
<html lang="{{ str_replace('_','_',app()->getLocale()) }}">
    <head>
      <?php
         include ('connection.php');
      ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>slider</title>
         

        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" type="text/css";>
        <!-- Styles -->
        <link rel="stylesheet" href="css/header.css">
       <style>
           #slider{
               overflow:visible;
           }
           #slider figure{
            position:relative;
            width:500%;
            margin:0;
            left:0;
            animation:20s slider infinite;
           }
           #slider figure img{
               float:left;
               width:20%;
           }
           @keyframes slider{
               0% {
                   left:0;
               }
               20%{
                   left:0;
               }
               25%{
                   left:-100%;
               }
               45%{
                   left:-100;
               }
               50%{
                   left:-200%;
               }
               70%{
                   left:-200%;
               }
               75%{
                   left:-300%;
               }
               95%{
                   left:-300%;
               }
               100%{
                   left:-400%;
               }
           }

       </style>
       
    </head>
    <body>
    
        <div id="slider">
            <figure>
                <img src="css/images/slider1.jpeg">
                <img src="css/images/slider2.jpeg">
                <img src="css/images/slider3.jpeg">
                <img src="css/images/slider4.jpeg">
                <img src="css/images/slider3.jpeg">
            </figure>
        </div>
</body>
<html>
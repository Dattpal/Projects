<!doctype html>
<html lang="{{ str_replace('_','_',app()->getLocale()) }}">
    <head>



      <?php
         include ('connection.php');
      ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>PAYMENT </title>
         

        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" type="text/css";>
        <!-- Styles -->
        <link rel="stylesheet" href="css/payment.css">
        
       



       
    </head>
    <body>
    <form  method='post' action ='payment_done.php'>
    <div class="main-container">
       <h1>Confirm Your Payment</h1>
       <div class="first-row">
          <div class="owner">
              <h3>Owner</h3>
              <div class="input-field">
                 <input type="text">
              </div>
          </div>
          <div class="CVV">
              <h3>CVV</h3>
              <div class="input-field">
                 <input type="password">
              </div>
          </div>
       </div>
       <div class="second-row">
          <div class="card-number">
              <h3>Card Number</h3>
              <div class="input-field">
                 <input type="text">
              </div>
          </div>
       </div>
       <div class="third-row">
            <h3>Expiration number</h3>
            <div class="selection">
                <div class="date">
                   <select name="months" id="months">
                       <option value="jan">Jan</option>
                       <option value="Feb">Feb</option>  
                       <option value="Mar">Mar</option>  
                       <option value="Apr">Apr</option>  
                       <option value="May">May</option>  
                       <option value="Jun">Jun</option>  
                       <option value="Jul">Jul</option>  
                       <option value="Aug">Aug</option>  
                       <option value="Sep">Sep</option>  
                       <option value="Oct">Oct</option>  
                       <option value="Nov">Nov</option>  
                       <option value="Dec">Dec</option>  
                   </select>
                   <select name="years" id="years">
                       <option value="2020">2020</option>
                       <option value="2019">2019</option>  
                       <option value="2018">2018</option>  
                       <option value="2017">2017</option>  
                       <option value="2016">2016</option>  
                       <option value="2015">2015</option>   
                   </select>
                </div>
                <div class="cards">
                    <img src="css/images/master-card.png" alt="mastercard">
                    <img src="css/images/visa-card.png" alt="visacard">
                    <img src="css/images/paypal.jpg" alt="pp">
                </div>
            </div>
       </div>
       <a href='payment_done.php'>Confirm </a>
    </div>
    </form>
   

    </body>
</html>
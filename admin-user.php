<!doctype html>
<html lang="{{ str_replace('_','_',app()->getLocale()) }}">
    <head>
      <?php
         include ('connection.php');
      ?>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">

        <title>ABOUT</title>
         <!-- bootstrap 4 -->
         <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
         <!-- Fonts -->
         <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
         <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" type="text/css";>
          <!-- style -->
          <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
          <link rel="stylesheet" href="css/admin-style1.css">
          
    </head>  
    <body>

    <input type="checkbox" name=" " id="sidebar-toggle">
        <div class="sidebar">
           <div class="sidebar-brand">
               <div class="brand-flex">
                   <img src="css/images/logo_web.png" width="150px" alt="logo1">
                    <div class="brand-icons">
                        <span class="las la-bell"></span>
                        <span class="las la-user-circle"></span>
                    </div>
               </div>
           </div>
           <div class="sidebar-main">
               <div class="sidebar-user">
                  <img src="css/images/img_9491.jpeg" width="20%"  height="10%" alt="">
                  <div>
                     <h3>Dattpal vashi</h3>
                     <span>vashidattpal@gmail.com</span>
                  </div>
               </div>
               <div class="sidebar-menu">
                   <div class="menu-head">
                       <span>Dashbord</span>  
                   </div>
                   <ul>
                       <li>
                          <a href="admin/bookinglist.php">
                             <span  class="las la-plus-square"></span>
                             Booking List
                          </a>
                       </li>
                       <li>
                          <a href="admin/indexbill.php">
                             <span  class="las la-wallet"></span>
                             Billing
                          </a>
                       </li>
                       <li>
                          <a href="admin/newvehicle.php">
                             <span class="lab la-servicestack"></span>
                             Add new service
                          </a>
                       </li>
                       
                       <li>
                          <a href="admin/newdriver.php">
                             <span class="las la-user-alt"></span>
                             Add new driver
                          </a>
                       </li>
                       
                       <li>
                          <a href="admin/trip_details.php">
                             <span class="las la-info-circle"></span>
                             Service details
                          </a>
                       </li>
                       
                   </ul>
               </div>
           </div>
        </div>
        
        <div class="main-content">
           <header>
              <div class="menu-toggle">
                 <label for="sidebar-toggle">
                    <span class="las la-bars"></span>
                 </label>
              </div>
               <div class="header-icons ">
                   <span class="las la-search"></span>
                   <span class="las la-bookmark"></span>
                   <span class="las la-sms"></span>
               </div>
           </header>
           <main>
              <div class="page-header">
                  <div>
                   <h1>Analytics dashbord</h1>
                   <small>Moniter key metrics...Check reporting and review insights</small>
                  </div>
                  <div class="header-actions">
                      <button><a href="admin/logout.php">
                          <span class="las la-file-export"></span>
                          Log out
                      </button></a>
                      <button><a href="index.php">
                          <span class="las la-tools"></span>
                          Visit site
                      </button></a>
                  </div>
              </div>
              <div class="card">
                 <div class="card-single">
                    <div class="card-flex">
                       <div class="card-info">
                           <div class="card-head">
                              <span>purchases</span>
                              <small>Number of purchases</small>
                           </div>
                           <h2>203</h2>
                           <small>2% less purchases</small>
                       </div>
                       <div class="card-chart success">
                          <span class="las la-chart-line"></span>
                       </div>
                    </div>
                 </div>
                 <div class="card-single">
                    <div class="card-flex">
                       <div class="card-info">
                           <div class="card-head">
                              <span>orders</span>
                              <small>Number of orders</small>
                           </div>
                           <h2>61</h2>
                           <small>5% less orders</small>
                       </div>
                       <div class="card-chart danger">
                          <span class="las la-chart-line"></span>
                       </div>
                    </div>
                 </div>
                 <div class="card-single">
                    <div class="card-flex">
                       <div class="card-info">
                           <div class="card-head">
                              <span>Unique visitors</span>
                              <small>Number of visitors</small>
                           </div>
                           <h2>200</h2>
                           <small>2% less visitors</small>
                       </div>
                       <div class="card-chart yellow">
                          <span class="las la-chart-line"></span>
                       </div>
                    </div>
                 </div>
              </div>
              <br><br><br>

              <div class="card">
                 <div class="card-single">
                    <div class="card-flex">
                       <div class="card-info">
                           <div class="card-head">
                              <span>Workers</span>
                              <small>Number of workers</small>
                           </div>
                           <h2>35</h2>
                           <small>3% less workers</small>
                       </div>
                       <div class="card-chart success">
                          <span class="las la-chart-line"></span>
                       </div>
                    </div>
                 </div>
                 <div class="card-single">
                    <div class="card-flex">
                       <div class="card-info">
                           <div class="card-head">
                              <span>drivers</span>
                              <small>Number of drivers</small>
                           </div>
                           <h2>12</h2>
                           <small>5% less driver</small>
                       </div>
                       <div class="card-chart danger">
                          <span class="las la-chart-line"></span>
                       </div>
                    </div>
                 </div>
                 <div class="card-single">
                    <div class="card-flex">
                       <div class="card-info">
                           <div class="card-head">
                              <span>employee</span>
                              <small>Number of employee</small>
                           </div>
                           <h2>20</h2>
                           <small>2% less employee</small>
                       </div>
                       <div class="card-chart yellow">
                          <span class="las la-chart-line"></span>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="job-grid">
                 <div class="analytics-card">
                     <div class="analytics-head">
                        <h3>Action needed</h3>

                        <span class="las la-ellipsis-h"></span>
                     </div>
                     <div class="analytics-chart">
                        <div class="chart-circle">
                           <h1>75%</h1>
                        </div>
                        <div class="analytics-note">
                           <small></small>
                        </div>
                     </div>
                     <div class="analytics-btn">
                        <button>Generate report</button>
                     </div>
                 </div>
                 
              </div>
           </main>
        </div>
    </body> 
</html>
<?php
	include('config.php');
	  if (strlen($_SESSION['user_id']==0)) {
		header('location:logout.php');
		} else{
?>
<!DOCTYPE html>
<html lang="en" style="height: 100%;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <title>  Crypto Minning   || User Dashboard || Customer Care </title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="https://cryptominning.ltd/customer/icon52.png">
    <!-- Retina iPad Touch Icon-->
       <!-- Styles -->
    <link href="Crypto Minning __ User Dashboard __ Home_files/chartist.min.css" rel="stylesheet">
    <link href="Crypto Minning __ User Dashboard __ Home_files/font-awesome.min.css" rel="stylesheet">
    <link href="Crypto Minning __ User Dashboard __ Home_files/themify-icons.css" rel="stylesheet">
    <link href="Crypto Minning __ User Dashboard __ Home_files/owl.carousel.min.css" rel="stylesheet">
    <link href="Crypto Minning __ User Dashboard __ Home_files/owl.theme.default.min.css" rel="stylesheet">
    <link href="Crypto Minning __ User Dashboard __ Home_files/weather-icons.css" rel="stylesheet">
    <link href="Crypto Minning __ User Dashboard __ Home_files/sidebar.css" rel="stylesheet">
    <link href="Crypto Minning __ User Dashboard __ Home_files/bootstrap.min.css" rel="stylesheet">
    <link href="Crypto Minning __ User Dashboard __ Home_files/unix.css" rel="stylesheet">
    <link href="Crypto Minning __ User Dashboard __ Home_files/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://cryptominning.ltd/favicon.png">
    <style type="text/css">
        .hidden{
            display: none;
        }
    </style>
<link type="text/css" rel="stylesheet" charset="UTF-8" href="Crypto Minning __ User Dashboard __ Home_files/translateelement.css"><script async="" src="Crypto Minning __ User Dashboard __ Home_files/default" charset="UTF-8" crossorigin="*"></script><script type="text/javascript" charset="UTF-8" src="Crypto Minning __ User Dashboard __ Home_files/main.js"></script><script type="text/javascript" charset="UTF-8" src="Crypto Minning __ User Dashboard __ Home_files/element_main.js"></script></head>

<body class="pace-running" style="position: relative; min-height: 100%; top: 0px;"><div class="pace pace-active"><div class="pace-progress" data-progress-text="99%" data-progress="99" style="transform: translate3d(99.4031%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>

        <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano has-scrollbar">
            <div class="nano-content" tabindex="0" style="right: -17px;">
                <ul>
                    <!-- <li class="label">
                    <img src="Mistrimama-logo-final.jpg" class="img-rounded" style="width: 200px; height: 200px;" /> 
                    </li> -->
                    <li style="height: 25px;">  </li>
                    <li>
                        <a href="dashboard.php" class="sidebar-sub-toggle">
                         <i class="ti-home"></i> Dashboard 
                         <span class="sidebar-collapse-icon ti-angle-down">
                         </span>
                        </a>
                        <ul>
                            <li><a href="dashboard.php">Dashboard </a></li>
                        </ul>
                    </li>
                  
                    <li><a class="sidebar-sub-toggle"><i class="ti-clipboard"></i>Invest<span class="sidebar-collapse-icon ti-angle-down"></span></a>
                       <ul>
                        <li><a href="investment.php">Start Investing</a></li>
                        <li><a href="investment_log.php"> Investment Log</a></li>
                       </ul>
                    </li>

                     <li><a class="sidebar-sub-toggle"><i class="ti-wallet"></i>Deposit <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                       <ul>
                        <li><a href="deposit.php"> Deposit Now</a></li>
                        <li><a href="deposit_log.php">Deposit Log</a></li>
                       </ul>
                    </li>

                     <li><a class="sidebar-sub-toggle"><i class="ti-money"></i> Withdrawal <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li> <a href="withdrawal.php"> Withdraw Now </a></li>
                            <li> <a href="withdrawal_log.php"> Withdraw Log </a></li>
                      </ul>
                    </li>
                    
                    <li><a class="sidebar-sub-toggle"><i class="ti-user"></i> My account <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="profile.php">Profile</a></li>
                            <li><a href="support.php">Customer care</a></li>
                            <!-- <li><a href="logout.php">Logout </a></li> -->
                        </ul>
                    </li>
                   
                    <li><a class="sidebar-sub-toggle"><i class="ti-close"></i> Log out <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li> <a href="logout.php"> Logout </a></li>
                      </ul>
                    </li>  
                   <!--  <li class="label">Settings</li>
                    <li><a class="sidebar-sub-toggle"><i class="ti-settings"></i> settings <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <li><a href="#">Referral</a></li>
                            <li><a href="promotion.php">Promotion</a></li>
                            <li><a href="#">Notification</a></li>
                        </ul>
                    </li>
 -->

                </ul>
            </div>
        <div class="nano-pane" style="display: none;"><div class="nano-slider" style="height: 490px; transform: translate(0px, 0px);"></div></div></div>
    </div>
    <!-- /# sidebar -->

    <div class="header">
        <div class="pull-left">
            <div class="logo"><a href="dashboard.php">
                <img src="Crypto Minning __ User Dashboard __ Home_files/logo1.png" style="width: 200px; height: 50px;" alt="  Crypto MInning ">
                <!-- <span>Topspin</span></a> -->
            </a></div><a href="dashboard.php">
            <!-- <div class="hamburger sidebar-toggle">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div> -->
        </a></div><a href="dashboard.php">
        </a><div class="pull-right p-r-15"><a href="dashboard.php">
            </a><ul><a href="dashboard.php">
                </a><li class="header-icon dib"><a href="dashboard.php">
                       </a><a href="dashboard.php">
                         <i class="ti-home"></i>
                       </a>
                </li>       
                <li class="header-icon dib">
                    <i class="ti-clipboard"></i>
                    <div class="drop-down">
                        <div class="dropdown-content-body">
                            <ul>
                                <li class="notification-unread">
                                    <a href="investment.php">     
                                     <div class="notification-text">
                                         Start investing    
                                     </div>                             
                                    </a>
                                </li>
                                <li class="notification-unread">
                                    <a href="investment_log.php">     
                                     <div class="notification-text">
                                         Investment Log    
                                     </div>                             
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="header-icon dib">
                    <i class="ti-wallet"></i>
                    <div class="drop-down">
                        <div class="dropdown-content-body">
                            <ul>
                                <li class="notification-unread">
                                    <a href="deposit.php">     
                                     <div class="notification-text">
                                         Deposit Now    
                                     </div>                             
                                    </a>
                                </li>
                                <li class="notification-unread">
                                    <a href="deposit_log.php">     
                                     <div class="notification-text">
                                         Deposit Log   
                                     </div>                             
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
          
                <li class="header-icon dib">
                    <i class="ti-user"></i>
                    <div class="drop-down">
                        <div class="dropdown-content-body">
                            <ul>
                                <li class="notification-unread">
                                    <a href="profile.php">     
                                     <div class="notification-text">
                                         Profile   
                                     </div>                             
                                    </a>
                                </li>
                                <li class="notification-unread">
                                    <a href="support.php">     
                                     <div class="notification-text">
                                        Customer Care 
                                     </div>                             
                                    </a>
                                </li>
                                <li class="notification-unread">
                                    <a href="logout.php">     
                                     <div class="notification-text">
                                        log Out
                                     </div>                             
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <!-- <li class="header-icon dib">
                    <i class="ti-world"></i>
                    <div class="drop-down">
                        <div class="dropdown-content-body">
                            <ul>
                                <li id="google_translate_element">
                                </li>
                            </ul>
                        </div>
                    </div>
                </li> -->
                                 <li class="header-icon dib">
                    <img src="Crypto Minning __ User Dashboard __ Home_files/nature.jpg" class="img-rounded" width="50" height="50">
                </li>
            </ul>
        </div>
    </div>

    <script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="Crypto Minning __ User Dashboard __ Home_files/f.txt"></script>

    <p style="height: 40px;"></p>
   
    <div id="goog-gt-tt" class="skiptranslate" dir="ltr"><div style="padding: 8px;"><div><div class="logo"><img src="Crypto Minning __ User Dashboard __ Home_files/translate_24dp.png" width="20" height="20" alt="Google Translate"></div></div></div><div class="top" style="padding: 8px; float: left; width: 100%;"><h1 class="title gray">Original text</h1></div><div class="middle" style="padding: 8px;"><div class="original-text"></div></div><div class="bottom" style="padding: 8px;"><div class="activity-links"><span class="activity-link">Contribute a better translation</span><span class="activity-link"></span></div><div class="started-activity-container"><hr style="color: #CCC; background-color: #CCC; height: 1px; border: none;"><div class="activity-root"></div></div></div><div class="status-message" style="display: none;"></div></div><div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <?php
											
											$account_id = "SELECT username FROM users WHERE id = '".$_SESSION['user_id']."'";
											$accountid = $conn->query($account_id);
											if ($accountid->num_rows > 0) {
												while ($row = $accountid->fetch_assoc()){
													echo "
													<h1>Hello, <span>Welcome ".$row['username']."</span></h1>
													";
												}
											}
											?>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="support.php#">Dashboard</a></li>
                                    <li class="active"> customer care </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->

                 <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com" rel="noopener" target="_blank"><span class="blue-text"></span></a></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "Nasdaq 100"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR/USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "BTC/USD"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "ETH/USD"
    }
  ],
  "colorTheme": "light",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "en"
}
  </script>
</div>
                    <!-- TradingView Widget END -->
                   
                <div class="card" style="background-image: url(bb.jpg);background-size: cover; padding: 140px 0 70px;text-align: center;color: #fff;font-size:21px;position: relative;">
						<?php
											
											$accounts_id = "SELECT username FROM users WHERE id = '".$_SESSION['user_id']."'";
											$accountsid = $conn->query($accounts_id);
											if ($accountsid->num_rows > 0) {
												while ($row = $accountsid->fetch_assoc()){
													echo "
													Dear,".$row['username']."Welcome to your dashboard all activities on your account will be shown here. Your registration bonus will be activate on your first deposit. Invest wisely.</h1>
													";
												}
											}
											?>
				</div>

                <div id="main-content">
                  
                    <div class="row">
                        <h3 class="text-left" style="padding-left: 14px;"> Customer care</h3>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="card">
                                <p>
                                    Welcome to customer care center if you have any querys please fill the form below to connect to customer care department.
                                </p>
                                <form method="GET" id="profile1">
                                        <div class="form-group">
                                            <label for="name">NAME:</label>
                                            <input type="text" name="name" class="form-control input-flat" value="" id="name" required="yes">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">EMAIL:</label>
                                            <input type="text" name="email" class="form-control input-flat" value="" id="email" required="yes">
                                        </div>
                                        <div class="form-group">
                                            <label for="message">MESSAGES:</label>
                                            <textarea class="form-control input-flat" id="mess" rows="10"> </textarea>
                                        </div>
                                        <div class="form-group" id="lo">
                                            <button type="submit" id="sun" class="btn btn-info btn-rounded btn-outline" name="submit"> Send Query </button>
                                        </div>
                                </form> 
                            </div>
                                 
                        </div>

                    </div>


                    <div class="footerwrap">

<div class="row">
    <div class="col-lg-12">
       <div class="footer">
           <p>  Crypto Minning ©  2020</span></p>
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>


     
    <script src="Crypto Minning __ User Dashboard __ Home_files/jquery.min.js"></script>
    <!-- jquery vendor -->
    <script src="Crypto Minning __ User Dashboard __ Home_files/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="Crypto Minning __ User Dashboard __ Home_files/sidebar.js"></script>
    <script src="Crypto Minning __ User Dashboard __ Home_files/pace.min.js"></script>
    <!-- sidebar -->
    <script src="Crypto Minning __ User Dashboard __ Home_files/bootstrap.min.js"></script>
    <!-- bootstrap -->
    
    <script src="Crypto Minning __ User Dashboard __ Home_files/scripts.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
           $('#profile1').submit(function(e){
                e.preventDefault(); 
                var em = $("#email").val();
                var na = $("#name").val();
                var mess = $("#mess").val();
                // $("#sun").html('<img src="../loader.gif" width="50" heigth="50" />');
                $.get("support.php?em="+em+"&na="+na+"&mess="+mess, function(data){
                     if (data == "good") {
                        $("#lo").html('<div class="alert alert-info"> Support query has been added successfully </div>');
                     }else{
                      
                     }
                 //  alert(data);    
                });
           });
        });      
    </script>




</div><div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div></body></html>
<?php
}
?>
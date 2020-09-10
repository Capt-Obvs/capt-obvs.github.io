<?php
	include('config.php');
	  if (strlen($_SESSION['user_id']==0)) {
		header('location:logout.php');
		} else{

if (isset($_POST['img'])){
$target_dir = "Crypto Minning __ User Dashboard __ Home_files/images/";
			$target_file = $target_dir . basename($_FILES["picture"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			
			$check = getimagesize($_FILES["picture"]["tmp_name"]);
			if($check !== false){
				$uploadOk = 1;
			}else{
				$uploadOk = 0;
			}
			if(file_exists($target_file)){
				echo "Sorry, the client picture already exists";
				$uploadOk = 0;
			}
			if($_FILES["picture"]["size"] > 100000) {
				echo "Sorry, the client picture is over 50MB.";
				$uploadOk = 0;
			}
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "bmp"){
				echo "Sorry, only JPG, JPEG, PNG & BMP image formats are allowed for the clients images";
				$uploadOk = 0;
			}
			if($uploadOk ==0){
				echo "Sorry, the client image was not uploaded. Contact the Administrator";
			}else{
				if(move_uploaded_file($_FILES["picture"]["tmp_name"], $target_file)){
					$create = "INSERT INTO users (profile_picture) VALUES ('".$target_file."') WHERE id='".$_SESSION['user_id']."' ";
					if($conn->query($create) === TRUE) {
						
						echo "The client image and details have been uploaded.";
						echo "<script>window.location.href='profile.php'</script>";
						
					}else{
						echo "Error: " .$create. "<br>" . $conn->error;
					}	
				}else{
					echo "Sorry there was an error while uploading image";
				}
				}	
}	

if(isset($_POST['submit_password'])){
	$password = $_POST['password'];
	
	$update = mysqli_query($conn, "UPDATE users SET password = '".$password."' WHERE id = '".$_SESSION['user_id']."' ");
	echo "<script>alert('Password Changed!.');</script>"; 
}

if(isset($_POST['submit_profile'])){
	$name = $_POST['name'];
	$phone = $_POST['ph'];
	$email = $_POST['em'];
	$btc = $_POST['btc'];
	$pfm = $_POST['pfm'];
	$ether = $_POST['ether'];
	$lite = $_POST['lite'];
	
	$update_create = "INSERT INTO users (full_name, phone, email, btc_address, perfect_money, ethereum, btc_cash) 
	VALUES ('".$name."', '".$phone."', '".$email."', '".$btc."', '".$pfm."', '".$ether."', '".$lite."') WHERE id='".$_SESSION['user_id']."' ";
					if($conn->query($update_create) === TRUE) {
						
						echo "Profile Updated Successfully.";
						echo "<script>window.location.href='profile.php'</script>";
						
					}else{
						echo "Error: " .$update_create. "<br>" . $conn->error;
					}	
}
?>
<!DOCTYPE html>
<html lang="en" style="height: 100%;"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style type="text/css">.swal-icon--error{border-color:#f27474;-webkit-animation:animateErrorIcon .5s;animation:animateErrorIcon .5s}.swal-icon--error__x-mark{position:relative;display:block;-webkit-animation:animateXMark .5s;animation:animateXMark .5s}.swal-icon--error__line{position:absolute;height:5px;width:47px;background-color:#f27474;display:block;top:37px;border-radius:2px}.swal-icon--error__line--left{-webkit-transform:rotate(45deg);transform:rotate(45deg);left:17px}.swal-icon--error__line--right{-webkit-transform:rotate(-45deg);transform:rotate(-45deg);right:16px}@-webkit-keyframes animateErrorIcon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}to{-webkit-transform:rotateX(0deg);transform:rotateX(0deg);opacity:1}}@keyframes animateErrorIcon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}to{-webkit-transform:rotateX(0deg);transform:rotateX(0deg);opacity:1}}@-webkit-keyframes animateXMark{0%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}50%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}80%{-webkit-transform:scale(1.15);transform:scale(1.15);margin-top:-6px}to{-webkit-transform:scale(1);transform:scale(1);margin-top:0;opacity:1}}@keyframes animateXMark{0%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}50%{-webkit-transform:scale(.4);transform:scale(.4);margin-top:26px;opacity:0}80%{-webkit-transform:scale(1.15);transform:scale(1.15);margin-top:-6px}to{-webkit-transform:scale(1);transform:scale(1);margin-top:0;opacity:1}}.swal-icon--warning{border-color:#f8bb86;-webkit-animation:pulseWarning .75s infinite alternate;animation:pulseWarning .75s infinite alternate}.swal-icon--warning__body{width:5px;height:47px;top:10px;border-radius:2px;margin-left:-2px}.swal-icon--warning__body,.swal-icon--warning__dot{position:absolute;left:50%;background-color:#f8bb86}.swal-icon--warning__dot{width:7px;height:7px;border-radius:50%;margin-left:-4px;bottom:-11px}@-webkit-keyframes pulseWarning{0%{border-color:#f8d486}to{border-color:#f8bb86}}@keyframes pulseWarning{0%{border-color:#f8d486}to{border-color:#f8bb86}}.swal-icon--success{border-color:#a5dc86}.swal-icon--success:after,.swal-icon--success:before{content:"";border-radius:50%;position:absolute;width:60px;height:120px;background:#fff;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.swal-icon--success:before{border-radius:120px 0 0 120px;top:-7px;left:-33px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:60px 60px;transform-origin:60px 60px}.swal-icon--success:after{border-radius:0 120px 120px 0;top:-11px;left:30px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:0 60px;transform-origin:0 60px;-webkit-animation:rotatePlaceholder 4.25s ease-in;animation:rotatePlaceholder 4.25s ease-in}.swal-icon--success__ring{width:80px;height:80px;border:4px solid hsla(98,55%,69%,.2);border-radius:50%;box-sizing:content-box;position:absolute;left:-4px;top:-4px;z-index:2}.swal-icon--success__hide-corners{width:5px;height:90px;background-color:#fff;padding:1px;position:absolute;left:28px;top:8px;z-index:1;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.swal-icon--success__line{height:5px;background-color:#a5dc86;display:block;border-radius:2px;position:absolute;z-index:2}.swal-icon--success__line--tip{width:25px;left:14px;top:46px;-webkit-transform:rotate(45deg);transform:rotate(45deg);-webkit-animation:animateSuccessTip .75s;animation:animateSuccessTip .75s}.swal-icon--success__line--long{width:47px;right:8px;top:38px;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-animation:animateSuccessLong .75s;animation:animateSuccessLong .75s}@-webkit-keyframes rotatePlaceholder{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}to{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@keyframes rotatePlaceholder{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}to{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@-webkit-keyframes animateSuccessTip{0%{width:0;left:1px;top:19px}54%{width:0;left:1px;top:19px}70%{width:50px;left:-8px;top:37px}84%{width:17px;left:21px;top:48px}to{width:25px;left:14px;top:45px}}@keyframes animateSuccessTip{0%{width:0;left:1px;top:19px}54%{width:0;left:1px;top:19px}70%{width:50px;left:-8px;top:37px}84%{width:17px;left:21px;top:48px}to{width:25px;left:14px;top:45px}}@-webkit-keyframes animateSuccessLong{0%{width:0;right:46px;top:54px}65%{width:0;right:46px;top:54px}84%{width:55px;right:0;top:35px}to{width:47px;right:8px;top:38px}}@keyframes animateSuccessLong{0%{width:0;right:46px;top:54px}65%{width:0;right:46px;top:54px}84%{width:55px;right:0;top:35px}to{width:47px;right:8px;top:38px}}.swal-icon--info{border-color:#c9dae1}.swal-icon--info:before{width:5px;height:29px;bottom:17px;border-radius:2px;margin-left:-2px}.swal-icon--info:after,.swal-icon--info:before{content:"";position:absolute;left:50%;background-color:#c9dae1}.swal-icon--info:after{width:7px;height:7px;border-radius:50%;margin-left:-3px;top:19px}.swal-icon{width:80px;height:80px;border-width:4px;border-style:solid;border-radius:50%;padding:0;position:relative;box-sizing:content-box;margin:20px auto}.swal-icon:first-child{margin-top:32px}.swal-icon--custom{width:auto;height:auto;max-width:100%;border:none;border-radius:0}.swal-icon img{max-width:100%;max-height:100%}.swal-title{color:rgba(0,0,0,.65);font-weight:600;text-transform:none;position:relative;display:block;padding:13px 16px;font-size:27px;line-height:normal;text-align:center;margin-bottom:0}.swal-title:first-child{margin-top:26px}.swal-title:not(:first-child){padding-bottom:0}.swal-title:not(:last-child){margin-bottom:13px}.swal-text{font-size:16px;position:relative;float:none;line-height:normal;vertical-align:top;text-align:left;display:inline-block;margin:0;padding:0 10px;font-weight:400;color:rgba(0,0,0,.64);max-width:calc(100% - 20px);overflow-wrap:break-word;box-sizing:border-box}.swal-text:first-child{margin-top:45px}.swal-text:last-child{margin-bottom:45px}.swal-footer{text-align:right;padding-top:13px;margin-top:13px;padding:13px 16px;border-radius:inherit;border-top-left-radius:0;border-top-right-radius:0}.swal-button-container{margin:5px;display:inline-block;position:relative}.swal-button{background-color:#7cd1f9;color:#fff;border:none;box-shadow:none;border-radius:5px;font-weight:600;font-size:14px;padding:10px 24px;margin:0;cursor:pointer}.swal-button:not([disabled]):hover{background-color:#78cbf2}.swal-button:active{background-color:#70bce0}.swal-button:focus{outline:none;box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(43,114,165,.29)}.swal-button[disabled]{opacity:.5;cursor:default}.swal-button::-moz-focus-inner{border:0}.swal-button--cancel{color:#555;background-color:#efefef}.swal-button--cancel:not([disabled]):hover{background-color:#e8e8e8}.swal-button--cancel:active{background-color:#d7d7d7}.swal-button--cancel:focus{box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(116,136,150,.29)}.swal-button--danger{background-color:#e64942}.swal-button--danger:not([disabled]):hover{background-color:#df4740}.swal-button--danger:active{background-color:#cf423b}.swal-button--danger:focus{box-shadow:0 0 0 1px #fff,0 0 0 3px rgba(165,43,43,.29)}.swal-content{padding:0 20px;margin-top:20px;font-size:medium}.swal-content:last-child{margin-bottom:20px}.swal-content__input,.swal-content__textarea{-webkit-appearance:none;background-color:#fff;border:none;font-size:14px;display:block;box-sizing:border-box;width:100%;border:1px solid rgba(0,0,0,.14);padding:10px 13px;border-radius:2px;transition:border-color .2s}.swal-content__input:focus,.swal-content__textarea:focus{outline:none;border-color:#6db8ff}.swal-content__textarea{resize:vertical}.swal-button--loading{color:transparent}.swal-button--loading~.swal-button__loader{opacity:1}.swal-button__loader{position:absolute;height:auto;width:43px;z-index:2;left:50%;top:50%;-webkit-transform:translateX(-50%) translateY(-50%);transform:translateX(-50%) translateY(-50%);text-align:center;pointer-events:none;opacity:0}.swal-button__loader div{display:inline-block;float:none;vertical-align:baseline;width:9px;height:9px;padding:0;border:none;margin:2px;opacity:.4;border-radius:7px;background-color:hsla(0,0%,100%,.9);transition:background .2s;-webkit-animation:swal-loading-anim 1s infinite;animation:swal-loading-anim 1s infinite}.swal-button__loader div:nth-child(3n+2){-webkit-animation-delay:.15s;animation-delay:.15s}.swal-button__loader div:nth-child(3n+3){-webkit-animation-delay:.3s;animation-delay:.3s}@-webkit-keyframes swal-loading-anim{0%{opacity:.4}20%{opacity:.4}50%{opacity:1}to{opacity:.4}}@keyframes swal-loading-anim{0%{opacity:.4}20%{opacity:.4}50%{opacity:1}to{opacity:.4}}.swal-overlay{position:fixed;top:0;bottom:0;left:0;right:0;text-align:center;font-size:0;overflow-y:auto;background-color:rgba(0,0,0,.4);z-index:10000;pointer-events:none;opacity:0;transition:opacity .3s}.swal-overlay:before{content:" ";display:inline-block;vertical-align:middle;height:100%}.swal-overlay--show-modal{opacity:1;pointer-events:auto}.swal-overlay--show-modal .swal-modal{opacity:1;pointer-events:auto;box-sizing:border-box;-webkit-animation:showSweetAlert .3s;animation:showSweetAlert .3s;will-change:transform}.swal-modal{width:478px;opacity:0;pointer-events:none;background-color:#fff;text-align:center;border-radius:5px;position:static;margin:20px auto;display:inline-block;vertical-align:middle;-webkit-transform:scale(1);transform:scale(1);-webkit-transform-origin:50% 50%;transform-origin:50% 50%;z-index:10001;transition:opacity .2s,-webkit-transform .3s;transition:transform .3s,opacity .2s;transition:transform .3s,opacity .2s,-webkit-transform .3s}@media (max-width:500px){.swal-modal{width:calc(100% - 20px)}}@-webkit-keyframes showSweetAlert{0%{-webkit-transform:scale(1);transform:scale(1)}1%{-webkit-transform:scale(.5);transform:scale(.5)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}to{-webkit-transform:scale(1);transform:scale(1)}}@keyframes showSweetAlert{0%{-webkit-transform:scale(1);transform:scale(1)}1%{-webkit-transform:scale(.5);transform:scale(.5)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}to{-webkit-transform:scale(1);transform:scale(1)}}</style>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <title>  Crypto Minning   || User Dashboard || Profile </title>
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
    <script async="" src="Crypto Minning __ User Dashboard __ Home_files/default" charset="UTF-8" crossorigin="*"></script><script src="Crypto Minning __ User Dashboard __ Home_files/sweetalert.min.js"></script>
    <style type="text/css">
        .hidden{
            display: none;
        }
    </style>
<link type="text/css" rel="stylesheet" charset="UTF-8" href="Crypto Minning __ User Dashboard __ Home_files/translateelement.css"><script type="text/javascript" charset="UTF-8" src="Crypto Minning __ User Dashboard __ Home_files/main.js"></script><script type="text/javascript" charset="UTF-8" src="Crypto Minning __ User Dashboard __ Home_files/element_main.js"></script></head>

<body class=" pace-done" style="position: relative; min-height: 100%; top: 0px;"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
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
                                    <li><a href="profile.php"#">Dashboard</a></li>
                                    <li class="active"> profile </li>
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
                        <h3 class="text-left" style="padding-left: 14px;"> Profile data </h3>
                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                            <div class="card">
                                <?php
											
											$account_id = "SELECT username FROM users WHERE id = '".$_SESSION['user_id']."'";
											$accountid = $conn->query($account_id);
											if ($accountid->num_rows > 0) {
												while ($row = $accountid->fetch_assoc()){
													echo "
													<h4>".$row['username']."</h4>
													";
												}
											}
											?>
                                <img class="img-responsive " src="Crypto Minning __ User Dashboard __ Home_files/nature.jpg">
                                <form method="POST" id="uploadimg" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <input type="file" class="form-control input-flat" id="img" name="img"> 
                                    </div>
                                    <div class="form-group">
                                    <div class="alert alert-danger hidden" id="error"> image required </div>
                                        <button type="submit" class="btn btn-info btn-rounded btn-outline" name="submit_pics"> Upload pics</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card">
                                <h4 class="text-center">Change password</h4>
                                <form method="POST" id="up">
                                    <div class="form-group">
                                        <input type="password" class="form-control input-flat" id="ps" required="yes" name="password" placeholder="new password"> 
                                    </div>
                                    <div class="form-group">
                                   
                                        <button type="submit" class="btn btn-info btn-rounded btn-outline" name="submit_password"> submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                            <div class="card">
							<?php
								
							?>
                                <form method="POST" id="profile1">
                                        

          <div class="form-group">
              <label for="name">USERNAME:</label>
              <input type="text" name="name" class="form-control input-flat" id="name" readonly="yes">
          </div>

          <div class="form-group">
              <label for="name">NAME:</label>
              <input type="text" name="name" class="form-control input-flat" id="name" readonly="yes">
          </div>

          <div class="form-group">
              <label for="phone">PHONE:</label>
              <input type="text" name="ph" class="form-control input-flat" id="ph" required="yes">
          </div>

          <div class="form-group">
              <label for="email">EMAIL:</label>
              <input type="email" name="em" class="form-control input-flat" id="em" required="yes">
          </div> 

           <div class="form-group">
              <label for="name">BITCOIN ADDRESS:</label>
              <input type="text" name="btc" class="form-control input-flat" value="" id="btc">
          </div>

          <div class="form-group">
              <label for="phone">PERFECT MONEY:</label>
              <input type="text" name="pfm" class="form-control input-flat" value=" " id="pfm">
          </div>

          <div class="form-group">
              <label for="email">ETHEREUM ADDRESS:</label>
              <input type="text" name="ether" class="form-control input-flat" value=" " id="ether">
          </div> 
          <div class="form-group">
              <label for="email">BITCOIN CASH ADDRESS:</label>
              <input type="text" name="lite" class="form-control input-flat" value=" " id="lite">
          </div> 

                                                    <div class="form-group">
                                            <button type="submit" id="sun" class="btn btn-info btn-rounded btn-outline" name="submit_profile"> Update Profile </button>
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
                var em = $("#em").val();
                var ph = $("#ph").val();
                var btc = $("#btc").val();
                var ether = $("#ether").val();
                var lite = $("#lite").val();
                var pfm = $("#pfm").val();

             //    $("#sun").text('loading');
                $.get("updatepro.php?em="+em+"&ph="+ph+"&btc="+btc+"&ether="+ether+"&lite="+lite+"&pfm="+pfm, function(data){
                    if (data == "good") {
                         window.location.assign("profile.php");
                    }else{
                        $("#lo").removeClass("hidden");
                    }
                  //  alert(data);    
                });
           });


            $('#up').submit(function(e){
                e.preventDefault(); 
                var ps = $("#ps").val();
                $.get("newpass.php?pass="+ps, function(data){
                    if (data == "good") {
                         window.location.assign("profile.php");
                    }else{
                        $("#lo").removeClass("hidden");
                    }
                   swal(data);    
                });
           });


            
            $('#uploadimg').submit(function(e){
                e.preventDefault(); 
                var img = $("#img").val();
                //alert(img);
                var ext = $('#img').val().split(".").pop().toLowerCase();
                //Allowed file types
                if($.inArray(ext, ['gif','png','jpg','jpeg', 'docx', 'doc', 'pdf', 'rtf', 'ppt', 'txt', 'odt']) == -1) {
               // alert('The file type is invalid!');
                $('#img').val("");
                $('#error').empty(" ").text("Image is required").removeClass('hidden');
               
                }
 
                //Tested in Firefox and Google Chorme
                sizee = $("#img")[0].files[0].size; //file size in bytes
                sizee = sizee / 1024; //file size in Kb
                sizee = sizee / 1024; //file size in Mb
                 

                // alert(sizee);
                //file size more than 10Mb
                if (sizee > 10) {
                $('#error').empty(" ").text("Image size should not be more than 10MB").removeClass('hidden');;
                return false;
                }  else {
               // alert("good change");
                    $.ajax({
                        url: 'result.php',
                        method: 'POST',
                        data: new FormData(this),
                        contentType: false,
                        processData: false,
                      success:function(data) {
                        if (data == "good") {
                            window.location.assign("profile.php");
                        }
                       // 
                       
                      }
                   });
                }

                //  $("#sun").html('<img src="../loader.gif" width="50" heigth="50" />');
                // $.get("updatepro.php?em="+em+"&ph="+ph, function(data){
                //     if (data == "good") {
                //          window.location.assign("profile.php");
                //     }else{
                //         $("#lo").removeClass("hidden");
                //     }
                //   //  alert(data);    
                // });
           });            
        });      
    </script>




</div><div class="goog-te-spinner-pos"><div class="goog-te-spinner-animation"><svg xmlns="http://www.w3.org/2000/svg" class="goog-te-spinner" width="96px" height="96px" viewBox="0 0 66 66"><circle class="goog-te-spinner-path" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg></div></div></body></html>
<?php
}
?>
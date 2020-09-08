<?php
include('config.php');
if (isset($_POST['sobo'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$validate = mysqli_query($conn,"select id from users where username='".$username."' && password='".$password."' ");
    $ret=mysqli_fetch_array($validate);
    if($ret>0){
      $_SESSION['user_id']=$ret['id'];
	  echo "<script>window.location.href='customer/dashboard.php'</script>";
    }
    else{
     echo "<script>alert('Invalid details. Please try again.');</script>";   
   echo "<script>window.location.href='login.php'</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Login - Crypto Minning investment investment LTD</title>
<link rel="icon" href="Crypto Minning investment investment LTD_files/images/favicon.png">
<link rel="stylesheet" href="Crypto Minning investment investment LTD_files/bootstrap.min.css">
<link href="Crypto Minning investment investment LTD_files/css.css.css" rel="stylesheet">
<link href="Crypto Minning investment investment LTD_files/animate.css" rel="stylesheet" type="text/css">
<link href="Crypto Minning investment investment LTD_files/custom.css" rel="stylesheet" type="text/css">
<link href="Crypto Minning investment investment LTD_files/hover.css" rel="stylesheet" type="text/css">
<script src="Crypto Minning investment investment LTD_files/jquery.min.js"></script>
<script src="Crypto Minning investment investment LTD_files/setting2.js" type="text/javascript"></script>
<script src="Crypto Minning investment investment LTD_files/bootstrap.min.js"></script>
<script type="text/jscript" src="Crypto Minning investment investment LTD_files/wow.html"></script>
<script type="text/jscript" src="Crypto Minning investment investment LTD_files/wow.min.js"></script>

</head>

<body class="log">
<div class="wrapper">
<div class="loginlogo"><a href="index.html"><img src="Crypto Minning investment investment LTD_files/logo.png" alt=""></a></div>



<script language="javascript">
function checkform() {
  if (document.mainform.username.value=='') {
    alert("Please type your username!");
    document.mainform.username.focus();
    return false;
  }
  if (document.mainform.password.value=='') {
    alert("Please type your password!");
    document.mainform.password.focus();
    return false;
  }
  return true;
}
</script>





<div class="loginwrap">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-12"> &nbsp; </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <h3><span>ENTER LOGIN</span> DETAILS</h3>
        <div class="form-container loginpage">
            
<form method="post" onsubmit="return checkform()">
<table width="100%" cellspacing="0" cellpadding="2" border="0">
<tbody>
<tr>
    <td>
        <span class="user">
            <input type="text" name="username" value="" class="inpts" size="30" autofocus="autofocus" placeholder="Username">
        </span>
    </td>
</tr>
<tr>
    <td>
        <span class="password">
        <input type="password" name="password" value="" class="inpts" size="30" placeholder="Password">
        </span>
    </td>
</tr>
<tr>
    <td>
        <span class="loginbottom">
            <a href="https://cryptominning.ltd/forgot_password.php">Retrieve Password?</a>
        </span>
    </td>
</tr>
<tr>
 <td><input type="submit" value="Login" name="sobo" class="sbmt"></td>
</tr></tbody></table>
</form>

</div>

 </div>
    </div>
  </div>
</div>
<div class="loginpanelbottoms">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="loginpagebottom">
          <h4><span>If you are new</span> to Crypto Minning investment investment LTD</h4>
          <a href="register.php"">Signup here</a></div>
      </div>
    </div>
  </div>
</div>
<div class="loginfooter">© 2020 Crypto Minning Investment LTD All Rights Reserved</div>
</div>

 

<script type="text/javascript">
		document.oncontextmenu = null;
		document.onselectstart = null;
		document.ondragstart = null;
		document.onmousedown = null;
		document.body.oncontextmenu = null;
		document.body.onselectstart = null;
		document.body.ondragstart = null;
		document.body.onmousedown = null;
		document.body.oncut = null;
		document.body.oncopy = null;
		document.body.onpaste = null;
	</script>
		
	

</body></html>
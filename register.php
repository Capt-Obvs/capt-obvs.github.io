<?php
include ('config.php');
if (isset($_POST['signup'])){
	$full_name = $_POST['fullname'];
	$username = $_POST['username'];
	$pass = $_POST['pass'];
	$btc = $_POST['btc'];
	$email = $_POST['em'];
	$phone = $_POST['phone'];
	$sq = $_POST['sq'];
	$sa = $_POST['sa'];
	
	$create = "INSERT INTO users (full_name, username, password, btc_address, email, phone, sq, sa) 
										VALUES ('".$full_name."', '".$username."', '".$pass."', '".$btc."', '".$email."', '".$phone."', '".$sq."', '".$sa."')";
					if($conn->query($create) === TRUE) {
						
						echo "Registration has been successful!";
						echo "<script>window.location.href='login.php'</script>";
						
					}else{
						echo "Error: " .$create. "<br>" . $conn->error;
					}
}
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Sign Up - Gaincryptos investment LTD</title>
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
<div class="loginwrap">
  <div class="container">
    <div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12">
        &nbsp;
      </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
<div class="form-container loginpage">

 

  

 <script language="javascript">
 function checkform() {
  if (document.regform.fullname.value == '') {
    alert("Please enter your full name!");
    document.regform.fullname.focus();
    return false;
  }
 
  
  if (document.regform.username.value == '') {
    alert("Please enter your username!");
    document.regform.username.focus();
    return false;
  }
  if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
    alert("For username you should use English letters and digits only!");
    document.regform.username.focus();
    return false;
  }
  if (document.regform.password.value == '') {
    alert("Please enter your password!");
    document.regform.password.focus();
    return false;
  }
  if (document.regform.password.value != document.regform.password2.value) {
    alert("Please check your password!");
    document.regform.password2.focus();
    return false;
  }
 
  
  if (document.regform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.email.value != document.regform.email1.value) {
    alert("Please retupe your e-mail!");
    document.regform.email.focus();
    return false;
  }

  for (i in document.regform.elements) {
    f = document.regform.elements[i];
    if (f.name && f.name.match(/^pay_account/)) {
      if (f.value == '') continue;
      var notice = f.getAttribute('data-validate-notice');
      var invalid = 0;
      if (f.getAttribute('data-validate') == 'regexp') {
        var re = new RegExp(f.getAttribute('data-validate-regexp'));
        if (!f.value.match(re)) {
          invalid = 1;
        }
      } else if (f.getAttribute('data-validate') == 'email') {
        var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
        if (!f.value.match(re)) {
          invalid = 1;
        }
      }
      if (invalid) {
        alert('Invalid account format. Expected '+notice);
        f.focus();
        return false;
      }
    }
  }

  if (document.regform.agree.checked == false) {
    alert("You have to agree with the Terms and Conditions!");
    return false;
  }

  return true;
 }

 function IsNumeric(sText) {
  var ValidChars = "0123456789";
  var IsNumber=true;
  var Char;
  if (sText == '') return false;
  for (i = 0; i < sText.length && IsNumber == true; i++) { 
    Char = sText.charAt(i); 
    if (ValidChars.indexOf(Char) == -1) {
      IsNumber = false;
    }
  }
  return IsNumber;
 }
 </script>
 
 
  
 
  
<form method="post" onsubmit="return checkform()" name="regform">

<table cellspacing="0" cellpadding="2" border="0">
    <tbody><tr>
        <td><h3><span>Account</span> Information</h3></td>
      </tr>    
<tr>
 <td><input type="text" name="fullname" value="" class="inpts" size="30" placeholder="Your Full Name"></td>
</tr>
<tr>
 <td><input type="text" name="username" value="" class="inpts" size="30" placeholder="Your Username"></td>
</tr>
<tr>
 <td><input type="password" name="pass" value="" class="inpts" size="30" placeholder="Password"></td>
</tr><tr>
 <td><input type="password" name="conpass" value="" class="inpts" size="30" placeholder="Retype Password"></td>
</tr>
<tr>
<td>
      <br>

        <h3><span>Payment</span> Systems</h3>

        </td>
  
        </tr>





<tr>
 <td><input type="text" class="inpts" size="30" name="btc" value="" data-validate="regexp" data-validate-regexp="^[13][a-km-zA-HJ-NP-Z1-9]{25,34}$" data-validate-notice="Bitcoin Address" placeholder="1YourBitcoinAddressmwGAiHnxQWP8J2"></td>
</tr>


<tr>
 <td><input type="text" name="em" value="" class="inpts" size="30" placeholder="Your E-mail Address"></td>
</tr>
<tr>
 <td><input type="text" name="phone" value="" class="inpts" size="30" placeholder="Enter Your Phone No"></td>
</tr>
<tr>
 <td><input type="text" name="sq" value="" class="inpts" size="30" placeholder="Secret question"></td>
</tr>
<tr>
 <td><input type="text" name="sa" value="" class="inpts" size="30" placeholder="Secret answer"></td>
</tr>


<tr>
  <td colspan="2"><input type="checkbox" name="agree" value="1"> I agree with <a href="rules.html">Terms and conditions</a></td>
</tr>
<tr>
 <td><input type="submit" value="Register" name="signup" class="sbmt"></td>
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
<h4><span>Already a member?</span> Login Now!</h4>

<a href="login.php">login here</a>
</div>
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
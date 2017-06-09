
<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script language="JavaScript" src="engine/swfobject.js" type="text/javascript"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link rel="icon" href="img/Untitled-1.png" type="image" />
<link rel="shortcut icon" href="img/Untitled-1.png" type="image" />


<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Nature 4 Everyone</title>
<link href="format1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/master.css" type="text/css" />

<script type="text/javascript" src="contact1.js"></script>
<script type="text/javascript" src="contact.js"></script>
<script type="text/javascript" src="contact3.js"></script>
<style type="text/css">
<!--
body {
	background-image: url(img/hi.jpg);
	background-repeat:repeat-x;
	background-color:#d9deeb;

}
-->
</style>
<script type="text/javascript" src="jquery.watermarkinput.js"></script>
<script type="text/javascript">
jQuery(function($){
   $("#login").Watermark("username");
   
   });
</script>



</head>
<SCRIPT LANGUAGE="JavaScript">
function CountLeft(field, count, max) {
if (field.value.length > max)
field.value = field.value.substring(0, max);
else
count.value = max - field.value.length;
}
</script>
<body>
<script src="js/bootstrap.min.js"></script>
<div class="mainr">
  <div class="topleft"><img src="img/lg2.jpg" width="250" height="100" /></div>
  <form action="login-exec.php" method="post">
  <div class="qwerty">
  
		<div class="label1" align="right">
		  <div class="email">UserName</div>
		  <div class="password">Password</div>
		</div>
		<div class="label1" align="right">
				
				<div class="emailtext"><input name="login" class="input-small" type="text" id="login"  />
				</div>
		  		<div class="passwordtext"><input name="password" class="input-small" type="password"  /></div>

<div class="passwordtext1"><input type="submit" class="btn btn-primary" value="Login" /></div>
				
		</div>
		<div class="label2">
		
				<div class="email">
				<div class="radio"><input name="check" type="checkbox" value="" /></div>
				<div class="text1">Keep me Log-in</div>
				</div>
		  		<div class="password1">Forgot Password?</div>
		
		</div>
</div>
</form>





</div>


<div class="downleft">
<div id="cu3ox1" style="width:950px;height:496px;">
	<script language="JavaScript" type="text/javascript">
		var cu3oxId = ("cu3ox" + Math.random()).replace(".","");
		document.write('<div id ="' + cu3oxId + '" style="text-align:center;"><img src="data/images1/butterfly_on_sunflowerwallpaper1366x768.jpg"/></div>');
		if (swfobject.getFlashPlayerVersion().major)
			swfobject.createSWF(
			  {data:"engine/cu3ox.swf", width:"100%", height:"100%" },
			  {FlashVars:"images=data/images1&cfgsuffix=1",menu:true, allowFullScreen:false, allowScriptAccess:'sameDomain', wmode:"transparent", bgcolor:'#FFFFFF', 
			   devicefont:false, scale:'noscale', loop:true, play:true, quality:'high'}, cu3oxId);
	</script>
	<a style="display:none" href="http://cu3ox.com">Flash Slideshow Xml by cu3ox.com v1.8</a><noscript>
		<!--[if !IE]> -->
		<object type="application/x-shockwave-flash" data="engine/cu3ox.swf" width="100%" height="100%"  align="left">
		<!-- <![endif]-->
		<!--[if IE]>
		<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0"
			width="100%" height="100%"  align="middle">
			<param name="movie" value="engine/cu3ox.swf" />
		<!-->
			<param name="FlashVars" value="images=data/images1&cfgsuffix=1" />
			<param name="allowScriptAccess" value="always" /><param name="allowFullScreen" value="false" />
			<param name="quality" value="high"/><param name="scale" value="noscale"/>
			<param name="wmode" value="transparent" />	
			<param name="bgcolor" value="#ffffff" />	
			<img src="data/images1/butterfly_on_sunflowerwallpaper1366x768.jpg"/>
		</object>
		<!-- <![endif]-->		
	</noscript>
</div>
  
  <?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
?>
  
  
  </div>
  <div class="field">
  
    <div class="signup">Sign Up</div>
	<div class="free">It's free, and always will be</div>
	<div class="text">
	<form action="register-exec.php" method="post">
	  	<!--<div class="textleft">FirstName:</div>-->
		<div class="controls controls-row"><input name="fname" type="text" class="span2" placeholder="First Name" id="fname" onKeyDown="CountLeft(this.form.fname, this.form.left,30);" onKeyUp="CountLeft(this.form.fname,this.form.left,30);" size="40">
		
		<input name="lname" type="text" class="span2" placeholder="Last Name" id="lname" onKeyDown="CountLeft(this.form.lname, this.form.last,30);" onKeyUp="CountLeft(this.form.lname,this.form.last,30);" size="40">
		
		</div>
		
		<div class="controls controls-row"><input name="login" type="text" class="span4" placeholder="Username (only in alphabets)" id="login1" onKeyDown="CountLeft(this.form.login, this.form.log,30);" onKeyUp="CountLeft(this.form.login,this.form.log,30);" size="40">
		
		</div>
		
		<div class="controls controls-row">
		  <input name="password" type="password" class="span4" placeholder="Enter Password" id="password" onkeydown="CountLeft(this.form.password, this.form.pas,30);" onkeyup="CountLeft(this.form.password,this.form.pas,30);" size="40" />
		  
		</div>
		
		<div class="controls controls-row"><input name="cpassword" type="password" class="span4" placeholder="Re-enter Password" id="cpassword" onkeydown="CountLeft(this.form.cpassword, this.form.pas1,30);" onkeyup="CountLeft(this.form.cpassword,this.form.pas1,30);" size="40" />
		</div>
		<div class="controls controls-row"><input name="address" type="text" class="span4" placeholder="Address" id="address" onKeyDown="CountLeft(this.form.address, this.form.ad,50);" onKeyUp="CountLeft(this.form.address,this.form.ad,50);" size="40">
		
		</div>
		<div class="controls controls-row"><input name="cnumber" type="text" class="span4" placeholder="Contact No"id="cnumber" onKeyDown="CountLeft(this.form.cnumber, this.form.cn,11);" onKeyUp="CountLeft(this.form.cnumber,this.form.cn,11);" size="40">
		
		<input name="propic" id="dadded" type="hidden" value="uploadedimage/defoult.jpg" /></div>
		
		<div class="Controls controls-row"><input name="email" type="text" class="span4" placeholder="Enter Email" id="email" onKeyDown="CountLeft(this.form.email, this.form.em,50);" onKeyUp="CountLeft(this.form.email,this.form.em,50);" size="40">
		
		</div>
		<div class="free1">I am:</div>
		<div class="controls controls-row">
			<div class="input-container">
			  <select name="gender" id="gender" class="span4">
                <option >Select Sex:</option>
                <option >Female</option>
                <option >Male</option>
              </select><br />
			</div>
		
		</div>
		<div class="free1">Birth Day:</div>
		<div class="controls controls-row">
		
		<div class="controls controls-row">
    <?php
	  $con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("facebook", $con);
$name= mysql_query("select * from month");

echo '<select name="month" id="user" class="span1">';
 while($res= mysql_fetch_assoc($name))
{
echo '<option>';
echo $res['month'];
echo'</option>';
}
echo'</select>';

mysql_close($con)


?>
 &nbsp;<?php
	  $con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("facebook", $con);
$name= mysql_query("select * from day order by day_id asc");

echo '<select name="day" id="user" class="span1">';
 while($res= mysql_fetch_assoc($name))
{
echo '<option>';
echo $res['day'];
echo'</option>';
}
echo'</select>';

mysql_close($con)


?>
    <?php
	  $con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("facebook", $con);
$name= mysql_query("select * from year");

echo '<select name="year" id="user" class="span2">';
 while($res= mysql_fetch_assoc($name))
{
echo '<option>';
echo $res['year'];
echo'</option>';
}
echo'</select>';

mysql_close($con)


?>
	
    </div>
		
		
		</div>
		<div class="controls controls-row">
</div>


	
		
		<div class="controls controls-row">


		
		
		<div class="controls controls-row"></div>
		<div class="controls controls-row">
    <input type="submit" name="Submit" value="Sign Up" class="btn btn-large btn btn-success"/>
  
    </div>
		
		</div>
	</form>	
	</div>
  </div>
</div>
</body>
</html>

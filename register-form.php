<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Login Form</title>
<link href="loginmodule.css" rel="stylesheet" type="text/css" />
</head>
<body>
<p>
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
</p>
<p>
<h1>Registration Form,</h1>
<h1> comeplete the data and be a member of bookface the leading social networking site</h1>
</p>
<form id="loginForm" name="loginForm" method="post" action="register-exec.php">
  <table width="300" border="0" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <th>First Name </th>
      <td><input name="fname" type="text" class="textfield" id="fname" /></td>
    </tr>
    <tr>
      <th>Last Name </th>
      <td><input name="lname" type="text" class="textfield" id="lname" /></td>
    </tr>
    <tr>
      <th width="124">UserName/login</th>
      <td width="168"><input name="login" type="text" class="textfield" id="login" /></td>
    </tr>
    <tr>
      <th>Password</th>
      <td><input name="password" type="password" class="textfield" id="password" /></td>
    </tr>
    <tr>
      <th>Confirm Password </th>
      <td><input name="cpassword" type="password" class="textfield" id="cpassword" /></td>
    </tr>
	<tr>
      <th>Address </th>
      <td><input name="address" type="text" class="textfield" id="lname" /></td>
    </tr>
	<tr>
      <th>ContactNumber </th>
      <td><input name="cnumber" type="text" class="textfield" id="lname" /></td>
    </tr>
	<tr>
      <th>Email </th>
      <td><input name="email" type="text" class="textfield" id="lname" /></td>
    </tr>
	<tr>
      <th>Gender </th>
      <td><label>
        <select name="gender" id="gender">
          <option selected="selected">Select Gender </option>
          <option>Male</option>
          <option>Female</option>
        </select>
      </label></td>
	</tr>
   <tr>
      <th>BirthDate </th>
      <td><input name="bdate" type="text" class="textfield" id="lname" /></td>
    </tr>
	<tr>
      <th>Dateadded</th>
      <td><input name="dadded" type="text" class="textfield" id="dadded" /></td>
	</tr>
	<tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Register" /></td>
    </tr>
  </table>
</form>
</body>
</html>

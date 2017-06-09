<?php
	include("dbcon.php");
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
<link rel="icon" href="img/Untitled-1.png" type="image" />
<link rel="shortcut icon" href="img/Untitled-1.png" type="image" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="keywords" content="">
	<meta name="description" content="">
<title><?php echo $_SESSION['SESS_FIRST_NAME'];?> Profile</title>
<link type='text/css' href='css1/demo.css' rel='stylesheet' media='screen' />
<link type='text/css' href='css1/basic.css' rel='stylesheet' media='screen' />
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/basic.js'></script>
<link href="format.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.watermarkinput.js"></script>
<script type="text/javascript">
 jQuery(function($){
   $("#content12").Watermark("What's on your mind?");
   });
 
$(function() 
{
$("#content12").focus(function()
{
$(this).animate({"height": "85px",}, "fast" );
$("#button_block").slideDown("fast");
return false;
});
$("#cancel").click(function()
{
$("#content12").animate({"height": "30px",}, "fast" );
$("#button_block").slideUp("fast");
return false;
});

	

});
</script>
<style type="text/css">
body
{
font-family:Arial, Helvetica, sans-serif;
}
#content12
{
width:390px; height:30px;
border:solid 2px #006699;
font-family:Arial, Helvetica, sans-serif;
font-size:14px;

}
#button
{
background-color:#006699;
color:#ffffff;
font-size:13px;
font-weight:bold;
padding:4px;
}
#cancel
{
background-color:#dedede;
color:#000;
font-size:13px;

padding:4px;
margin-left:10px;
}
#content12
{
font-size:14px;

}
#button_block
{
display:none;


}
</style>
<style type="text/css">
<!--
body {
	background-image: url(images/New%20Picture.jpg);
	background-repeat: repeat-x;
}
.style1 {font-weight: bold}
.style2 {font-size: 12px} -->
</style>

<script type="text/javascript">
<!--
var timeout         = 500;
var closetimer		= 0;
var ddmenuitem      = 0;

// open hidden layer
function mopen(id)
{	
	// cancel close timer
	mcancelclosetime();

	// close old layer
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';

	// get new layer and show it
	ddmenuitem = document.getElementById(id);
	ddmenuitem.style.visibility = 'visible';

}
// close showed layer
function mclose()
{
	if(ddmenuitem) ddmenuitem.style.visibility = 'hidden';
}

// go close timer
function mclosetime()
{
	closetimer = window.setTimeout(mclose, timeout);
}

// cancel close timer
function mcancelclosetime()
{
	if(closetimer)
	{
		window.clearTimeout(closetimer);
		closetimer = null;
	}
}

// close layer when click-out
document.onclick = mclose; 
// -->
</script>
<script language="javascript" type="text/javascript">
function showHide(shID) {
	if (document.getElementById(shID)) {
		if (document.getElementById(shID+'-show').style.display != 'none') {
			document.getElementById(shID+'-show').style.display = 'none';
			document.getElementById(shID).style.display = 'block';
		}
		else {
			document.getElementById(shID+'-show').style.display = 'inline';
			document.getElementById(shID).style.display = 'none';
		}
	}
}
</script>
<style type="text/css">
	/* This CSS is just for presentational purposes. */
	
	#wrap {
		font: 1.3em/1.3 Arial, Helvetica, sans-serif;
		width: 30em;
		margin: 0 auto;
		padding: 1em;
		background-color: #fff; }
	h1 {
		font-size: 200%; }

	/* This CSS is used for the Show/Hide functionality. */
	.more {
		display: none;
		border-top: 1px solid #666;
		border-bottom: 1px solid #666; }
	a.showLink, a.hideLink {
		text-decoration: none;
		color: #36f;
		padding-left: 8px;
		background: transparent url(down.gif) no-repeat left; }
	a.hideLink {
		background: transparent url(up.gif) no-repeat left; }
	a.showLink:hover, a.hideLink:hover {
		border-bottom: 1px dotted #36f; }
a:link {
	color: #0000FF;
	text-decoration: none;
}
a:hover {
	color: #0033FF;
	text-decoration: underline;
}
a:visited {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
</style>
</head>

<body>
<script src="js/bootstrap.min.js"></script>
<div class="main1">
	<div class="lefttop">
		<div class="lefttopleft">
			<img src="images/logo.jpg" width="200" height="21" />
		</div>
			<div class="lefttoright">
				<a href="request1.php"><img src="images/Untitled-1.png" width="15" height="15" border="0" /></a>
				<?php
					$result = mysql_query("SELECT * FROM friendlist WHERE firstname='".$_SESSION['SESS_FIRST_NAME'] ."' and status='pending' ORDER BY firstname ASC");
					$numberOfRows = MYSQL_NUMROWS($result);
				?>
				<font size="2" color="red"><b><?php echo $numberOfRows;?></b></font> 
				<a href="messages.php"><img src="images/messages.png" width="15" height="15" border="0" /></a>
				<?php
					$result = mysql_query("SELECT * FROM messages WHERE receiver='".$_SESSION['SESS_FIRST_NAME'] ."' and status='pending' ORDER BY receiver ASC");
					$numberOfRows = MYSQL_NUMROWS($result);
				?>
				<font size="2" color="red"><b><?php echo $numberOfRows;?></b></font>
			</div>
	</div>
<div class="righttop">
	<div class="search">
		<form action="friends.php" method="GET"> 
		<input name="query" type="text" maxlength="30" class="textfield" />
		</form>
	</div>
	<div class="nav">
	<ul id="sddm">
	<li><a href="lol.php" onmouseover="mopen('m3')" onmouseout="mclosetime()">Home</a>
		<div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">		  </div>
	</li>
	<li><a href="profile.php" onmouseover="mopen('m4')" onmouseout="mclosetime()">Profile</a>
		<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">		  </div>
	</li>
	<li><a href="#" onmouseover="mopen('m5')" onmouseout="mclosetime()">Account</a>
		<div id="m5" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="profile.php">	
		<?php
			$result = mysql_query("SELECT * FROM members WHERE FirstName='".$_SESSION['SESS_FIRST_NAME'] ."'");
		?>
		<br/>
		<?php
			while($row = mysql_fetch_array($result))
			{
		?>
		<img width=70 height=90 alt='Unable to View' src='<?php echo $row["profImage"];?>'/>
		<br/>
		<?php echo $_SESSION['SESS_FIRST_NAME']." ". $row["LastName"] ;
			}?>
		</a>
		<a href="editfriends.php">Edit Friend</a>
		<a href="#">Account Setting</a>	
		<a href="auto.htm">SearchFriend</a>
		<a href="index.php">Logout</a>		  </div>
	</li>
	</ul>
	<div style="clear:both"></div>
	<div style="clear:both"></div></div>
 </div>
<div class="left">
	<div class="propic">
		<?php
			$id= $_SESSION['SESS_MEMBER_ID'];
			$image=mysql_query("SELECT * FROM members WHERE member_id='$id'");
			$row=mysql_fetch_assoc($image);
			$_SESSION['imageko']= $row['profImage'];
		?>
		<div id="pic">
		<img width=106 height=140 alt='Unable to View' src='<?php echo $_SESSION['imageko'];?>'/>
		</div>
	</div>
	<div class="link style1">
		<ul id="sddm1">
		<li><a href="#" onmouseover="mopen('m3')" onmouseout="mclosetime()"><img src="images/wal.png" width="17" height="17" border="0" /> &nbsp;<font color="#0000FF">Wall</font></a>
			<div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">	  </div>
		</li>
		<br/>
		<li><a href="INFO.php" onmouseover="mopen('m4')" onmouseout="mclosetime()"><img src="images/message.png" width="16" height="12" border="0" /> &nbsp;Info</a>
			<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">	  </div>
		</li>
		<br/>
		<li>
		<a href="photolist.php" onmouseover="mopen('m4')" onmouseout="mclosetime()"><img src="images/photos.png" width="16" height="14" border="0" /> 
		&nbsp;
		Photos (<?php $result = mysql_query("SELECT * FROM photos WHERE uploadedby='".$_SESSION['SESS_FIRST_NAME'] ."'");
					$numberOfRows = MYSQL_NUMROWS($result);
				?>
				<font size="1" color="blue"><b><?php echo $numberOfRows;?>'</b></font>
				)	
		</a>
		<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">	  </div>
		</li>
		<br/>
		<li>
		<a href="friends.php" onmouseover="mopen('m4')" onmouseout="mclosetime()"><img src="images/friends.png" width="18" height="15" border="0" /> Friends
	(<?php
		$result = mysql_query("SELECT * FROM friendlist WHERE addby='".$_SESSION['SESS_FIRST_NAME'] ."' and status='accepted' ORDER BY addby ASC");
		$numberOfRows = MYSQL_NUMROWS($result);	?>
		<font size="1" color="blue"><b><?php echo $numberOfRows;?></b></font>
	)
		</a>
		<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">	  </div>
		</li>
		</ul>
		<div style="clear:both"></div>
		<div style="clear:both"></div>
	
	
	</div>
	<div class="friends">
	<strong><div align="center"></div></strong>
	<div align="center"><div id='basic-modal'><a class='basic' href="#" style="text-decoration:none;">View all Friend</a></div>
	<div id="basic-modal-content">
		<?php
			$result = mysql_query("SELECT * FROM friendlist WHERE addby='".$_SESSION['SESS_FIRST_NAME'] ."' and status='accepted'");
			echo $_SESSION['SESS_FIRST_NAME'];
			echo '>';
			echo 'Friends';
		?>
		<br/>
		<?php
			while($row = mysql_fetch_array($result))
			{
		?>
		<table width="125" height="50" border="0" cellspacing="0" cellpadding="0" align="center">
		<tr>
		<td width="50px" colspan="0" rowspan="3" align="left" valign="top">
		<img width=50 height=50 alt='Unable to View' src='<?php echo $row["location"];?>'/>
		</td>
		<td height="16">&nbsp;</td>
		</tr>
		<tr>
		<td height="17">
		<div align="left" valign="center">
			&nbsp;&nbsp;
			<a href=http://localhost/PHP-Login/friendsprofile1.php?id='<?php echo $row["friends_id"];?>'><?php echo $row['firstname'];?></a>
		</div>
		</td>
		</tr>
		<tr>
		<td height="16">&nbsp;</td>
		</tr>
		</table>
		<br>
		<?php
			}
		?>	
	</div>
	<!-- preload the images -->
	<div style='display:none'>
		<img src='img/basic/x.png' alt='' />
	</div>
	<!--end of popup-->
	<?php
		$result = mysql_query("SELECT * FROM friendlist WHERE addby='".$_SESSION['SESS_FIRST_NAME'] ."'  and status='accepted' ORDER BY RAND() LIMIT 4");
	?>
	<br/>
	<?php
		while($row = mysql_fetch_array($result))
		{
	?>
	<table width="125" height="50" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
	<td width="50px" colspan="0" rowspan="3" align="left" valign="top">
	<img width=50 height=50 alt='Unable to View' src='<?php echo $row["location"];?>'/>
	</td>
	<td height="16">&nbsp;</td>
	</tr>
	<tr>
	<td height="17">
	<div align="left">
	&nbsp;&nbsp;
	<a href=http://localhost/PHP-Login/friendsprofile1.php?id='<?php echo $row["friends_id"];?>'><?php echo $row['firstname'];?></a>
	</div>
	</td>
	</tr>
	<tr>
	<td height="16">&nbsp;</td>
	</tr>
	</table>
	<br>
	<?php
  		  }
	?>
	</div>
	</div>
</div>
<div class="right">
	<div class="rightleft">
		<div class="name">
		<strong>
		<?php
			$result = mysql_query("SELECT * FROM members WHERE FirstName='".$_SESSION['SESS_FIRST_NAME'] ."'");
			while($row = mysql_fetch_array($result))
			{
		?>
		<p><h3><?php echo $row['FirstName'];?> <?php echo $row['LastName'];?></h3></p>
		<?php
			}
		?>
		</strong>
		</div>
		<div class="information">
		<?php
			$result = mysql_query("SELECT * FROM members WHERE FirstName='".$_SESSION['SESS_FIRST_NAME'] ."'");
			while($row = mysql_fetch_array($result))
			{
		?>
		Live in: <b><?php echo $row['Address'];?></b>    |    Born on : <b><?php echo $row['Birthdate'];?></b>    |    Gender : <b><?php echo $row['Gender'];?></b> 		
		<?php
			}
		?>
		</div>
		<div class="shoutout">
		<form  name="form1" method="post" action="save3.php">
			<textarea id="content12" name="message" cols="45" rows="2" onclick="this.value='';"></textarea>
			<input name="name" type="hidden" id="name" value="<?php echo $_SESSION['SESS_FIRST_NAME'];?>"/>
			<input name="poster" type="hidden" id="name" value="<?php echo $_SESSION['SESS_FIRST_NAME'];?>"/>
			<input name="name1" type="hidden" id="name" value="<?php echo $_SESSION['SESS_LAST_NAME'];?>"/>
			<div id="button_block">
				<input type="submit" id="button" value=" Post " class="btn btn-primary"/>
				<input type="submit" id='cancel' value=" cancel" class="btn btn-warning"/>
			</div>
		</form>
		</div>
		<div class="post">
		<?php
			$query  = "SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent FROM message WHERE poster='".$_SESSION['SESS_FIRST_NAME'] ."'ORDER BY messages_id DESC";
			$result = mysql_query($query);
			while($row = mysql_fetch_assoc($result))
			{
		?>
		<div class="pic1">
		<img width=50 height=50 alt='Unable to View' src='<?php echo $row["picture"];?>'/>
		</div>
		<div class="message">
		Posted by <?php echo $row['user'];?>:<br></div><b><div class='postedby'><?php echo $row['messages'];?></b>
		<form action="like.php" method="post">
		<input type="hidden" name="com" value="<?php echo $row['messages_id'];?>"/>
		<input type="hidden" name="cam" value="<?php echo $_SESSION['SESS_FIRST_NAME'];?>"/>
		<input type="submit" Value="like" class="btn btn-mini btn-success"/>
		</form>
		<?php
			$result1 = mysql_query("SELECT * FROM bleh WHERE remarks='". $row['messages_id'] ."'");
			if($row2 = mysql_fetch_array($result1))
			{
				$numberOfRows = MYSQL_NUMROWS($result1);	
				$numberoflikes=$numberOfRows;
				$numberoflikes1=$numberOfRows-1;
				if (($row2['remarksby'])==($_SESSION['SESS_FIRST_NAME']) && ($numberoflikes1 > 0))
				{
		?>
		<font color="blue"><b>You &  <?php echo $numberoflikes1;?></b></font> People like this
			<?php
				}
				elseif (($row2['remarksby'])==($_SESSION['SESS_FIRST_NAME'])&& ($numberoflikes1 == 0))
				{
			?>
			<font color="blue"><b>You</b></font> like this
			<?php
				}
				elseif ($numberoflikes > 0)
				{
			?>
			<font color="blue"><b><?php echo $numberoflikes;?></b></font>people like this
			<?php
				}
			}
			
	echo '<div class="delete">';
	echo '<font color="White">';
	echo '<a href=http://localhost/PHP-Login/deletepost.php?id=' . $row["messages_id"] . '>' . "DELETE" . '</a>';
	echo '</font>';	
	echo '&nbsp;';
	echo'</div>';
			?>
	<font color="blue">
	<br>
	<?php
		$days = floor($row['TimeSpent'] / (60 * 60 * 24));
		$remainder = $row['TimeSpent'] % (60 * 60 * 24);
		$hours = floor($remainder / (60 * 60));
		$remainder = $remainder % (60 * 60);
		$minutes = floor($remainder / 60);
		$seconds = $remainder % 60;
		if($days > 0)
		{
			echo date('F d Y', $row['date_created']);
		}
		elseif($days == 0 && $hours == 0 && $minutes == 0)
		{
			echo "few seconds ago";		
		}
		elseif($days == 0 && $hours == 0)
		{
			echo $minutes.' minutes ago';
		}
	?>
	</font>	
	</div>
	<br/><br/>
	<?php
		$query1  = "SELECT *,UNIX_TIMESTAMP() - date_created AS CommentTimeSpent FROM postcomment WHERE id=" . $row['messages_id'] . " ORDER BY comment_id DESC LIMIT 4";
		$result1 = mysql_query($query1);
		while($row1 = mysql_fetch_assoc($result1))
		{
	?>
	<div class="postcomment">
		<img width=30 height=30 alt='Unable to View' src='<?php $row1['pic'];?>'/>
		<div class="commentby">
			<font color="blue">
			<?php
				echo $row1['commentedby'];
			?>
			</font>
			&nbsp;&nbsp;
			<?php
				echo $row1['content'];
				echo '<div class="delete">';
				echo '<font color="White">';
				echo '<a href=http://localhost/PHP-Login/deletepostcommentpro.php?id=' . $row1["comment_id"] . '>' . "DELETE" . '</a>';
				echo '</font>';	
				echo '&nbsp;';
				echo'</div>';
				echo '<br />';
			?>
			<font color="blue"><?php $days2 = floor($row1['CommentTimeSpent'] / (60 * 60 * 24));
									$remainder = $row1['CommentTimeSpent'] % (60 * 60 * 24);
									$hours = floor($remainder / (60 * 60));
									$remainder = $remainder % (60 * 60);
									$minutes = floor($remainder / 60);
									$seconds = $remainder % 60;	
									if($days2 > 0)
									{
										echo date('F d Y', $row1['date_created']);
									}
									elseif($days2 == 0 && $hours == 0 && $minutes == 0)
									{
										echo "few seconds ago";
									}
									elseif($days2 == 0 && $hours == 0)
									{
										echo $minutes.' minutes ago';
									}
									?>
			</font>				
		</div>
	</div>
	<br/>
	<?php
		}
	?>
	<div class="fieldcomment">
		<form action="commentpostprof.php" method="post">
		<input type="hidden" name="postid" value="<?php echo $row['messages_id'];?>"/>
		<input type="hidden" name="user" value="<?php echo $_SESSION['SESS_FIRST_NAME'];?>"/>
		<input type="hidden" name="pic" value="<?php echo $_SESSION['SESS_LAST_NAME'];?>"/>
		<input type="text" class="textbox" name="postcomment"/>
		</form>
	</div>
	<?php
		/*if (!mysql_query($query,$con))
		{
			die('Error: ' . mysql_error());
		}
		mysql_close($con);*/
	?>
	  
		</div>
    </div>
	<div class="rightright">
		<div class="rightright1">Sponsor &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<a href="ads.php">&nbsp;create ads </a></div>
		<div class="rightright2">
		<?php
			$result = mysql_query("SELECT * FROM ads");
			while($row = mysql_fetch_array($result))
			{
		?>
	    <table width="214" border="0" cellspacing="0" cellpadding="0">
        <tr>
        <th colspan="2" scope="col">
		<div align="left">
			<?php
				echo $row['ads_title'];
			?>
		</div>
		</th>
        </tr>
        <tr>
        <td width="50" valign="top">
		<img width=50 height=50 alt='Unable to View' src='<?php echo $row["ads_pic"];?>'/>
		</td>
        <td width="138" valign="top">
			<div align="left">
			<?php
				echo $row['ads_content'];
			?>
			</div>
		</td>
        </tr>
        </table>
		<?php
			}
		}
		?>
		</div>
	</div>
</div>
</div>
</body>
</html>
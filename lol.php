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
<title>Welcome<?php echo $_SESSION['SESS_FIRST_NAME'];?></title>
<link type='text/css' href='css1/demo.css' rel='stylesheet' media='screen' />
<link type='text/css' href='css1/basic.css' rel='stylesheet' media='screen' />
<link href="format.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="css/reset.css" type="text/css" />
<link rel="stylesheet" href="css/master.css" type="text/css" />
<script type='text/javascript' src='js/jquery.js'></script>
<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
<script type='text/javascript' src='js/basic.js'></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="contact.js"></script>
<script type="text/javascript" src="js/jquery.watermarkinput.js"></script>
<script type="text/javascript">
 jQuery(function($){
   $("#content13").Watermark("What's on your mind?");
   });
 
$(function() 
{
$("#content13").focus(function()
{
$(this).animate({"height": "85px",}, "fast" );
$("#button_block").slideDown("fast");
return false;
});
$("#cancel").click(function()
{
$("#content13").animate({"height": "30px",}, "fast" );
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
#content13
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
#content13
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
-->
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
<script type="text/javascript" src="jquery-1.2.6.min.js"></script>
<link href="screen.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="jquery.livequery.js"></script>
<script src="jquery.watermarkinput.js" type="text/javascript"></script>
<script type="text/javascript" src="datepicker/jquery.ui.core.js"></script>
<script type="text/javascript" src="datepicker/ui.datepicker.js"></script>
<link rel="stylesheet" href="datepicker/ui.datepicker.css" type="text/css">
<link rel="stylesheet" href="datepicker/ui.theme.css" type="text/css">
<link rel="stylesheet" href="datepicker/demos.css" type="text/css">
<script type="text/javascript">
	// <![CDATA[	
	$(document).ready(function(){	
		
		// click to submit an event
		$('#CreateEvent').click(function(){

			var a = $("#EventInput").val();
			if(a != "What are you planning?")
			{
				$.post("event.php?val=1&"+$("#EventForm").serialize(), {
	
				}, function(response){
					$('#ShowEvents').prepend($(response).fadeIn('slow'));
					clearForm();
				});
			}
			else
			{
				alert("Enter event name.");
				$("#EventInput").focus();
			}
		});	
		
		// delete event
		$('a.delete').livequery("click", function(e){
			if(confirm('Are you sure you want to delete?')==false)

			return false;
	
			e.preventDefault();
			var parent  = $(this).parent();
			var id =  $(this).attr('id').replace('record-','');	
			
			$.ajax({
				type: 'get',
				url: 'delete.php?id='+ id,
				data: '',
				beforeSend: function(){
				},
				success: function(){
					parent.fadeOut(200,function(){
						parent.remove();
					});
				}
			});
		});	
		
		// show form when input get focus
		$('#EventInput').focus(function(){
			$('#EventBox').fadeIn();
			$('a.cancel').fadeIn();
		});	
		
		// hide for when click on cancel
		$('a.cancel').click(function(){
			$('#EventBox').fadeOut();
			$('a.cancel').hide();
		});	
		
		// watermark input fields
		jQuery(function($){
		   
		   $("#EventInput").Watermark("What are you planning?");
		   $("#Where").Watermark("Where?");
		   $("#WhoInvited").Watermark("Who's Invited?");
		});
		jQuery(function($){

		    $("#EventInput").Watermark("watermark","#369");
			$("#Where").Watermark("watermark","#369");
			$("#WhoInvited").Watermark("watermark","#369");
			
		});	
		function UseData(){
		   $.Watermark.HideAll();
		   $.Watermark.ShowAll();
		}

	});	
	
	// show jquery calendar
	$(function() {
		$("#datepicker").datepicker();
	});
	
	function clearForm()
	{
		$('#EventInput').val("What are you planning?");
		$('#datepicker').val("Today");
		$('#WhoInvited').val("Who's Invited?");
		$('#Where').val("Where?");
		
		$('#EventBox').hide();
		$('a.cancel').hide();
	}
	
	// ]]>
</script>
<style type="text/css">
<!--
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
-->
</style></head>
<body>
<script src="js/bootstrap.min.js"></script>

<div class="main">
  <div class="lefttop1">
    <div class="lefttopleft"><img src="images/logo.jpg" width="94" height="21" /></div>
    <div class="lefttoright"><a href="request1.php"><img src="images/Untitled-1.png" width="15" height="15" border="0" /></a>
      <?php
	/*$con = mysql_connect('localhost','root',"");
	if (!$con)
	{
	die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("facebook", $con);*/

$result = mysql_query("SELECT * FROM friendlist WHERE firstname='".$_SESSION['SESS_FIRST_NAME'] ."' and status='pending' ORDER BY firstname ASC");
	
	$numberOfRows = MYSQL_NUMROWS($result);	?>
	
	<font size="2" color="red"><b><?php echo $numberOfRows;?></b></font> 
      <a href="messages.php"><img src="images/messages.png" width="15" height="15" border="0" /></a>
      <?php
	/*$con = mysql_connect('localhost','root',"");
	if (!$con)
	{
	die('Could not connect: ' . mysql_error());
	}

	mysql_select_db("facebook", $con);*/

$result = mysql_query("SELECT * FROM messages WHERE receiver='".$_SESSION['SESS_FIRST_NAME'] ."' and status='pending' ORDER BY receiver ASC");
	
	$numberOfRows = MYSQL_NUMROWS($result);?>	
	<font size="2" color="red"><b><?php echo $numberOfRows;?></b></font>
	</div>
  </div>
  <div class="righttop1">
    <div class="search">
      <form action="friends.php" method="GET">
        <input name="query" type="text" maxlength="30" class="textfield" />
      </form>
    </div>
    <div class="nav">
      <ul id="sddm">
        <li><a href="lol.php" onmouseover="mopen('m3')" onmouseout="mclosetime()">Home</a>
          <div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"> </div>
        </li>
        <li><a href="profile.php" onmouseover="mopen('m4')" onmouseout="mclosetime()">Profile</a>
          <div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"> </div>
        </li>
        <li><a onmouseover="mopen('m5')" onmouseout="mclosetime()">Account</a>
          <div id="m5" onmouseover="mcancelclosetime()" onmouseout="mclosetime()"> <a href="profile.php">
            <?php
/*$con = mysql_connect("127.0.0.1", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("facebook", $con);*/

$result = mysql_query("SELECT * FROM members WHERE FirstName='".$_SESSION['SESS_FIRST_NAME'] ."'");?>

<br /><?php
while($row = mysql_fetch_array($result))
  {?>

  <img width=70 height=90 alt='Unable to View' src='<?php echo $row["profImage"];?>'/>
  <br /><?php
  echo $_SESSION['SESS_FIRST_NAME']." ". $row["LastName"] ;
 
  		/*echo "<img width=50 height=50 alt='Unable to View' src='" . $row["location"] . "'>";
  		echo '<a href=http://localhost/PHP-Login/member-index.php?id=' . $row["friends_id"] . '>' . $row['firstname'] . '</a><br />';*/
		
  }

/*mysql_close($con);*/
?>
            </a> <a href="editfriends.php">Edit Friend</a> <a href="#">Account Setting</a> <a href="auto.htm">SearchFriend</a> <a href="index.php">Logout</a> </div>
        </li>
      </ul>
      <div style="clear:both"></div>
      <div style="clear:both"></div>
    </div>
  </div>
  <div class="left">
    <div class="propic">
      <?php
/*$con = mysql_connect("127.0.0.1", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("facebook", $con);*/
$id= $_SESSION['SESS_MEMBER_ID'];

$image=mysql_query("SELECT * FROM members WHERE member_id='$id'");
			$row=mysql_fetch_assoc($image);
			$_SESSION['imageko']= $row['profImage'];?>
			<div id="pic">
			<img width=106 height=140 alt='Unable to View' src='<?php echo $_SESSION['imageko'];?>'/>
			</div>
<!--mysql_close($con);-->
    </div>
    <div class="link style1">
      <p align="center"><a href="editpic.php" style="text-decoration:none;">Edit Profile Pic </a></p>
      <p align="center"><div id='basic-modal'><a class='basic' href="#" style="text-decoration:none;">Send message</a></div></p>
	 <div id="basic-modal-content">


	<form id="regForm" action="sent.php" method="post">

	Receiver
    <div class="input-container">
      <?php
	/*  $con = mysql_connect("localhost","root","");
	if (!$con)
 	 {
  	die('Could not connect: ' . mysql_error());
  	}

	mysql_select_db("facebook", $con);*/
	$name= mysql_query("select * from friendlist");?>

	<select name="receiver" id="user">
	<?php
 	while($res= mysql_fetch_assoc($name))
	{?>
	<option>
	<?php echo $res['firstname'];?>
	</option>
	<?php }?>
	</select>

	<!--mysql_close($con)-->
    </div>
	From:
   <div class="input-container">
    
        <input name="sender" id="sender" type="text" value="<?php echo $_SESSION['SESS_FIRST_NAME'];?>"/>
    
    </div>
   Content
    
  <div class="input-container">
     
     
        <textarea name="content" cols="30" rows="10" id="content"></textarea>
      
        <input name="status" type="hidden" id="status" value="pending"/>
        
   	 </div>
 	 
	  <input type="submit" class="greenButton" value="Sent" />
	  
	  

	</form>


	</div>

		<!-- preload the images -->
		<div style='display:none'>
			<img src='img/basic/x.png' alt='' />
		</div>
      <p align="center">&nbsp;</p>
    </div>
  </div>
 <div class="right">
 <div class="rightleft">
      <div class="list">
        <?php
/*$con = mysql_connect("127.0.0.1", "root", "");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("facebook", $con);*/

$result = mysql_query("SELECT * FROM photos WHERE uploadedby='".$_SESSION['SESS_MEMBER_ID'] ."'  ORDER BY RAND() LIMIT 5");


while($row = mysql_fetch_array($result))
  {?>
	<a href=http://localhost/PHP-Login/photocomment.php?id='<?php echo $row["photo_id"];?>'/> <img width=80 height=80 alt='Unable to View' src='<?php echo $row["location"];?>'/></a>
	&nbsp;
  <?php }?>

<!--mysql_close($con);
?>-->
      </div>
      <div class="shoutout">
        <form  name="form1" method="post" action="save.php">
          <textarea id="content13" name="message" cols="45" rows="2" onclick="this.value='';"></textarea>
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
/*$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("facebook", $con);
*/
$query  = "SELECT *,UNIX_TIMESTAMP() - date_created AS TimeSpent FROM message WHERE poster='".$_SESSION['SESS_FIRST_NAME'] ."' ORDER BY messages_id DESC";
$result = mysql_query($query);
while($row = mysql_fetch_assoc($result))
{?>
   	<div class="pic1">
	<img width=50 height=50 alt='Unable to View' src='<?php echo $row["picture"];?>'/>
	</div>
	<div class="message">
	Posted by <?php echo $row['user'];?>:<br></div><b><div class='postedby'><?php echo $row['messages'];?></b>
	<form action="like.php" method="post">
	<input type="hidden" name="com" value="<?php echo $row['messages_id'];?>">
	<input type="hidden" name="cam" value="<?php echo $_SESSION['SESS_FIRST_NAME'];?>">
	<input type="submit" Value="like" class="btn btn-mini btn-success">
	</form>
	<?php
	$result1 = mysql_query("SELECT * FROM bleh WHERE remarks='". $row['messages_id'] ."'");
	if($row2 = mysql_fetch_array($result1))
	{
		$numberOfRows = MYSQL_NUMROWS($result1);	
		$numberoflikes=$numberOfRows;
		$numberoflikes1=$numberOfRows-1;
		if  (($row2['remarksby'])==($_SESSION['SESS_FIRST_NAME']) || ($numberoflikes1 > 0))
		{
		?>
			<font color="green"><b>You & <?php echo $numberoflikes1;?></b></font> People like this
		<?php
		}
		elseif (($row2['remarksby'])==($_SESSION['SESS_FIRST_NAME'])&& ($numberoflikes1 == 0))
		{
		?>
			<font color="orange"><b>You</b></font> like this
		<?php
		}
		elseif ($numberoflikes > 0)
		{?>
			<font color="green"><b><?php echo $numberoflikes;?></b></font> people like this
		<?php
		}
  
  }
echo '<div class="delete">';
	echo '<font color="White">';
	echo '<a href=http://localhost/PHP-Login/deleteposthome.php?id=' . $row["messages_id"] .'>' . "DELETE" . '</a>';
	echo '</font>';	
	echo '&nbsp;';
	echo'</div>';
	echo '<br/>';?>
<font color="green">
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
{?>
<?php echo $seconds;?>
few seconds ago
<?php 
}		
elseif($days == 0 && $hours == 0)
{?>
<?php	echo $minutes;?>minutes ago<?php }?>
	</font>
	</div>
	<br/><br/>                                                <!--jjdgfsdjgfsk.dfhkdshfkjdsg,j-->
	<?php
$query1  = "SELECT *,UNIX_TIMESTAMP() - date_created AS CommentTimeSpent FROM postcomment WHERE id=" . $row['messages_id'] . " ORDER BY comment_id DESC LIMIT 4";
$result1 = mysql_query($query1);
while($row1 = mysql_fetch_assoc($result1))
{
	echo '<div class="postcomment">';
	?>
	<img width=30 height=30 alt='Unable to View' src='<?php echo $row1['pic'];?>'/>
	<?php
	echo '<div class="commentby">';
	echo '<font color="green">';
	echo $row1['commentedby'];
	echo '</font>';
	echo '&nbsp;&nbsp;';
	echo $row1['content'];
	echo '<div class="delete">';
	echo '<font color="White">';
	echo '<a href=http://localhost/PHP-Login/deletepostcommenthome.php?id=' . $row1["comment_id"] .'>' . "DELETE" . '</a>';
	echo '</font>';
	echo '&nbsp;';
	echo '</div>';
	echo '<br />';
	?>
	<font color="blue">
	<?php $days2 = floor($row1['CommentTimeSpent'] / (60 * 60 * 24));
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
			</font><?php				
	echo '</div>';
echo '</div>';
echo '<br />';
}
?>
<div class="fieldcomment">
	<form action="commentpost.php" method="post"> 
	<input type="hidden" name="postid" value="<?php echo $row['messages_id'];?>">
	<input type="hidden" name="user" value="<?php echo $_SESSION['SESS_FIRST_NAME'];?>"/>
	<input type="hidden" name="pic" value="<?php echo $_SESSION['SESS_LAST_NAME'];?>"/>     <!--<input type="hidden" name="pic" value="<?php/*'. $_SESSION['SESS_LAST_NAME'] .'*/?>">-->
	<input type="text" class="textbox" name="postcomment"/>
	</form>
</div>
<?php
} 

/*if (!mysql_query($query,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con)*/
?>
</div>
</div>
<div class="rightright">
		<div align="left">
			<h4 class="uiHeaderTitle">Events</h4>
			<a rel="facebox" class="cancel" href="javascript:void(0)">Cancel</a> 
		</div>
		<div align="left">
			<form action="" method="post" name="EventForm" id="EventForm">
			<input id="EventInput" name="EventInput" maxlength="40"  value="" />
			<br clear="all" />
			<div id="EventBox">
				<input type="text" id="datepicker" name="datepicker" maxlength="50" value="Today" />
				<select id="start_time_min" name="start_time_min">
				<option value="00:00">12:00 am</option>
				<option value="00:30">12:30 am</option>
				<option value="1:00">1:00 am</option>
				<option value="1:30">1:30 am</option>
				<option value="2:00">2:00 am</option>
				<option value="2:30">2:30 am</option>
				<option value="3:00">3:00 am</option>
				<option value="3:30">3:30 am</option>
				<option value="4:00">4:00 am</option>
              <option value="4:30">4:30 am</option>
              <option value="5:00">5:00 am</option>
              <option value="5:30">5:30 am</option>
              <option value="6:00">6:00 am</option>
              <option value="6:30">6:30 am</option>
              <option value="7:00">7:00 am</option>
              <option value="7:30">7:30 am</option>
              <option value="8:00">8:00 am</option>
              <option value="8:30">8:30 am</option>
              <option value="9:00">9:00 am</option>
              <option value="9:30">9:30 am</option>
              <option value="10:00">10:00 am</option>
              <option value="10:30">10:30 am</option>
              <option value="11:00">11:00 am</option>
              <option value="11:30">11:30 am</option>
              <option value="12:00">12:00 pm</option>
              <option value="12:30">12:30 pm</option>
              <option selected="selected" value="13:00">1:00 pm</option>
              <option value="13:30">1:30 pm</option>
              <option value="14:00">2:00 pm</option>
              <option value="14:30">2:30 pm</option>
              <option value="15:00">3:00 pm</option>
              <option value="15:30">3:30 pm</option>
              <option value="16:00">4:00 pm</option>
              <option value="16:30">4:30 pm</option>
              <option value="17:00">5:00 pm</option>
              <option value="17:30">5:30 pm</option>
              <option value="18:00">6:00 pm</option>
              <option value="18:30">6:30 pm</option>
              <option value="19:00">7:00 pm</option>
              <option value="19:30">7:30 pm</option>
              <option value="20:00">8:00 pm</option>
              <option value="20:30">8:30 pm</option>
              <option value="21:00">9:00 pm</option>
              <option value="21:30">9:30 pm</option>
              <option value="22:00">10:00 pm</option>
              <option value="22:30">10:30 pm</option>
              <option value="23:00">11:00 pm</option>
              <option value="23:30">11:30 pm</option>
            </select>
            <br clear="all" />
            <input id="Where" name="Where" maxlength="100" value="" />
            <br clear="all" />
            <input id="WhoInvited" name="WhoInvited" maxlength="100"  value="" />
            <br clear="all" />
            <input type="button" id="CreateEvent" class="btn btn-mini btn-success" value="Create Event"></div>
			</form>
			<br clear="all" />
			<div id="ShowEvents" align="center">
				<?php	include_once('event.php');?>
			</div>
      </div>
    </div>
  </div>
</div>
</body>
</html>

<form action="delete.php" method="post"
<?php
	if (isset($_GET['id']))
	{
$con = mysql_connect('localhost','root',"");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("facebook", $con);

$member_id = $_GET['id'];

//echo "SELECT * FROM members WHERE member_id = $member_id";
$result = mysql_query("SELECT * FROM friendlist WHERE friends_id = $member_id");

$row = mysql_fetch_array($result);
if (!$result) 
						{
						echo "wala";
						}
						else{
echo "<br />";
echo "<img width=200 height=200 alt='Unable to View' src='" . $row["location"] . "'> <br />";
  echo'<input type="text" name="useid" value="'. $row["friends_id"] .'"."<br>';
   echo'<input type="submit" name="addfriend" value="delete friends">';

mysql_close($con);
}
}
?>
</form>
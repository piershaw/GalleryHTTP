<?php
$photo = $_POST['photo'];
$con = mysql_connect("localhost","root","root");
$user = "admin";
if(!$con){
  	 die('Could not connect: ' . mysql_error());
}
mysql_select_db("gallary",$con);
$result = mysql_query("DELETE FROM photos WHERE picurl ='$photo'");
print($result);
//if 1 the its del 0 if not
mysql_close($con);
?>
<?php
$con = mysql_connect("localhost","root","root");

if(!$con){
  	 die('Could not connect: ' . mysql_error());
}

mysql_select_db("gallary",$con);
$result = mysql_query("SELECT * FROM photos");
while($row = mysql_fetch_array($result))
  {
  echo $row['picurl']."%";
  }

mysql_close($con);
?>
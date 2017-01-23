<?php
$conn = mysql_connect("localhost","root","root");
$user = "admin";
if(!$conn){
  	 die('Could not connect: ' . mysql_error());
}
mysql_select_db("gallary",$conn);
$query_Recordset1 = "SELECT picurl FROM photos";
$Recordset1 = mysql_query($query_Recordset1, $conn) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>all Photos</title>
</head>

<body>
<table border="0">
  <tr>
    <td>picurl</td>
  </tr>
  <?php do { ?>
    <tr>
      <td><?php echo $row_Recordset1['picurl']; ?></td>
    </tr>
    <?php } while ($row_Recordset1 = mysql_fetch_assoc($Recordset1)); ?>
</table>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>

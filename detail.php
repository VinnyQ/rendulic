<?php include('header.html'); ?>
<?php include('style.css'); ?>
<?php include('cn.php'); ?>
<?php

$title = $_GET["title"];
$result = mysql_query("SELECT * FROM `rendulic_data1`.`art_detail` WHERE `title` = '$title'", $connection) or die("error querying database");

while($result_ar = mysql_fetch_assoc($result)){
  $img = $result_ar['img'];
  $dimension = $result_ar['dimension'];
  $description = $result_ar['description'];
}
mysql_close();
?>

<div align="center" class="style1">
<table align="center" border="0" cellspacing="10" cellpadding="10" width="600">
	<tr>
		<td align="center" valign="top" colspan="3">
		<a href="<?php echo $prev ?>.php"><font class="header_small">Art Detail</font></a></td>
	</tr>
	<tr>
		<td align="center" valign="center" >
			<img src="images/data/<?php echo $img ?>" width=500 height=500 class="special" alt="<?php echo $title ?>" /></td>
	</tr>
	<tr>
		<td valign="top" >
			<div align="left" class="detail_header"><?php echo $title ?></div><br/>
			<div align="left" class="detail_style1">
<b>Size and media:</b> <?php echo $dimension ?><br/><br/>
<b>Artistic Inspiration:</b> <?php echo $description ?></div></td>
	</tr>
</table>
</div>
<br/>
<?php include('footer.html'); ?>
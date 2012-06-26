<?php include('header.html'); ?>
<?php include('style.css'); ?>
<?php include('cn.php'); ?>
<?php

  mysql_select_db("rendulic_data1", $connection);
  $result = mysql_query("SELECT * FROM `art_detail` WHERE `group` = 'art' ORDER BY `id`;", $connection) or die("error querying database");

?>
<div align="center">
<table align="center" border="0" cellspacing="10" cellpadding="10" width="80%">
	<tr>
		<td align="center" valign="top" colspan="3"><font class="header_small">Art Gallery</font></td>
	</tr>
<?php
  $i = 0;
  echo "	<tr>\n";
  while($result_ar = mysql_fetch_assoc($result)) {
    $title = $result_ar['title'];
    $img = $result_ar['img'];

    if (($i % 3 == 0) && ($i != 0)) {
      echo "	</tr>\n	<tr>\n";
    }
?>
		<td align="center" valign="center" >
			<a href="detail.php?title=<?php echo $title ?>&prev=page_art">
			<div class="style1">
			<img src="images/data/<?php echo $img ?>" width=250 height=250 class="special" title="<?php echo $title ?>" />
			<br/><?php echo $title ?></div></a></td>
<?php
    $i++;
  }  //end while $result_ar = mysql_fetch_assoc($result)

  echo "	</tr>\n";
?>
	<tr>
		<td colspan="3">&nbsp;</td>
	</tr>
</table>
</div>
<br/>
<?php mysql_close(); ?>
<?php include('contact.html'); ?>
<?php include('footer.html'); ?>

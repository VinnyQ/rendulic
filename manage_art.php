<?php include('header.html'); ?>
<?php include('style.css'); ?>
<?php include('cn.php'); ?>

<?php 
  $msg = $_GET["msg"];
  $msg_friendly = "";
  if ($msg == 'uploaded') {
    $msg_friendly = "File uploaded successfully.";
  }
  elseif ($msg == 'deleted') {
    $msg_friendly = "Deleted File.";
  }
  elseif ($msg == 'modified') {
    $msg_friendly = "File modified.";
  }
?>

<script language="JavaScript" type="text/javascript">
function verifyUpload() {
  theForm = document.uploadArt;

  if (theForm.file.value == '') {
    alert("Please enter a valid file.");
    theForm.file.focus();
    return false;
  }
  else if (theForm.new_art_title.value == '') {
    alert("Please enter a title.");
    theForm.new_art_title.focus();
    return false;
  }


  return true;
}

function deleteArt(theID, theTitle) {
  if (window.confirm("Are you sure you want to delete " + theTitle + "?")) {
    document.editArt.del_art_id.value = theID;
    document.editArt.action = "manage_art_delete.php";
    document.editArt.submit();
  }
}

function modifyArt(theID, theTitle) {
  if (window.confirm("Are you sure you want to modify " + theTitle + "?")) {
    var theEditForm = document.editArt;

    theEditForm.mod_art_id.value = theID;

    var theGroup = document.getElementById('art_group' + theID);
    theEditForm.mod_art_group.value = theGroup.value;

    var theTitle = document.getElementById('art_title' + theID);
    theEditForm.mod_art_title.value = theTitle.value;

    var theDimension = document.getElementById('art_dimension' + theID);
    theEditForm.mod_art_dimension.value = theDimension.value;

    var theDescription = document.getElementById('art_description' + theID);
    theEditForm.mod_art_description.value = theDescription.value;

    document.editArt.action = "manage_art_modify.php";
    document.editArt.submit();
  }
}
</script>

<div align="center">

<!-- new art upload form -->
<form method="post" name="uploadArt" action="manage_art_upload.php" enctype="multipart/form-data" onsubmit="return verifyUpload();">
<table align="center" border="0" cellspacing="10" cellpadding="10" >

<?php 
  if ($msg_friendly != "") {
    echo "<tr><td align=\"center\" colspan=\"2\"><font class=\"style1_msg\">" . $msg_friendly . "</font></td></tr>";
  }
?>

	<tr>
		<td align="center" valign="top" colspan="2"><font class="header_small">Upload Art</font></td>
	</tr>
	<tr>
		<td align="right" valign="top"><font class="detail_style1">Image:</font></td>
		<td align="left" valign="top"><input type="file" name="file" id="file" size="120" /></td>
	</tr>
	<tr>
		<td align="right" valign="top"><font class="detail_style1">Group:</font></td>
		<td align="left" valign="top">
		  <select id="new_art_group" name="new_art_group">
		    <option value="art">Art Gallery</option>
		    <option value="lighting">Lighting</option>
		    <option value="kitchen">Kitchen & Bath</option>
		  </select>
		</td>
	</tr>
	<tr>
		<td align="right" valign="top"><font class="detail_style1">Title:</font></td>
		<td align="left" valign="top"><input type="text" name="new_art_title" id="new_art_title" size="100"/></td>
	</tr>
	<tr>
		<td align="right" valign="top"><font class="detail_style1">Dimension:</font></td>
		<td align="left" valign="top"><textarea name="new_art_dimension" id="new_art_dimension" rows="4" cols="75"></textarea></td>
	</tr>
	<tr>
		<td align="right" valign="top"><font class="detail_style1">Description:</font></td>
		<td align="left" valign="top"><textarea name="new_art_description" id="new_art_description" rows="4" cols="75"></textarea></td>
	</tr>
	<tr>
		<td align="center" valign="top" colspan="2"><input type="submit" name="upload_button" value="Upload" /></td>
	</tr>
</table>
</form>

<br/>
<hr style="width:100%;height:1px;color:#333333" />
<br/>

<~-- edit art form -->
<form method="post" name="editArt" action="" onsubmit="" >
  <input type="hidden" name="del_art_id" value="" />
  <input type="hidden" name="mod_art_id" value="" />
  <input type="hidden" name="mod_art_group" value="" />
  <input type="hidden" name="mod_art_title" value="" />
  <input type="hidden" name="mod_art_dimension" value="" />
  <input type="hidden" name="mod_art_description" value="" />
<table align="center" border="0" cellspacing="10" cellpadding="10" width="80%">
	<tr>
		<td align="center" valign="top" colspan="6"><font class="header_small">Edit Art</font></td>
	</tr>
	<tr>
		<td align="left" valign="top"><font class="detail_header">Image</font></td>
		<td align="left" valign="top"><font class="detail_header">Group</font></td>
		<td align="left" valign="top"><font class="detail_header">Title</font></td>
		<td align="left" valign="top"><font class="detail_header">Dimension</font></td>
		<td align="left" valign="top"><font class="detail_header">Description</font></td>
		<td align="left" valign="top"><font class="detail_header">Action</font></td>
	</tr>

<?php
  $result = mysql_query("SELECT * FROM `rendulic_data1`.`art_detail` ORDER BY `id` desc", $connection) or die("error querying database");
  $i = 0;
  while($result_ar = mysql_fetch_assoc($result)) {
    $art_id = $result_ar['id'];
    $group = $result_ar['group'];
    $title = $result_ar['title'];
    $img = $result_ar['img'];
    $dimension = $result_ar['dimension'];
    $description = $result_ar['description'];
    $created = $result_ar['created'];

    //set group selected
    $group_art_selected = "";
    $group_lighting_selected = "";
    $group_kitchen_selected = "";
    if ($group == 'art') {
      $group_art_selected = " SELECTED";
    }
    elseif ($group == 'lighting') {
      $group_lighting_selected = " SELECTED";
    }
    elseif ($group == 'kitchen') {
      $group_kitchen_selected = " SELECTED";
    }

    //new row if mod x
    if (($i % 3 == 0) && ($i != 0)) {
      echo "	</tr>\n	<tr>\n";
    }
?>
	<tr>
		<td valign="top" class="style1">
			<a target="_blank" href="detail.php?title=<?php echo $title ?>&prev=upload">
			<img src="images/data/<?php echo $img ?>" width=100 height=100 class="special" title="<?php echo $title ?>" /></a><br/>
			<?php echo $img ?><br/>Uploaded: <?php echo date("F d Y", strtotime($created)) ?>
		</td>
		<td valign="top" class="detail_style1">group: 
		  <select id="art_group<?php echo $art_id ?>" name="art_group">
		    <option value="art" <?php echo $group_art_selected ?>>Art Gallery</option>
		    <option value="lighting" <?php echo $group_lighting_selected ?>>Lighting</option>
		    <option value="kitchen" <?php echo $group_kitchen_selected ?>>Kitchen & Bath</option>
		  </select>
		</td>
		<td valign="top" class="detail_style1">title: <input type="text" id="art_title<?php echo $art_id ?>" name="art_title" value="<?php echo $title ?>" /></td>
		<td valign="top" class="detail_style1">dimension: <textarea id="art_dimension<?php echo $art_id ?>" name="art_dimension" rows="4" cols="50"><?php echo $dimension ?></textarea></td>
		<td valign="top" class="detail_style1">description: <textarea id="art_description<?php echo $art_id ?>" name="art_description" rows="4" cols="50"><?php echo $description ?></textarea></td>
		<td valign="middle" class="detail_style1">
		  <input type="button" value="Save" onclick="modifyArt('<?php echo $art_id ?>', '<?php echo $title ?>');">
		  <input type="button" value="Delete" onclick="deleteArt('<?php echo $art_id ?>', '<?php echo $title ?>');">
		</td>
	<tr>
<?php
    $i++;
  }  //end while $result_ar = mysql_fetch_assoc($result)
?>
	<tr>
		<td colspan="6">&nbsp;</td>
	</tr>
</table>
</form>

</div>
<br/>
<?php mysql_close(); ?>
<?php include('contact.html'); ?>
<?php include('footer.html'); ?>
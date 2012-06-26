<?php include('cn.php'); ?>
<?php
  $delete_success = false;
  $upload_dir = "images/data/";

  $del_art_id = $_POST["del_art_id"];

  //get filename
  $result = mysql_query("SELECT `img` FROM `rendulic_data1`.`art_detail` WHERE `id` = '$del_art_id '", $connection) or die("error querying database");
  while($result_ar = mysql_fetch_assoc($result)){
    $img = $result_ar['img'];
  }
  //echo "Img: " . $img . "<br />";

  if ($img != '') {
    // delete art
    $sql_delete_art = sprintf("DELETE FROM `rendulic_data1`.`art_detail` WHERE `img`='%s'",
    mysql_real_escape_string($img));

    //echo 'Executing: ' . $sql_delete_art . '<br/>';
    mysql_query($sql_delete_art, $connection) or die('Error: ' . mysql_error());

    //echo "Deleting: " . $upload_dir . $img . "<br/>";
    unlink($upload_dir . $img);

    $delete_success = true;
  } //if $img != ''
?>
<?php mysql_close(); ?>
<?php 
  if($delete_success) {
    header("Location: manage_art.php?msg=deleted");
  }
?>
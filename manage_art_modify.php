<?php include('cn.php'); ?>
<?php
  $modify_success = false;

  $mod_id = $_POST["mod_art_id"];
  $group = $_POST["mod_art_group"];
  $title = $_POST["mod_art_title"];
  $dimension = $_POST["mod_art_dimension"];
  $description = $_POST["mod_art_description"];

  //echo "ID: " . $mod_id . "<br />";
  //echo "Group: " . $group . "<br />";
  //echo "Title: " . $title . "<br />";
  //echo "Dimension: " . $dimension . "<br />";
  //echo "Description: " . $description . "<br />";

  if ($mod_id >= 0) {

    $sql_modify_art = sprintf("UPDATE `rendulic_data1`.`art_detail` SET 
    `group` = '%s', 
    `title` = '%s', 
    `dimension` = '%s', 
    `description` = '%s' 
    WHERE `id` = '%s'",
    mysql_real_escape_string($group),
    mysql_real_escape_string($title),
    mysql_real_escape_string($dimension),
    mysql_real_escape_string($description),
    mysql_real_escape_string($mod_id));

    //echo 'Executing: ' . $sql_modify_art . '<br/>';
    mysql_query($sql_modify_art, $connection) or die('Error: ' . mysql_error());


    $modify_success = true;
  } //if id >= 0
?>
<?php mysql_close(); ?>
<?php 
  if($modify_success) {
    header("Location: manage_art.php?msg=modified");
  }
?>
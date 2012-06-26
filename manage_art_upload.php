<?php include('cn.php'); ?>
<?php
  $upload_success = false;

  $upload_dir = "images/data/";
  $upload_max_size = 10 * 1024 * 1024;  // 10 mb

  $file_type = $_FILES["file"]["type"];
  $file_size = $_FILES["file"]["size"];
  $file_size_kb = $file_size / 1024;
  $file_name = $_FILES["file"]["name"];
  $file_tmp = $_FILES["file"]["tmp_name"];

  $group = $_POST["new_art_group"];
  $title = $_POST["new_art_title"];
  $dimension = $_POST["new_art_dimension"];
  $description = $_POST["new_art_description"];

  //echo "Name: " . $file_name . "<br />";
  //echo "TMP: " . $file_tmp . "<br />";
  //echo "Type: " . $file_type . "<br />";
  //echo "Size: " . $file_size_kb . " Kb<br />";
  //echo "Group: " . $group . "<br />";
  //echo "Title: " . $title . "<br />";
  //echo "Dimension: " . $dimension . "<br />";
  //echo "Description: " . $description . "<br />";

  if ($file_size > $upload_max_size) {
    //size check
    echo "Error: file size too large (". $file_size_kb . " Kb), please keep size equal or less than " . ($upload_max_size / 1024) . " Kb.<br/>";
  }  //if size check

  elseif (($file_type != "image/gif") 
       && ($file_type != "image/jpeg") 
       && ($file_type != "image/png") 
       && ($file_type != "image/pjpeg")) 
  {
    echo "Error: Invalid file type (". $file_type . "), please only upload gif, jpg, png.<br/>";
  } //else if type check

  elseif ($_FILES["file"]["error"] > 0) {
    echo "Error: " . $_FILES["file"]["error"] . "<br />";
  }  //if file error

/*
  elseif (file_exists($upload_dir . $file_name)) {
    echo $file_name . " already exists.<br/>";
  }  //file_exists
*/

  else {
    // all restriction passed, save

    $sql_insert_art = sprintf("INSERT INTO `rendulic_data1`.`art_detail` (`group`, `title`, `img`, `dimension`, `description`) VALUES ('%s', '%s', '%s', '%s', '%s')",
    mysql_real_escape_string($group),
    mysql_real_escape_string($title),
    mysql_real_escape_string($file_name),
    mysql_real_escape_string($dimension),
    mysql_real_escape_string($description));

    //echo 'Executing: ' . $sql_insert_art . '<br/>';
    mysql_query($sql_insert_art, $connection) or die('Error: ' . mysql_error());

    move_uploaded_file($file_tmp, $upload_dir . $file_name);
    //echo "Stored in: " . $upload_dir . $file_name . "<br/>";

    $upload_success = true;
  } //else upload
?>
<?php mysql_close(); ?>
<?php 
  if($upload_success) {
    header("Location: manage_art.php?msg=uploaded");
  }
?>
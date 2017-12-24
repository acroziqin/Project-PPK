<?php
  include "db.php";
  $data = array();
  $q    = mysqli_query($con, "SELECT * FROM `post`");
  while ($row = mysqli_fetch_object($q)){
    $data[] = $row;
  }
  echo json_encode($data);
//  foreach ($data as d){
//    echo $d;
//  }
//  var_dump($data);
?>
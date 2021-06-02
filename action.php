<?php
session_start();
include 'server.php';

# logout query 

if (isset($_GET['signout'])) {
  $_SESSION['logstatus'] = 'inactive';
  header('location:loginadmin.php');
}

   # delete query

if (isset($_GET['delete'])) {
  if ($_SESSION['logstatus'] == 'active') {
    $id = $_GET['id'];
    $delquery = "delete from post where id = $id" ;
    $stat = mysqli_query($conn,$delquery);
    if ($stat) {
      echo 'success';
      header('location:blogadmin.php');
    }else {
      echo 'failed';
      echo $id;
      echo $_GET['delete'];
    }
  }
}


# update query

if (isset($_POST['updatepost'])) {
  $id = $_SESSION['id'];
  $name = $_POST['blogName'];
  $description = $_POST['shortDescription'];
  $content = $_POST['content'];
  $status = $_POST['status'];
  $imgfile = $_FILES['uploadImage'];

  $pathimg = 'blogsfeatureupload/' . $imgfile['name'];
  move_uploaded_file($imgfile['tmp_name'],$pathimg);
  
  $update = "update post set image = '$pathimg', topic = '$name', description = '$description', content = '$content', status = '$status' where id = '$id'";
  $exeupdate = mysqli_query($conn,$update);

  echo ($exeupdate)? header('location:blogadmin.php'):'failed';
    
}

?>
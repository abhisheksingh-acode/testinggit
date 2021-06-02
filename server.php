
<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'blogPost';

$conn = mysqli_connect($server,$user,$pass,$db);

if ($conn) {
   ?> 
   <!-- <script>
      alert('success connection');
   </script> -->
   <?php
}else{
   ?>
   <!-- <script>
      alert('failed connection');
   </script> -->
   <?php
}

?>
<?php
session_start();

include 'server.php';

if ($_SESSION['logstatus'] != 'active') {
   header('location:loginadmin.php');
}

// if () {
//    # code...
// }
if (isset($_POST['buttonadd'])) {
   
   $adminname = $_POST['AdminName'];
   $password = $_POST['password'];
   $file = $_FILES['profileimage'];

   $path = 'uploads/' . $file['name'] ;

move_uploaded_file($file['tmp_name'], $path);

   $edit = "update admin set username = '$adminname', password = '$password', image = '$path' ";
   mysqli_query($conn, $edit);  
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
   <title>Manage blog posts</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous" />
   <link rel="stylesheet" href="./aos/aos.css">
   <link rel="stylesheet" href="./css/main.css">
   <style>
      body {
         overflow-y: hidden;
      }

      td {
         vertical-align: middle;
         text-transform: capitalize;
      }
   </style>
</head>

<body class="bg-white">

   <header class="h-auto bg-dark sticky-top">
      <div class="navbar bg-dark container-fluid h-auto">
         <div class="nav-link"><a href="/"><img src="./images/logo/Group 1.png" alt="" width="200px"></a></div>
         <li class="nav-item dropdown pe-3">
            <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
               aria-expanded="false">
               USER
            </a>
            <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
               <li><a class="dropdown-item" href="editprofile.php">Edit Profile</a></li>
               <li><a class="dropdown-item" href="action.php?signout">Sign Out</a></li>
            </ul>
         </li>
      </div>
   </header>
   <div class="d-flex justify-content-start w-100 h-100">
      <aside class="bg-dark w-25 h-100 text-left d-flex flex-column justify-content-start pt-0 fw-bolder"
         id="blog-dashboard-left">
         <nav class="bg-danger"><a href="blogadmin.php" class="text-white btn">Blogs</a></nav>
         <nav><a href="blogadmin.php" class="text-danger btn">Mangage Post</a></nav>
         <nav><a href="addpost.php" class="text-white btn ">Add Post</a></nav>
         <hr>
      </aside>

      <section class="w-75 h-100 pt-4 mx-auto" id="postTableSection">
         <div class="table-blog w-auto mx-auto container d-flex justify-content-center">
            <form class="container mx-auto h-100 p-0 d-flex justify-content-around" method="POST"
               action="<?php echo htmlentities($_SERVER['PHP_SELF']) ;?>" enctype="multipart/form-data">
               <div class="left-section-form">

                  <?php
      $selectadmin = "select * from admin where id = 1";
      $fetchadmin = mysqli_query($conn,$selectadmin);

      $fetcharray = mysqli_fetch_array($fetchadmin); 
?>

                  <div class="profilePic d-flex justify-content-center border align-items-center"
                     style="width:300px; height:300px; overflow:hidden; border-radius:50%;">
                     <img src="<?php echo $fetcharray['image'] ; ?>" alt="" class="img-fluid bg-danger">
                  </div>
               </div>
               <div class="right-section-edit">
                  <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-label fw-bold">
                        Username</label>
                     <input type="text" placeholder="Name" value="<?php echo 
         $fetcharray['username'] ; ?>" name="AdminName" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                     <label for="exampleInputEmail1" class="form-label fw-bold">Password</label>
                     <input type="password" placeholder="New Password" value="" name="password" class="form-control"
                        id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>

                  <div class="mb-3">
                     <label for="exampleFormControlTextarea1" class="form-label fw-bold">Profile</label>
                     <input type="file" class="form-control" name="profileimage" id="fileinput" rows="3" />
                  </div>
                  <div class="text-center">
                     <input type="submit" name="buttonadd" class="btn btn-success mt-3" value="UPDATE" />
                  </div>
               </div>


         </div>
         </form>
   </div>

   </section>
   </div>

   <!-- scripts   -->
   <script src="./aos/aos.js"></script>
   <script src=" ./js/index.js"></script>
   <script>
      AOS.init();
   </script>
</body>

</html>
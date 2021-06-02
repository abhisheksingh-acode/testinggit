<?php
session_start();
include 'server.php';

if ($_SESSION['logstatus'] != 'active') {
   header('location:loginadmin.php');
}

if (isset($_POST['addpost'])) {
   $name = $_POST['blogName'];
   $description = $_POST['shortDescription'];
   $content = $_POST['content'];
   $status = $_POST['status'];
   $imgfile = $_FILES['uploadImage'];

   $pathimg = 'blogsfeatureupload/' . $imgfile['name'];
   move_uploaded_file($imgfile['tmp_name'],$pathimg);
   echo $pathimg;

   $insert = "insert into post (image,topic,description,content,status) VALUES ('$pathimg','$name','$description','$content','$status')" ;

   $fireInsert = mysqli_query($conn,$insert);

   if ($fireInsert) {
      echo 'success' ;
   }else{echo 'failed' ;};
}

  #edit query

  if (isset($_GET['edit'])) {
     $id = $_GET['id'];
     $_SESSION['id'] = $id;
   if ($_SESSION['logstatus'] == 'active') {
     $id = $_GET['id'];
     $select = "select * from post where id = $id" ;
     $stat = mysqli_query($conn,$select);
     $fetchselect = mysqli_fetch_array($stat);
     $edit_blogname = $fetchselect['topic'];
     $edit_image = $fetchselect['image'];
     $edit_content = $fetchselect['content'];
     $edit_description = $fetchselect['description'];
     $edit_status = $fetchselect['status'];
}};


?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>add post for blogs</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous" />
   <link rel="stylesheet" href="./aos/aos.css">
   <link rel="stylesheet" href="./texteditor/rte_theme_default.css">
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
              <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
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
         <nav><a href="blogadmin.php" class="text-white btn">Mangage Post</a></nav>
         <nav><a href="addpost.php" class="text-danger btn ">Add Post</a></nav>
         <hr>
      </aside>

      <section class="bg-white w-75 pt-4 mx-auto ps-2" id="addPostSection" >
 <form class="container mx-auto h-auto p-0 d-flex justify-content-around" method="POST" action="<?php echo (isset($_GET['edit']))? 'action.php':'addpost.php' ; ?>" enctype="multipart/form-data" >
            <div class="left-section-form">
               <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label fw-bold">Blog Name</label>
                  <input type="text" placeholder="Blog Name"
                     value="<?php echo (isset($_GET['edit'])) ? $edit_blogname : '' ; ?>" name="blogName"
                     class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
               </div>
               <div class="mb-3 ">
                  <label for="exampleFormControlTextarea1" name="shortDescription"
                     class="form-label fw-bold">Description</label>
                  <textarea class="form-control" placeholder="Short Description:" id="exampleFormControlTextarea1"
                     value="" name="shortDescription"
                      rows="3"><?php echo (isset($_GET['edit']))?$edit_description:'' ; ?>
                  </textarea>
               </div>
               <div class="mb-3 ">
                  <label for="exampleFormControlTextarea1" class="form-label fw-bold">Content</label>
                  <textarea class="form-control" name="content" id="postEditor" rows="3">
                  <?php echo (isset($_GET['edit'])) ? $edit_content : '' ; ?>
                  </textarea>
               </div>
            </div>
         
            <div class="right-section-form w-25">
            <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label fw-bold">Featured Image</label>
               <input type="file" class="form-control" name="uploadImage" id="fileinput1" rows="3" value="<?php echo (isset($_GET['edit'])) ? $edit_image : '' ; ?> "/>
               
            </div>
               <div class="mb-3 ">
                  <label for="exampleFormControlTextarea1" class="form-label fw-bold">Status</label>
                  <select name="status" class="form-select" id=""
                     value="">
                     <option value="draft">draft</option>
                     <option value="publish">publish</option>
                  </select>
               </div>
            <div class="text-center">
               <input type="submit" name="<?php echo (isset($_GET['edit'])) ? 'updatepost' : 'addpost' ; ?>"
               class="btn btn-success mt-3" value="<?php echo (isset($_GET['edit'])) ? 'UPDATE' : 'SAVE' ; ?>" />
            </div>
            
   </div>
   </form>
   </section>
   </div>

   <!-- scripts   -->
   <script src="./aos/aos.js"></script>
   <script src="./texteditor/rte.js"></script>
   <script type="text/javascript" src='/richtexteditor/plugins/all_plugins.js'></script>
   <script src=" ./js/index.js"></script>
   <script>
      var editor1cfg = {}
      editor1cfg.toolbar = "basic";
      var postEditor = new RichTextEditor('#postEditor', editor1cfg)
      AOS.init();
   </script>
</body>

</html>
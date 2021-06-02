<?php
session_start();
$_SESSION['logstatus'];


if (isset($_POST['adminSign'])) {
     $username = $_POST['username'];
     $adminPass = $_POST['adminPass'];
     if ($username == 'admin' && $adminPass == 'admin') {
     $_SESSION['logstatus'] = 'active';
      header('location:blogadmin.php');
     }else {
      echo 'failed to login';
   }
}
     ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin Login</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
      crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous" />
   <link rel="stylesheet" href="./css/main.scss">
</head>

<body>


   <div class="w-100 h-100 d-flex justify-content-center adminLoginPage align-items-center"
      id="adminLoginPage">

      <div class="sideLoginContainer w-25 h-100 bg-white ms-auto d-flex align-items-center">
         <form class="container mx-auto p-0 d-flex justify-content-around" method="POST" action="loginadmin.php">
            <div class="left-section-form">
               <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Sign in below:</label>
                  <input type="text" placeholder="Username" name="username" class="form-control">
               </div>
               <div class="mb-3">
                  <input type="password" placeholder="password" name="adminPass" class="form-control"
                     id="exampleInputEmail1" aria-describedby="emailHelp">
               </div>

               <div class="text-center">
                  <input type="submit" name="adminSign" class="btn btn-secondary mt-3" value="SIGN IN" />
               </div>

            </div>

         </form>
      </div>

   </div>




   <!-- scripts   -->
   <script src="./aos/aos.js"></script>
   <script src=" ./js/index.js"></script>
   <script>
      AOS.init();
   </script>
</body>

</html>
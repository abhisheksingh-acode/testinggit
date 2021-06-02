<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>blogs</title>
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
</head>

<body class="spot-bg-clr">
   <!-- social-bar-fixed  -->
   <div class="social-fixed"></div>
   <!-- header  -->
   <header>
      <div class="navigation ">
         <ul class="">
            <li class="nav-item">
               <a class="nav-link" href="/">HOME</a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#collapseabout"
                  id="navbarDropdown about" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                  aria-controls="collapseabout">
                  ABOUT
               </a>
            </li>
            <div class="collapse" id="collapseabout">
               <div class="p-0 card-body">
                  <li><a class="dropdown-item" href="about.html">ABOUT US</a></li>
                  <li><a class="dropdown-item" href="ourDirector.html">OUR DIRECTOR</a></li>
                  <li><a class="dropdown-item" href="ourTeam.html">OUR TEAM</a></li>
               </div>
            </div>
            <li class="nav-item">
               <a class="nav-link" href="service.html">SERVICES</a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#collapsesector"
                  id="navbarDropdown about" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                  aria-controls="collapseabout">
                  SECTORS
               </a>
            </li>
            <div class="collapse" id="collapsesector">
               <div class="p-0 card-body">
                  <li><a class="dropdown-item" href="sectors.html">OUR SECTORS</a></li>
                  <li><a class="dropdown-item" href="whatsetmagi.html">WHAT SETS MAGI-A</a></li>
               </div>
            </div>
            <li class="nav-item">
               <a class="nav-link" href="projects.html">PROJECTS</a>
            </li>
            <li class="nav-item">
               <a class="nav-link active" href="blogs.html">BLOG</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="contactUs.html">CONTACT</a>
            </li>

         </ul>
      </div>
      <span class="bar d-block d-md-none" onclick="expand()"></span>

      <nav class="navbar navbar-expand-md navbar-dark fixed-top py-0 px-0 ">
         <div class="container py-4">
            <a class="navbar-brand " href="/"><img src="images/magiLogo.svg" alt="" class="" width="350px"></a>
            <button class="navbar-toggler" type="button" style="width: 100px;" onclick="expand()">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse d-md-block" id="navbarSupportedContent">
               <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item ">
                     <a class="nav-link" aria-current="page" href="/">HOME</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="about.html" id="navbarDropdown about" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        ABOUT
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="about.html">ABOUT US</a></li>
                        <li><a class="dropdown-item" href="ourDirector.html">OUR DIRECTOR</a></li>
                        <li><a class="dropdown-item" href="ourTeam.html">OUR TEAM</a></li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="service.html">SERVICES</a>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="about.html" id="navbarDropdown sectors" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        SECTORS
                     </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="sectors.html">OUR SECTORS</a></li>
                        <li><a class="dropdown-item" href="whatsetmagi.html">WHAT SETS MAGI-A</a></li>
                     </ul>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="projects.html">PROJECTS</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link active" href="blogs.html">BLOG</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="contactUs.html">CONTACT</a>
                  </li>

               </ul>
            </div>
         </div>
      </nav>
   </header>


   <!-- blogs section home  -->
   <div id="blogs-home-section">
      <!-- overlay rectangle  -->
      <img src="./images/Path 546.png" alt="" class="overlay-blue">
      <!-- overlay rectangle  -->
      <div class="text-area-blogs text-uppercase">
         <h1 class="blogs-home-title os-regular text-white p-3">OUR <span class="spot-clr">BLOG</span></h1>
         <p class="os-light sectors-tagline">WHAT <span class="spot-clr os-bold">MAGI-A</span> SPEAKS</p>
      </div>
   </div>

   <!-- blogs post section  -->

   <div class="blog-posts-container ">

   <?php
   
   include 'server.php';
   $authorselect = 'select * from admin where id = 1' ;
   $authorfire = mysqli_query($conn,$authorselect);
   $fetchauthor = mysqli_fetch_array($authorfire);

   $selectPosts = "select * from post where status = 'publish' order by id desc" ;
   $firequery = mysqli_query($conn,$selectPosts);  

   while ($fetch_posts_array = mysqli_fetch_array($firequery)) {
      
      ?>
   <div class="blog-post">
         <h4 class="blog-post-topic w-75">
            <?php echo $fetch_posts_array['topic']; ?>
         </h4>
         <ul class="profile-list">
            <li class="profile">
               <img src="<?php echo $fetchauthor['image'] ;?>" alt="" class="blog-post-profile rounded-circle" width="40px" height="40px">
               <span class="profile-name">
               <?php echo $fetchauthor['username']; ?>
               </span>
            </li>
            <li class="date"><img src="./images/icons/Icon ionic-ios-time.png" alt="">
            <?php echo $fetch_posts_array['date']; ?>
         </li>
            <li class="like"><img src="./images/icons/Icon ionic-ios-heart.png" alt=""> 1.2M</li>
            <li class="comment"><img src="./images/icons/Icon material-mode-comment.png" alt=""> 55K</li>
            <li class="share"><img src="./images/icons/Icon awesome-share-alt.png" alt=""></li>
         </ul>

         <div class="blog-post-feature-img-box">
            <img src="<?php echo $fetch_posts_array['image'] ; ?>" alt="">
         </div>

         <div class="blog-post-para">
         <?php echo $fetch_posts_array['content']; ?>
         </div>
      </div>


  <?php }
?>
    
   </div>

   <!-- recent post section aside  -->

   <div class="recent-post-div ">

      <h3 class="pop-semi-bold recent-heading fs-5">Recent Topics</h3>
      <ul class="recent-post-list-link">
         <?php
 $selectPosts = 'select * from post ' ;
 $firequery = mysqli_query($conn,$selectPosts);
      while ($fetch_posts_array = mysqli_fetch_array($firequery)) {
         ?> 
         
         <li><a href=""><?php echo $fetch_posts_array['topic'] ; ?></a></li>
    <?php  }
?>
        
      </ul>
   </div>


   <!-- footer  -->

   <div class="container-fluid mx-auto w-100 h-100 footer-bg d-flex flex-column justify-content-center  ">
      <!-- footer main container -->


      <div
         class="upperfooter row w-100 d-flex justify-content-center justify-content-md-around align-items-center mx-auto py-3">

         <div class="form-container col-12 col-md-4 mx-auto d-flex flex-column justify-content-center">
            <h5 class="text-uppercase text-center os-regular">reach out to us</h5>

            <form action="" method="get" class="form-footer col-3">
               <div class="form-input-control">
                  <div class="label">
                     <label for="name">Name</label>
                  </div>
                  <input type="text" required placeholder="Enter Your Name" name="name">
               </div>
               <div class="form-input-control">
                  <div class="label">
                     <label for="email">Email</label>
                  </div>
                  <input type="email" required placeholder="Enter Your Email" name="email">
               </div>
               <div class="form-input-control">
                  <div class="label">
                     <label for="phone">Phone</label>
                  </div>
                  <input type="number" required placeholder="Enter Your Phone" name="phone">
               </div>
               <div class="form-input-control">
                  <div class="label">
                     <label for="message">Message</label>
                  </div>
                  <input type="text" required placeholder="Write Your Message" name="message" />
               </div>
               <div class="form-input-control mt-3 px-4"></div>
               <button class="btn btn-dark os-light rounded-pill d-block mx-auto py-1" style="letter-spacing: 3px;"
                  type="submit">SUBMIT</button>
            </form>
         </div>

         <div class="address col-12 col-md-5">

            <div class="col-auto row d-flex flex-column justify-content-between align-items-center text-center">
               <!-- logo -->
               <div class="d-none d-md-block">
                  <img src="images/magiLogo.svg" alt="logo" width="200px" height="100px">
               </div>
               <!-- address -->
               <div class=" text-white d-none d-md-block">
                  <h4 class="company-heading m-0 p-0 el-bold">MAGIA HOSPITALITY & CONSULTANCY</h4>
                  <address class="text-center pop-x-light">
                     Building No. XX New Delhi 11000X <br>
                     Email: info@magia.com <br>
                     Phone: +91 XXXXXXXXXX
                  </address>
               </div>
               <!-- share follow -->
               <div class=" text-white social-icons">
                  <h3 class="mb-5 os-light d-none d-md-block">FOLLOW US</h3>
                  <div class="icons d-flex justify-content-center align-items-center">
                     <a href="" class="fb"><i class="fab fa-facebook-f"></i></a>
                     <a href="" class="tw"><i class="fab fa-twitter"></i></a>
                     <a href="" class="li"><i class="fab fa-linkedin-in"></i></a>
                     <a href="" class="yt"><i class="fab fa-youtube"></i></a>
                  </div>
               </div>
            </div>
         </div>

         <div class="top-btn d-none d-lg-flex col-12 col-md-3 align-items-center justify-content-center ">
            <!-- <a class="col-2 bg-none text-white d-flex align-items-end justify-content-end " href="#home"> -->
            <i class="fas fa-arrow-up text-dark bg-warning px-3 py-3 rounded-circle"></i>
            <!-- </a> -->
         </div>
      </div>

      <ul
         class="list-unstyled lowerFooter p-0 mx-auto container-fluid d-flex justify-content-between align-items-center">

         <li class="footer-items grey-clr">All Rights Reserved <span class="text-uppercase text-white"> 2021
               magia.com</span></li>

         <li class="footer-items grey-clr">Designed By <span class="text-uppercase text-white">Awarno.com</span></li>
      </ul>
   </div>


   <!-- scripts   -->
   <script src="./aos/aos.js"></script>
   <script src=" ./js/index.js"></script>
   <script>
      AOS.init();
   </script>
</body>

</html>
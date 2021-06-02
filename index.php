<!DOCTYPE html>
<html lang="en">

<head>
  <!-- <?php include 'head.php' ; ?> -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- bootstrap js bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
  <!-- bootstrap cdn css -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

  <!-- swiper css  -->
  <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" /> -->
  <link rel="stylesheet" href="./swiper/swiper-bundle.min.css" />
  <!-- font awsome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" />
  <!-- external stylesheet -->
  <link rel="stylesheet" href="css/main.css">


  <title>Home magi-a</title>
</head>

<body class="bg-dark">
  <!-- social-bar-fixed  -->
  <div class="social-fixed"></div>

  <!-- header navbar -->

  <header>
    <div class="navigation ">
      <ul class="">
        <li class="nav-item">
          <a class="nav-link active" href="/">HOME</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#collapseabout" id="navbarDropdown about"
            role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-controls="collapseabout">
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
          <a class="nav-link dropdown-toggle" data-bs-toggle="collapse" href="#collapsesector" id="navbarDropdown about"
            role="button" data-bs-toggle="dropdown" aria-expanded="false" aria-controls="collapseabout">
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
          <a class="nav-link" href="blogs.php">BLOG</a>
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
              <a class="nav-link active" aria-current="page" href="/">HOME</a>
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
              <a class="nav-link" href="blogs.php">BLOG</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactUs.html">CONTACT</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>
  </header>

  <!-- header navbar ends -->

  <div class="swiper-container h-100 w-100 swiperMain">
    <div class="swiper-wrapper">

      <!-- slide first -->
      <div class="swiper-slide">
        <!-- home slider -->

        <div class="swiper-container homeSlider">

          <div class="swiper-wrapper">
            <!-- slider starts  -->
            <div class="swiper-slide " id="#home">
              <div
                class="container-fluid h-100 text-white p-0 mx-auto d-flex flex-column justify-content-center align-items-center "
                id="home-carousel">
                <div class="text-content-home text-center">
                  <h4 class="os-light side-flags" id="start-yours-home">
                    start <span class="spot-clr">your</span>
                  </h4>
                  <h1 class="os-regular my-4 display-2 home-heading">FOOD & <br> <span class="spot-clr">BEVERAGE</span>
                  </h1>
                  <p class="os-light home-tagline"><span class="spot-clr fw-bold">Magi-a,</span> the new benchmark in
                    the consultancy industry</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide ">
              <div
                class="container-fluid h-100 text-white p-0 mx-auto d-flex flex-column justify-content-center align-items-center "
                id="home-carousel-2">
                <div class="text-content-home text-center">
                  <h4 class="os-light side-flags" id="start-yours-home">
                    start <span class="spot-clr">your</span>
                  </h4>
                  <h1 class="os-regular my-4 display-2 home-heading">FOOD & <br> <span class="spot-clr">BEVERAGE</span>
                  </h1>
                  <p class="os-light home-tagline"><span class="spot-clr fw-bold">Magi-a,</span> the new benchmark in
                    the consultancy industry</p>
                </div>
              </div>
            </div>
            <div class="swiper-slide ">
              <div
                class="container-fluid h-100 text-white p-0 mx-auto d-flex flex-column justify-content-center align-items-center "
                id="home-carousel-3">
                <div class="text-content-home text-center">
                  <h4 class="os-light side-flags" id="start-yours-home">
                    start <span class="spot-clr">your</span>
                  </h4>
                  <h1 class="os-regular my-4 display-2 home-heading">FOOD & <br> <span class="spot-clr">BEVERAGE</span>
                  </h1>
                  <p class="os-light home-tagline"><span class="spot-clr fw-bold">Magi-a,</span> the new benchmark in
                    the consultancy industry</p>
                </div>
              </div>
            </div>
            <!-- slider ends  -->
          </div>

          <div class="swiper-pagination homePagination"></div>

        </div>

        <!-- home slider ends -->
      </div>


      <!-- slide second  -->
      <div class="swiper-slide ">

        <!-- what we do section -->
        <div class="container-fluid w-100 mx-auto h-100 d-flex flex-column justify-content-around"
          style="background:#F9F7F2;">
          <div class="container-md container-fluid mx-auto text-center p-0">

            <h1 class="side-flags-dark os-light wwd-h">
              WHAT <span class="spot-clr os-bold text-shadow">WE DO</span></h1>
            <p class="text-center mx-auto pop-x-light" id="what-we-do-para"><span class="pop-medium">Magi-a</span>
              hospitality and food consultancy is a leading chain of consultancy firm, with the sole purpose of turning
              your restaurant into your customer’s dream restaurant. We provide consultancy and management services
              along with planning, designing, execution and staffing, to new & existing restaurant owners</p>

          </div>

          <div
            class="feature-icons container-md container-fluid mx-auto text-center text-uppercase d-flex   justify-content-center flex-wrap flex-1 align-items-center mb-4 p-0 gy-2 os-light">
            <div class="">
              <div class="img-box-white">
                <img src="./images/avatar.svg" alt="img" class="feature-images">
              </div>
              <br>
              <span class="pe-2">CONSULTATION</span>
            </div>
            <div class="">
              <div class="img-box-white">
                <img src="./images/restaurant.svg" alt="img" class="feature-images">
              </div>
              <br>
              <span>Complete Setup</span>
            </div>
            <div class="">
              <div class="img-box-white">
                <img src="./images/plan.svg" alt="img" class="feature-images">
              </div>
              <br>
              <span>Strategic Planning </span>
            </div>
            <div class="">
              <div class="img-box-white">
                <img src="./images/project-management.svg" alt="img" class="feature-images">
              </div>
              <br>
              <span class="ps-3">Conceptualisation</span>
            </div>

          </div>

        </div>
        <!-- what we do section ends-->



      </div>
      <!-- slide third -->

      <!-- our portfolio section-->
      <div class="swiper-slide" id="our-portfolio">


        <div class="container-fluid h-100 text-center text-white d-flex flex-column justify-content-around">
          <div class="title-our-service container-md">
            <h6 class="text-center text-white side-flags my-5 os-light">OUR PORTFOLIO</h6>

            <h1 class="os-light ">OUR WORK SPEAKS VOLUMES</h1>
          </div>

          <div class="swiper-container swiper2 d-flex flex-column justify-content-center">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide slide1"><img src="./images/portfolio/portfolio1.JPG" alt=""
                  class="slide-img-box img-fluid"></div>
              <div class="swiper-slide slide2"><img src="./images/portfolio/portfolio2.JPG" alt=""
                  class="slide-img-box img-fluid"></div>
              <div class="swiper-slide slide3"><img src="./images/portfolio/portfolio3.JPG" alt=""
                  class="slide-img-box img-fluid"></div>
              <div class="swiper-slide slide4"><img src="./images/portfolio/portfolio4.JPG" alt=""
                  class="slide-img-box img-fluid"></div>
              <div class="swiper-slide slide5"><img src="./images/portfolio/portfolio5.JPG" alt=""
                  class="slide-img-box img-fluid"></div>
              <div class="swiper-slide slide6"><img src="./images/portfolio/portfolio6.JPG" alt=""
                  class="slide-img-box img-fluid"></div>
              <div class="swiper-slide slide7"><img src="./images/portfolio/portfolio7.jpeg" alt=""
                  class="slide-img-box img-fluid"></div>
              <div class="swiper-slide slide8"><img src="./images/portfolio/portfolio8.jpg" alt=""
                  class="slide-img-box img-fluid"></div>
              <div class="swiper-slide slide9"><img src="./images/portfolio/portfolio9.jpg" alt=""
                  class="slide-img-box img-fluid"></div>
              <div class="swiper-slide slide10"><img src="./images/portfolio/portfolio10.jpg" alt=""
                  class="slide-img-box img-fluid"></div>
              <div class="swiper-slide slide11"><img src="./images/portfolio/portfolio11.jpg" alt=""
                  class="slide-img-box img-fluid"></div>
              <div class="swiper-slide slide12"><img src="./images/portfolio/portfolio12.jpg" alt=""
                  class="slide-img-box img-fluid"></div>
              <div class="swiper-slide slide13"><img src="./images/portfolio/portfolio13.jpg" alt=""
                  class="slide-img-box img-fluid"></div>
              <div class="swiper-slide slide14"><img src="./images/portfolio/portfolio14.jpg" alt=""
                  class="slide-img-box img-fluid"></div>
              <div class="swiper-slide slide15"><img src="./images/portfolio/portfolio15.jpeg" alt=""
                  class="slide-img-box img-fluid"></div>
              <div class="swiper-slide slide16"><img src="./images/portfolio/portfolio16.jpeg" alt=""
                  class="slide-img-box img-fluid"></div>
              <div class="swiper-slide slide17"><img src="./images/portfolio/portfolio17.jpeg" alt=""
                  class="slide-img-box img-fluid"></div>
              <div class="swiper-slide slide18"><img src="./images/portfolio/portfolio18.jpeg" alt=""
                  class="slide-img-box img-fluid"></div>
              <div class="swiper-slide slide19"><img src="./images/portfolio/portfolio19.jpeg" alt=""
                  class="slide-img-box img-fluid"></div>
              <div class="swiper-slide slide20"><img src="./images/portfolio/portfolio20.jpeg" alt=""
                  class="slide-img-box img-fluid"></div>
              <div class="swiper-slide slide21"><img src="./images/portfolio/portfolio21.png" alt=""
                  class="slide-img-box img-fluid"></div>

            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination portfolioPagination"></div>

            <!-- If we need navigation buttons -->
            <!-- <div class="swiper-button-prev"></div> -->
            <!-- <div class="swiper-button-next"></div> -->

            <!-- If we need scrollbar -->
            <!-- <div class="swiper-scrollbar"></div> -->
          </div>


        </div>

        <!-- our portfolio section ends-->

      </div>
      <!-- slide fourth -->

      <div class="swiper-slide">

        <!-- our services section  -->

        <div
          class="container-fluid mx-auto p-0 spot-bg-clr h-100 text-center d-flex flex-column justify-content-around align-items-center"
          id="our-service">
          <div class="services-text text-center">
            <h5 class="text-dark side-flags-dark os-light text-shadow">OUR <span
                class="spot-clr os-bold">SERVICES</span></h5>
            <br>
            <p class="pop-x-light "><span class="pop-medium">Magi-a</span> serves a range of array consulting services
              from restaurant consulting to complete setup</p>
          </div>

          <!-- cards  services -->

          <div class="swiper-container serviceSwiper ">

            <div class="swiper-wrapper">

              <div class="swiper-slide pop-light">
                <div class="card-service col-12 col-md-3">
                  <ul>
                    <li>Concept Creation</li>
                    <li>Project Creation</li>
                    <li>Vendor</li>
                    <li>Contractual Support</li>
                    <li>Vendors Managment</li>
                  </ul>
                  <a href="#" class="text-dark text-uppercase pop-light">Read More <i><img
                        src="./images/Icon feather-arrow-right.svg" alt="" class="img-fluid"></i></a>
                </div>
              </div>
              <div class="swiper-slide ">
                <div class="card-service col-12 col-md-3">
                  <ul>
                    <li>Bar Creation</li>
                    <li>HR & Training</li>
                    <li>SOP & Planning</li>
                    <li>Marketing Creation</li>
                    <li>Software Creation</li>
                  </ul>
                  <a href="#" class="text-dark text-uppercase pop-light">Read More <i class=""><img
                        src="./images/Icon feather-arrow-right.svg" alt="" class="img-fluid"></i></a>
                </div>
              </div>
              <div class="swiper-slide ">
                <div class="card-service col-12 col-md-3">
                  <ul>
                    <li>Business Advantage</li>
                    <li>Audit Program</li>
                    <li>Food Styling</li>
                    <li>Complete Trunkey Solutions</li>
                    <li>Financial Advisory</li>
                  </ul>
                  <a href="#" class="text-dark text-uppercase pop-light">Read More <i class=""><img
                        src="./images/Icon feather-arrow-right.svg" alt="" class="img-fluid"></i></a>
                </div>
              </div>

            </div>
            <div class="swiper-pagination d-md-none servicePagination"></div>
            <!-- 
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div> -->

          </div>

        </div>

        <!-- our services section ends -->

      </div>

      <!-- quote section  -->
      <div class="swiper-slide h-100" id="quoteBg">

        <div
          class="container-fluid h-100 w-100 mx-auto p-0 text-uppercase text-white d-flex flex-column justify-content-center align-items-center">
          <div class=" w-100 h-75 d-flex flex-column justify-content-evenly align-items-center">
            <h1 class="text-white os-regular">IN ORDER TO BE <br /> IRREPLACEABLE </h1>
            <p class="os-light fs-adjust" style="letter-spacing:13px;" id="quote-para">one must always be diffrent
            </p>
            <p class="os-light" style="letter-spacing:3px;">BY</p>
            <h3 class="moderline m-0"><span style="letter-spacing: 8px; font-size: 27px;color: white;"> kuvam</span>
              gujral
            </h3>
          </div>

        </div>

      </div>

      <!-- cuisins we excel in  -->

      <div class="swiper-slide spot-bg-clr">

        <div class="container-fluid h-100  text-center ">
          <h2 class="text-dark os-light excel-in-pos text-uppercase text-shadow">cuisines <span
              class="spot-clr os-bold ">we excel in</span></h2>

          <div
            class="container-md d-md-flex container-fluid h-75 d-sm-flex justify-content-around justify-md-content-between  align-items-md-center text-left"
            id="we-excel-in">

            <div id="tilt-img" class="d-none d-sm-block d-md-block">
              <img src="images/tiltImg.svg" alt="" class="img-fluid">
            </div>
            <div class="ul-box d-flex">
              <ul class="pop-x-light">
                <li>Molecular Gastronomy</li>
                <li>Modern Indian</li>
                <li>Modern Indian</li>
                <li>European Cuisine</li>
                <li>Authentic Mughlai</li>
                <li>Continental & Indo-Chinese</li>
                <li>Vietnamese</li>
              </ul>
              <!-- left ul  -->
              <ul class="pop-x-light">
                <li>Arabian</li>
                <li>Tea & Coffee</li>
                <li>Deserts</li>
                <li>Himalayan</li>
                <li>Salads</li>
                <li>Moctails & Cocktails</li>
              </ul>
            </div>
            <!-- right ul  -->
          </div>
        </div>


      </div>


      <!-- testimonial section  -->
      <div class="swiper-slide">

        <div class="container-fluid spot-bg-clr h-75 ">

          <div class="container h-100 text-center mx-auto" id="testimonials-pos">

            <div class="swiper-container mx-auto bg-white mySwiper p-0">
              <h3 class="text-dark mx-auto text-uppercase side-flags-dark os-light mt-4 text-shadow">clients <span
                  class="spot-clr os-bold">testimonials</span></h3>
              <div class="swiper-wrapper ">
                <div class="swiper-slide">

                  <div class="cont text-center">
                    <img src="images/lemon.png" class="slider-sd-img" alt="" class="img-fluid" width="200px"
                      height="250px" /> <br /> <br>
                    <span class="pop-light text-shadow"> <span class="pop-medium">Johnas -</span> Director, Blk </span>
                    <i class="fas fa-play play-center"></i>
                  </div>
                </div>
                <div class="swiper-slide">

                  <div class="cont text-center">
                    <img src="images/test2.png" class="slider-sd-img" alt="" class="img-fluid" width="200px"
                      height="250px" /> <br /> <br>
                    <span class="pop-light text-shadow"> <span class="pop-medium">Ankit -</span> Manager, Slo </span>
                    <i class="fas fa-play play-center"></i>
                  </div>
                </div>
                <div class="swiper-slide">

                  <div class="cont text-center">
                    <img src="images/test3.png" class="slider-sd-img" alt="" class="img-fluid" width="200px"
                      height="250px" /> <br /> <br>
                    <span class="pop-light text-shadow"> <span class="pop-medium">Deepak</span> Executive, Blk </span>
                    <i class="fas fa-play play-center"></i>
                  </div>
                </div>

              </div>
              <div class="swiper-pagination testimonialPagination"></div>
            </div>

          </div>

        </div>

      </div>



      <!-- footer section  -->
      <div class="swiper-slide">

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
              <div class="swiper-contaier">
                <div class="swiper-wrapper">
                </div>
                <div class="mainPagination cst-btn">
                </div>
              </div>
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

      </div>
    </div>

    <div class="swiper-pagination mainPagination"></div>
  </div>


  <script src="./swiper/swiper-bundle.min.js"></script>
  <!-- script  -->
  <script src=" ./js/index.js"></script>
</body>

</html>
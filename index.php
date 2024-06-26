
<?php
session_start();
if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] !== true) {
    header("Location: login.php");
    exit;
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travelling Tour</title>
  <link rel="stylesheet" href="assest/style1.css">
  <!-- Bootstrap Link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    
  <!-- Bootstrap Link -->
  <!-- Font Awesome Cdn -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Font Awesome Cdn -->
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
  <!-- Google Fonts -->
  <!-- FavIcon -->
  <link rel="apple-touch-icon" sizes="180x180" href="assest/FavIcon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assest/FavIcon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assest/FavIcon/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <!-- FavIcon End -->

</head>

<body>

<?php require '_nav.php'?>
  <!-- Header -->
  <section id="head" class="min-vh-100 d-flex align-items-center text-center">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <video class="video " src="assest/images/Video.mp4" autoplay muted loop></video>
          <h4 class="text-uppercase text-black fw-bold display-5">KEEP CALM AND TRAVEL ON!!!</h3>
            <h5 class="text-black mt-3 mb-4 display-8 fw-bold"><b>We Plan Your journy With Finesse.<br>The world is a
                book and
                those who do not travel read only one page.</b></h5>
            <div class="position-relative w-75 mx-auto animated slideInDown">
              <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                placeholder="Enter City Name">
              <button type="button" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2"
                style="margin-top: 7px;">Search</button>
            </div>
        </div>
      </div>
  </section>

  <!-- ABOUT -->
  <section id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <div class="section-title">
            <h1 class="display-4 fw-bold">About Us</h1>
            <div class="line"></div>
            <p>
            <h3>We love to plan tour and satisfy our customers with our services</h3>
            </p>
          </div>
        </div>
      </div>
      <div class="row justify-content-between align-items-center">
        <div class="col-lg-6">
          <img src="assest/images/about.jpg" class="about" alt="">
        </div>
        <div class="col-lg-5">
          <h1>About Tour</h1>
          <p class="mt-3 mb-4">A multi-talented and creative group of people who make your tour more fun.</p>
          <div class="d-flex pt-4 mb-3">
            <div class="iconbox me-4">
              <i class="fa-solid fa-plus"></i>
            </div>
            <div>
              <h5><b>We are creative</b></h5>
              <p>Team with fantastically creative mind to make tour sets modern and awesome.</p>
            </div>
          </div>
          <div class="d-flex mb-3">
            <div class="iconbox me-4">
              <i class="fa-solid fa-user"></i>
            </div>
            <div>
              <h5><b>Experience</b></h5>
              <p>10+ years of experience, happy customers and one of the brand in the industry.</p>
            </div>
          </div>
          <div class="d-flex">
            <div class="iconbox me-4">
              <i class="fa-solid fa-graduation-cap"></i>
            </div>
            <div>
              <h5><b>We are Awesome</b></h5>
              <p>Consistently proven and trusted by all.</p>
            </div>
          </div>
        </div>
      </div>

      <br>
      <br>
      <!-- Awesome Places -->
      <section id="services" class="section-padding border-top">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <div class="section-title">
                <h1 class="display-4 fw-semibold">Awesome Places</h1>
                <div class="line"></div>
              </div>
            </div>
          </div>
          <div class="row g-4 text-center">
            <a href="Paris.php">
              <div class="col-lg-4 col-sm-6">
                <div class="service  theme-shadow p-lg-5 p-4" id="service1">
                  <div class="iconbox">
                    <img src="assest/images/11-1.jpg">
                  </div>
                  <h5 class="mt-4 mb-3">Paris
                  </h5>
                  <p>Paris, France ... A list of beautiful cities isn't complete without Paris!</p>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">

          <div class="service theme-shadow p-lg-5 p-4" id="service2">
            <div class="iconbox">
              <img src="assest/images/22-2.jpg">
            </div>
            <a href="Rio_de_Janeiro.php">
              <h5 class="mt-4 mb-3">Rio de Janeiro</h5>
              <p> Rio de Janeiro seduces with its stunning mountains, beaches, samba street parties.</p>
            </a>
          </div>
        </div>

        <div class="col-lg-4 col-sm-6">
          <div class="service theme-shadow p-lg-5 p-4" id="service3">
            <div class="iconbox">
              <img src="assest/images/33-3.jpg">
            </div>
            <a href="London.php">
              <h5 class="mt-4 mb-3">London</h5>
              <p>London is the most vibrant cities in the world, with history and models of modernity.</p>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="service theme-shadow p-lg-5 p-4" id="service4">
            <div class="iconbox">
              <img src="assest/images/44-4.jpg">
            </div>
            <a href="venice.php">
              <h5 class="mt-4 mb-3">Venice</h5>
              <p>The famous Grand Canal lined with historic palaces makes Venice most beautiful cities in the world.</p>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="service theme-shadow p-lg-5 p-4" id="service5">
            <div class="iconbox">
              <img src="assest/images/55-5.jpg">
            </div>
            <a href="India.php">
              <h5 class="mt-4 mb-3">India</h5>
              <p>India, with its sheer diversity of landscapes, culture, heritage and more, is tagged as most beautiful
                countries in the world.</p>
            </a>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="service theme-shadow p-lg-5 p-4" id="service6">
            <div class="iconbox">
              <img src="assest/images/66-6.jpg">
            </div>
            <a href="New_York.php">
              <h5 class="mt-4 mb-3">New York</h5>
              <p>The Statue of Liberty, Times Square, and Broadway can all be found in New York and are all extremely
                popular.</p>
            </a>
          </div>
        </div>
    </div>
    </div>
  </section>

  <!-- Service Start -->
  <div class="container-xxl py-5 " id="service">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="col-12 text-center ">
          <h1 class="mb-5">Our Services</h1>
        </div>
        <div class="row g-4 ">
          <div class="col-lg-3 col-sm-6 wow fadeInUp">
            <div class="service-item rounded pt-3">
              <div class="p-4 theme-shadow">
                <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                <h5>WorldWide Tours</h5>
                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp">
            <div class="service-item rounded pt-3">
              <div class="p-4 theme-shadow">
                <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                <h5>Hotel Reservation</h5>
                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp">
            <div class="service-item rounded pt-3">
              <div class="p-4 theme-shadow">
                <i class="fa fa-3x fa-user text-primary mb-4"></i>
                <h5>Travel Guides</h5>
                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp">
            <div class="service-item rounded pt-3">
              <div class="p-4 theme-shadow">
                <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                <h5>Tour Management</h5>
                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp">
            <div class="service-item rounded pt-3">
              <div class="p-4 theme-shadow">
                <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                <h5>WorldWide Tours</h5>
                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp">
            <div class="service-item rounded pt-3">
              <div class="p-4 theme-shadow">
                <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                <h5>Hotel Reservation</h5>
                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp">
            <div class="service-item rounded pt-3">
              <div class="p-4 theme-shadow">
                <i class="fa fa-3x fa-user text-primary mb-4"></i>
                <h5>Travel Guides</h5>
                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 wow fadeInUp">
            <div class="service-item rounded pt-3">
              <div class="p-4 theme-shadow">
                <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                <h5>Tour Management</h5>
                <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <!-- Team -->
    <h1 id="Team">Team Members</h1>
    <div class="containers">
      <div class="box theme-shadow" id="box-1"><img src="assest/images/Aman 1.png" alt="Aman Gupta"></div>
      <div class="box theme-shadow" id="box-2"><img src="assest/images/Akanksha 1.jpg" alt="Aman Gupta"></div>
    </div>

    <!-- End -->

    <!-- Booking Start -->
    <div class="container-xxl py-5 wow fadeInUp">
      <div class="container">
        <div class="booking p-5">
          <div class="row g-5 align-items-center">
            <div class="col-md-6 text-white">
              <h6 class="text-white text-uppercase">Booking</h6>
              <h1 class="text-white mb-4">Online Booking</h1>
              <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.
                Clita erat ipsum et lorem et sit.</p>
              <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos.
                Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
              <a class="btn btn-outline-light py-3 px-5 mt-2" href="">Read More</a>
            </div>
            <div class="col-md-6">
              <h1 class="text-white mb-4">Book A Tour</h1>
              <form>
                <div class="row g-3">
                  <div class="col-md-6">
                    <div class="form-floating">
                      <input type="text" class="form-control bg-transparent" id="name" placeholder="Your Name">
                      <label for="name">Your Name</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating">
                      <input type="email" class="form-control bg-transparent" id="email" placeholder="Your Email">
                      <label for="email">Your Email</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating date" id="date3" data-target-input="nearest">
                      <input type="text" class="form-control bg-transparent datetimepicker-input" id="datetime"
                        placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                      <label for="datetime">Date & Time</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-floating">
                      <select class="form-select bg-transparent" id="select1">
                        <option value="1">Destination 1</option>
                        <option value="2">Destination 2</option>
                        <option value="3">Destination 3</option>
                      </select>
                      <label for="select1">Destination</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <textarea class="form-control bg-transparent" placeholder="Special Request" id="message"
                        style="height: 100px"></textarea>
                      <label for="message">Special Request</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-outline-light w-100 py-3" type="submit">Book Now</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Booking End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn">
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-3">Company</h4>
            <a class="btn btn-link" href="">About Us</a>
            <a class="btn btn-link" href="">Privacy Policy</a>
            <a class="btn btn-link" href="">Terms & Condition</a>
            <a class="btn btn-link" href="">FAQs & Help</a>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-3">Contact</h4>
            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, , india</p>
            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
            <p class="mb-2"><i class="fa fa-envelope me-3"></i>www.tour.com</p>
            <div class="social-icons">
              <a href="https://twitter.com/" target="_blank"><i class="ri-twitter-fill"></i></a>
              <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
              <a href="https://www.youtube.com/" target="_blank"><i class="fa-brands fa-youtube"></i></a>
              <a href="https://www.youtube.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a>
              <a href="#" target="_blank"><i class="fa-solid fa-location-dot"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-3">Gallery</h4>
            <div class="row g-2 pt-2">
              <div class="col-4">
                <img class="img-fluid bg-light p-1" src="assest/images/package-1.png" alt="">
              </div>
              <div class="col-4">
                <img class="img-fluid bg-light p-1" src="assest/images/package-2.png" alt="">
              </div>
              <div class="col-4">
                <img class="img-fluid bg-light p-1" src="assest/images/package-3.jpg" alt="">
              </div>
              <div class="col-4">
                <img class="img-fluid bg-light p-1" src="assest/images/package-6.jpg" alt="">
              </div>
              <div class="col-4">
                <img class="img-fluid bg-light p-1" src="assest/images/11.jpeg" alt="">
              </div>
              <div class="col-4">
                <img class="img-fluid bg-light p-1" src="assest/images/package-7.jpg" alt="">
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6">
            <h4 class="text-white mb-3">Newsletter</h4>
            <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
            <div class="position-relative mx-auto" style="max-width: 400px;">
              <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
              <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Send</button>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="copyright">
          <div class="row">
            <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
              &copy; <a class="border-bottom" href="#">Travelling Tours</a>, All Right Reserved.


              Designed By <a class="border-bottom" href="#">Akanksha & Aman</a>
            </div>
            <div class="col-md-6 text-center text-md-end">
              <div class="footer-menu">
                <a href="">Home</a>&nbsp;
                <a href="">Cookies</a>&nbsp;
                <a href="">Help</a>&nbsp;
                <a href="">FQAs</a>&nbsp;
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->




    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const homeLinks = document.getElementsByClassName('homeLink');
        
        // Loop through each element with the class 'homeLink'
        Array.from(homeLinks).forEach((link) => {
            link.addEventListener('click', (event) => {
                const isLoggedIn = <?php echo isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ? 'true' : 'false'; ?>;
                if (!isLoggedIn) {
                    event.preventDefault();
                    $('#loginModal').modal('show');
                }
            });
        });
    });
</script>









</body>

</html>
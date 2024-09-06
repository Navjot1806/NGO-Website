<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NGO | Website</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:500i&amp;display=swap">

    <!-- theme stylesheet-->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <!-- Favicon-->
    <link rel="shortcut icon" href="images/logo.png">
  </head>
  <body>
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg navbar-dark position-absolute w-100">
        <div class="container"><a class="navbar-brand d-block d-lg-none" href="#"><img src="images/logo.png" alt="logo" width="60"></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span></span><span></span><span></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="#home">Home </a></li>
              <li class="nav-item"><a class="nav-link" href="#donation">Donate</a></li>
              <li class="nav-item"><a class="nav-link" href="#works">Works</a></li>
            </ul>
            <ul class="navbar-nav d-none d-lg-block px-4">
              <li class="nav-item m-0"><a class="navbar-brand m-0" href="#"><img src="images/logo.png" alt="logo" width="80"></a></li>
            </ul>
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"><a class="nav-link" href="#volunteer">Volunteer </a></li>
              <li class="nav-item"><a class="nav-link" href="#events">Events</a></li>
              <li class="nav-item"><a class="nav-link" href="#contact">Contact us</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Hero Slider -->
    <section class="text-center pt-5 pt-lg-0" id="home">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item drk active">
              <img class="d-block w-100 bg-transparent" src="images/covid_logo2.jpg" alt="First slide">
              <div class="carousel-caption">
                  <h5 class="text-uppercase">Covid Relief</h5>
                  <p>With the increasing cases of COVID-19 in India we need more support from the community to help the peole in need.</p>
                  <a class="btn btn-primary px-4" href="covid_relief.php">Read More</a>
              </div>
            </div>
            <div class="carousel-item drk">
              <img class="d-block w-100 bg-transparent" src="images/child_edu.png" alt="Second slide">
                <div class="carousel-caption">
                  <h5>Child Education</h5>
                  <p>Education is both the means as well as the end to a better life; means, because it empowers an individual to earn his/her
                   livelihood and the end</p>
                   <a class="btn btn-primary px-4" href="child_edu.php">Read More</a>
                </div>
            </div>
            <div class="carousel-item drk">
              <img class="d-block w-100 bg-transparent" src="images/plant-trees1.jpg" alt="Third slide">
                <div class="carousel-caption">
                  <h5>Tree plantation</h5>
                  <p>Tree plantation is one of the effective remedial measures to control the air pollution and noise pollution. 
                  It also causes aesthetics improvement of the area as well as sustains and supports the biosphere.</p>
                  <a class="btn btn-primary px-4" href="tree_plantation.php">Read More</a>
                </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </section>
    <!-- Works Section -->
    <section class="" id="works">
      <div class="container py-5">
        <header class="mb-4 text-center mb-5">
          <p class="text-serif mb-0 text-primary">You can also get involved with helping</p>
          <h2 class="text-uppercase">Our other works</h2>
        </header>
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0"><a class="primary-overlay d-block mb-3" href="disaster_relief.php">
              <div class="overlay-content"><img class="img-fluid w-100" src="images/disaster_management1.png" alt="..."></div></a>
            <h4 class="mb-0"> <a class="reset-anchor" href="disaster_relief.php">Disaster Relief</a></h4>
            <!-- <p class="text-serif text-primary text-small">Holiday</p> -->
            <p class="text-muted">Being a disaster-prone country, India is highly vulnerable to various types of natural calamities due 
            to its geographical positioning.</p>
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0"><a class="primary-overlay d-block mb-3" href="child_health.php">
              <div class="overlay-content"><img class="img-fluid w-100" src="images/child_health.png" alt="..."></div></a>
            <h4 class="mb-0"> <a class="reset-anchor" href="child_health.php">Child Health</a></h4>
            <!-- <p class="text-serif text-primary text-small">Child Health</p> -->
            <p class="text-muted">Children's health, or pediatrics, focuses on the well-being of children from conception through adolescence.</p>
          </div>
          <div class="col-lg-4"><a class="primary-overlay d-block mb-3" href="youth_training.php">
              <div class="overlay-content"><img class="img-fluid w-100" src="images/youth_training1.jpg" alt="..."></div></a>
            <h4 class="mb-0"> <a class="reset-anchor" href="youth_training.php">Youth Training</a></h4>
            <!-- <p class="text-serif text-primary text-small">Holiday, Children</p> -->
            <p class="text-muted">The youth comprises over one-third of the Indian population which in turn constitutes a major part of the labour force of the country.</p>
          </div>
        </div>
      </div>
    </section>
    <!-- Become a Volunteer Section -->
    <section class="bg-cover bg-fixed shadow-inner" id="volunteer" style="background: url(images/volunteer.png)">
      <div class="primary-overlay py-5">
        <div class="overlay-content index-forward py-5">
          <div class="container py-5 text-white text-center">
            <h2 class="text-xl text-shadow mb-4">Become a Volunteer</h2>
            <p class="lead text-serif mb-1">And help us keeping organizing various charity events</p>
            <a class="btn btn-primary px-4" href="volunteer.php">Signup now</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Donation Section-->
    <section id="donation">
      <div class="container-fluid px-0">
        <div class="row align-items-stretch">
          <div class="col-lg-6 bg-light py-lg-5 order-2 order-lg-1">
            <div class="h-100 d-flex flex-column p-5 justify-content-center text-lg-right">
              <div class="w-100">
                <p class="text-serif text-primary mb-0">Help the people in need</p>
                <h2 class="text-uppercase mb-0">Donate now</h2>
                <div class="row">
                  <div class="col-lg-10 ml-auto">
                    <p class="text-muted my-4">It does not matter how much we donate; 
                      it matters whether the donation is meaningful. How to define meaningful? Let society and history judge.</p>
                  </div>
                </div>
                <div class="d-block"><a class="btn btn-primary px-4" href="donate.php">Donate now</a></div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 half-page-banner bg-cover bg-center order-1 order-lg-2" style="background: url(images/donate.jpg)"></div>
        </div>
      </div>
    </section>
    <!-- Scroll Top Button--><a class="scroll-top" href="#"><i class="fas fa-long-arrow-alt-up"></i></a>
    <footer class="pt-5 text-white" style="background: #111" id="contact">
      <div class="container pt-5">
        <div class="row mb-5 pb-5">
          <div class="col-md-6">
            <h4>About Us</h4>
            <p>Vision: The aim is to serve elder needs in a holistic manner,
               enabling them to live active, dignified and healthier lives.
            </p>
            <p>We envision to grow as an idea across regions, economies and countries using urban
               discard as a tool to alleviate poverty and enhance the dignity of the poor in the world. 
               Address basic but neglected issues of the poor by involving them in evolving their own solutions with dignity 
               and urban material as reward.
            </p>
            <p>
            Our focus is concentrated on the receiver’s dignity instead of the donor’s pride.
            All donations are eligible for 50% tax exemption under section 80G of the Income Tax Act, 1961.
            </p>
            <h4>Reach Us</h4>
            <ul class="list-unstyled mb-0 text-muted">
                <li class="mb-2"><a class="reset-anchor" href="tel:+91 9773104560"> <i class="fas fa-phone text-primary mr-3"></i><span>+91 9773104560</span></a></li>
                <li class="mb-2"><a class="reset-anchor" href="text.html"> <i class="fas fa-globe-asia text-primary mr-3"></i><span>Lorem ipsum, dolor sit amet consectetur adipisicing.</span></a></li>
                <li class="mb-2"><a class="reset-anchor" href="mailto:partners8085@gmail.com"> <i class="far fa-envelope text-primary mr-3"></i><span>partners8085@gmail.com</span></a></li>
              </ul>
          </div>
          <div class="col-md-6">
            <h4>Contact Us</h4>
            <p>Please send your message below. We will get back to you at the earliest!</p>
            <form action="contact_us_action.php" method="post">
              <div class="row">
                    <div class="col-sm-12 form-group">
                        <label for="message">Message:</label>
                        <textarea class="form-control border-dark text-white"type="textarea" id="message" name="message" maxlength="1000" rows="4"></textarea>
                    </div>
              </div>
              <div class="row">
                  <div class="col-sm-6 form-group">
                      <label for="name">Your Name:</label>
                      <input type="text" class="form-control border-dark text-white " id="name" name="name" required>
                  </div>
                  <div class="col-sm-6 form-group">
                      <label for="email">Email:</label>
                      <input type="email" class="form-control border-dark text-white " id="email" name="email" required>        
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-12 form-group">
                  <button class="btn btn-primary px-4" id="button-addon2" type="submit">Send <i class="fas fa-paper-plane"></i></button>
                  </div>
              </div>
              <span id="success_message" class=""></span>  
            </form>
          </div>
        </div>
        <div class="py-4 border-top border-dark text-center">
        </div>
      </div>
    </footer> 
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>
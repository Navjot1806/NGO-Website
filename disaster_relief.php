<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>DISASTER RELIEF | DISASTER PREPAREDNESS</title>
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
        <div class="container"><a class="navbar-brand d-block d-lg-none" href="#"><img src="images/logo.png" alt="..." width="60"></a>
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span></span><span></span><span></span></button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a class="nav-link" href="index.php">Home </a></li>
              <li class="nav-item"><a class="nav-link" href="#donation">Donate</a></li>
              <li class="nav-item active"><a class="nav-link" href="#works">Works</a></li>
            </ul>
            <ul class="navbar-nav d-none d-lg-block px-4">
              <li class="nav-item m-0"><a class="navbar-brand m-0" href="#"><img src="images/logo.png" alt="..." width="80"></a></li>
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
            <div class="carousel-item drk active">
              <img class="d-block w-100 bg-transparent" src="images/disaster_management.png" alt="Second slide">
                <div class="carousel-caption">
                  <h5>Disaster Relief</h5>
                </div>
            </div>   
    </section>  
    <section class="py-5">
      <div class="container py-5">
        <div class="row mb-5">
          <div class="col-lg-6">
            <p class="drop-caps">
            India is one of the most disaster prone countries in the world, 23 out of 29 states are multi-disaster prone regions. 
            Over 40 million hectare of land has been identified as flood prone. About 57% of the total area is vulnerable to earthquake of varying intensities. 
            The Indian Ocean is one among the six key cyclone-prone regions of the world. The coromandel coastal line is more prone, about 80% of the total cyclones generated in the region hit here.
            </p>
            <p class="py-3">
            Every year millions of Indians were affected by natural disasters. These disasters leave people traumatised by the death of family, 
            friends and their lives devastated by their loss of livelihood. The impact is high and it has been increasing dramatically in the last
             few decades in terms of number of people affected and the length of time they are affected for. 
             This trend is expected to keep rising in coming years.
            </p>
          </div>
          <div class="col-lg-6"><img class="img-fluid" src="images/disaster_relief.jpg" alt="image"></div>
        </div>
        <div class="row bg-light">
          <div class="col-lg-12">
            <p> To deal with disasters, there is an urgent need of local institution, which can play a pro-active role in disaster
               management. This resulted in the establishment of Rapid Response, a registered Indian charity dedicated to provide disaster
                response and preparedness activities across India.
            </p>
          </div>
        </div>
        <div class="row mb-5 py-4">
        
        <div class="col-lg-6">
        <h3 class="text-capitalize text-serif">Disaster Prepardeness Projects</h3>
          <img class="img-fluid py-2" src="images/disaster.jpg" alt="">
        </div>
          <div class="col-lg-6 py-5">
            <p>
            In non-crisis situation, we actively engage with vulnerable communities and train them to cope with emergencies. 
            With our innovative programs and strategies, we are preparing the vulnerable communities to manage disasters better and 
            minimise the impact of natural disasters.
            </p>
            <p class="py-3">
            <span class="text-serif text-primary">Blanket Distribution:</span>
            This initiative has started after our return from Jammu Kashmir Flood Relief in 2014. 
            During our stay at Kashmir, the temperature was 2 degree Celsius. We find extremely difficult to pass 
            through the nights at the hotel. In that same situation, we have witnessed several homeless people mostly old age 
            sleeping on the streets without proper clothing and blanket. We were deeply disturbed by those scenes and started our 
            blanket drive across India.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section id="donation">
      <div class="container-fluid">
        <div class="row">
        <div class="col-lg-6 bg-light py-lg-5">
        <h1 class=" text-black text-right">Donate</h1>
          <div class="align-text-top text-right"><p>Please help us in our noble cause to help underpriviledged children</p>
            <p>Our goal for donation for this cause is at least Rs.xyz.</p>
            <p>Untill now we have received 
            <?php
                $db = mysqli_connect("localhost","root","","2CP08_project");
                if($db->connect_error){
                  die("Connection failed:".$db->connect_error);
                } 
                $sql = "SELECT sum(donation) FROM disaster_donate";
                $result = $db->query($sql);
                $s = mysqli_fetch_array($result);
                // print_r($s);
                $totaldonation = $s[0];
                echo "Rs.".$totaldonation;
                ?>
              as a donation.</p>
              <p>So, please help us reach our goal so that we can help as many children as we can.</p>
          </div>
            
            <div class="d-block text-right"><a class="btn btn-primary px-4" href="donate.php">Donate now</a></div>
            </div>
        <div class="col-lg-6 bg-light">
          <div class="container"><h3 align="center">Our Top Donors</h3></div>
          <table class="table-bordered table-primary table table-hover">
              <tr>
                <th>Name</th>
                <th>Donation</th>
              </tr>
              <?php
                $sql = "SELECT name,donation FROM disaster_donate order by donation desc";
                $result = $db->query($sql);
                $temp = 0;
                while($row = $result->fetch_assoc() and $temp<=4){
                  echo "<tr><td>". $row["name"]."</td><td>"."Rs." .$row["donation"] ."</td></tr>";
                  $temp++;
                }
                echo "</table>";
                ?>          
            </table></div>
        </div>
        </div>
      </div>
    </section>
    <section class="py-5" id="works">
      <div class="container py-5">
        <header class="text-center">
          <p class="text-serif  text-primary">You can also get involved with helping</p>
          <h2 class="text-uppercase">Our other works</h2>
        </header>
        <div class="row">
          <div class="col-md-4"><a class="primary-overlay d-block" href="tree_plantation.php">
              <div class="overlay-content"><img class="img-fluid w-100" src="images/plant-trees.jpg" alt="..." style="height:262px"></div></a>
            <h4> <a class="reset-anchor" href="tree_plantation.php">Tree Plantation</a></h4>
            <p class="text-muted">Tree plantation is one of the effective remedial measures to control the air pollution and noise pollution.
              It also causes aesthetics improvement of the area as well as sustains and supports the biosphere.</p>
          </div>
          <div class="col-lg-4"><a class="primary-overlay d-block" href="child_health.php">
              <div class="overlay-content"><img class="img-fluid w-100" src="images/child_health.png" alt="..."></div></a>
            <h4> <a class="reset-anchor" href="child_health.php">Child Health</a></h4>
            <p class="text-muted">Children's health, or pediatrics, focuses on the well-being of children from conception through adolescence.</p>
          </div>
          <div class="col-lg-4"><a class="primary-overlay d-block" href="youth_training.php">
              <div class="overlay-content"><img class="img-fluid w-100" src="images/youth_training1.jpg" alt="..."></div></a>
            <h4> <a class="reset-anchor" href="youth_training.php">Youth Training</a></h4>
            <p class="text-muted">The youth comprises over one-third of the Indian population which in turn constitutes a major part of the labour force of the country.</p>
          </div>
        </div>
        <div class="row py-3">
          <div class="col-md-4"><a class="primary-overlay d-block" href="covid_relief.php">
              <div class="overlay-content"><img class="img-fluid w-100" src="images/covid_logo2.jpg" alt="..." style="height:265px"></div></a>
            <h4> <a class="reset-anchor" href="covid_relief.php">Covid Relief</a></h4>
            <p class="text-muted">With the increasing cases of COVID-19 in India we need more support from the community to help the peole in need.</p>
          </div>
          <div class="col-lg-4"><a class="primary-overlay d-block" href="child_edu.php">
              <div class="overlay-content"><img class="img-fluid w-100" src="images/img1.png" alt="..." style="height:265px"></div></a>
            <h4> <a class="reset-anchor" href="child_edu.php">Child Education</a></h4>
            <p class="text-muted">Education is both the means as well as the end to a better life; means, because it empowers an individual to earn his/her livelihood and the end</p>
          </div>
        </div>
      </div>
    </section>
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
            </form>
          </div>
        </div>
        <div class="py-4 border-top border-dark text-center">
          <!-- <p class="mb-0 text-muted">Template designed by <a class="reset-anchor text-primary" href="https://bootstraptemple.com/p/church">Bootstrap Temple</a>. </p> -->
          <!-- If you want to remove the backlink, please purchase the Attribution-Free License. See details in readme.txt or license.txt. Thanks!-->
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/owl.carousel2/owl.carousel.min.js"></script>
    <script src="vendor/jquery-circle-progress/circle-progress.min.js"></script>
    <script src="vendor/smooth-scroll/smooth-scroll.min.js"></script>
    <script src="vendor/jquery.countdown/jquery.countdown.js"></script>
    <script src="js/front.js"></script>
    <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  </body>
</html>
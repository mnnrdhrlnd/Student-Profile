<!DOCTYPE html>
<html>
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Digital Portfolio</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto + Roboto Slab-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700%7CRoboto:400,700,300">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- animate.css-->
    <link rel="stylesheet" href="vendor/animate.css/animate.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.pink.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Leaflet CSS - For the map-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>

  <?php

if(isset($_POST['add']))
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '1234';
$conn = mysql_connect($dbhost, $dbuser, $dbpass );
if(! $conn )
{
die('Could not connect: ' . mysql_error());
}
if (function_exists(‘get_magic_quotes_gpc’) && get_magic_quotes_gpc()) 
{
$Name = addslashes ($_POST['Name']);
$con_no = addslashes ($_POST['con_no']);
$socialm = addslashes ($_POST['socialm']);
$email = addslashes ($_POST['email']);
}
else
{
$Name =  $_POST['Name'];
$con_no = $_POST['con_no'];
$socialm = $_POST['socialm'];
$email =  ($_POST['email']);
}
$sql = "INSERT INTO final_tbl ".
"(Name,con_no,socialm,email) ".
"VALUES".
"('$Name','$con_no','$socialm','$email') ";
mysql_select_db( 'student' );
$retval = mysql_query($sql, $conn );
if(! $retval )
{
die('Could not create table: ' . mysql_error());
}
echo "\t Data Saved Successfully\n";

mysql_close($conn);
}
else
{

?>
<style>
   #one img {
  border-radius: 50%;
}

body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.6;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: center;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(232, 212, 212); /* Fallback color */
  background-color: rgba(232, 212, 212,0.6); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #EBD5D5;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}


</style>
  <body>
    <!-- Reference item-->
    <!-- navbar-->
    <header class="header">
      <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container"><a href="#intro" class="navbar-brand scrollTo">Digital Portfolio</a>
          <button type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><span class="fa fa-bars"></span></button>
          <div id="navbarcollapse" class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item"><a href="#intro" class="nav-link link-scroll">Intro</a></li>
              <li class="nav-item"><a href="#about" class="nav-link link-scroll">About</a></li>
              <li class="nav-item"><a href="#services" class="nav-link link-scroll">Services</a></li>
              <li class="nav-item"><a href="#testimonials" class="nav-link link-scroll">Comments</a></li>
              <li class="nav-item"><a href="#references" class="nav-link link-scroll">My work</a></li>
              <li class="nav-item"><a href="#customers" class="nav-link link-scroll">Clients</a></li>
              <li class="nav-item"><a href="#contact" class="nav-link link-scroll">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Intro Image-->
    <section id="intro" style="background: url(img/rtu.jpg) center center no-repeat; background-size: cover;" class="intro-section pb-2">
      <div class="container text-center">
        <div data-animate="fadeInDown" class="logo"><img src="img/logo-big.png" alt="logo" width="130">
        <h1 data-animate="fadeInDown" class="text-shadow mb-5">Digital Portfolio </h1>
        <p data-animate="slideInUp" class="h2 text-shadow text-400"></p>
        <div id="one">
          <img src="junmar1.jpg" alt="Avatar" style="width:200px"><br></div>
        <button onclick="document.getElementById('id01').style.display='block'"style="width:auto;" class="btn btn-outline-light link-scroll">Login</button>
          <a href="#contact" class="btn btn-outline-light link-scroll">Guest</a>
          <H1 data-animate="slideInUp" class="h2 text-shadow text-400">Juan Miguel Esteves</h1>
          <div class="w3-container">
</div>
<div class="w3-center">
<div class="w3-bar w3-border">
 <a href="http://localhost/activities/distribution/index-main.php" class="w3-bar-item w3-button">&laquo;</a>
  <a href="http://localhost/activities/distribution/index.html" class="w3-bar-item w3-button">1</a>
  <a href="http://localhost/activities/distribution/index2.php" class="w3-bar-item w3-button">2</a>
  <a href="http://localhost/activities/distribution/index4.php" class="w3-bar-item w3-button">3</a>
  <a href="http://localhost/activities/distribution/index3.php" class="w3-bar-item w3-button">4</a>
  <a href="" class="w3-bar-item w3-button">&raquo;</a>
</div>
</div>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    
    </div>
<center><img src="logo-big.png" alt="Avatar" class="avatar"></center>
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
     <center> <input type=button onClick="location.href='http://localhost/activities/distribution/update_final.php'" value='Login' style="height:50px; width:126px; color:#040901;background-color:#5ABE17"><br></center>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#E8D4D4">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

      </div>
    </section>
    <!-- About-->
    <section id="about" class="about-section">
      <div class="container">
        <header class="text-center">
          <h2 data-animate="fadeInDown" class="title">About me</h2>
        </header>
        <div class="row">
          <div data-animate="fadeInUp" class="col-lg-6">
            <p>Hi! I am <b> Juan Miguel M. Esteves</b> 
I was born and raised here, in Pasig City. Ever since I was a kid, I
had passion for playing games on computers, which lead to my
interest in knowing more about how computers work.</p>
            <p>uncles, they are my
role-model in life. I wanted to someday go to Singapore to earn a
lot for my Future.

My course made me realize that it was not something easy to do.
We sometimes need to stay up late at night to finish all of the</p>

            <p>As I have grown in the past few years, I learn to harness my skills in this field in so many ways an still continue to gain more understanding. This field is broader than people think that is why opportunities came from everywhere. I pursue to become a good and responsible IT Professional in the future where learning never ends.
          </div>
          <div data-animate="fadeInUp" class="col-lg-6">
            <div class="skill-item">
              <div class="progress-title">PHP</div>
              <div class="progress">
                <div role="progressbar" style="width: 60%" aria-valuenow="0" aria-valuemin="60" aria-valuemax="100" class="progress-bar progress-bar-skill1"></div>
              </div>
            </div>
            <div class="skill-item">
              <div class="progress-title">Java Script</div>
              <div class="progress">
                <div role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="40" aria-valuemax="100" class="progress-bar progress-bar-skill2"></div>
              </div>
            </div>
            <div class="skill-item">
              <div class="progress-title">HTML/CSS coding</div>
              <div class="progress">
                <div role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" class="progress-bar progress-bar-skill3"></div>
              </div>
            </div>
          
            </div>
         
          <div data-animate="fadeInUp" class="col-sm-6 mx-auto mt-5"><img src="img/about12.jpg" alt="This is me - Porfolio" class="image rounded-circle img-fluid"></div>
          <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>(IT Student)</b><br>Since I was a kid, computers fascinates me and caught my attention. It's so fun learn about them because it's so interesting, playing games and such. Which leads me pursuing this career, So today I am doing my best of abilities to continue to learn this vast field and hopefully let knowledge take me to greater distance. 
<br></p>
 </div>
      </div>
    </section>
    <!-- Service-->
    <section id="services" class="bg-gradient services-section">
      <div class="container">
        <header class="text-center">
          <h2 data-animate="fadeInDown" class="title">A Little About Myself</h2>
        </header>
        <div class="row services text-center">
          <div data-animate="fadeInUp" class="col-lg-4">
            <div class="icon"><i class="fa fa-search"></i></div>
            <h3 class="heading mb-3 text-400">Consulting</h3>
            <p class="text-left description">On on produce colonel pointed. Just four sold need over how any. In to september suspicion determine he prevailed admitting. On adapted an as affixed limited on. Giving cousin warmly things no spring mr be abroad. Relation breeding be as repeated strictly followed margaret. One gravity son brought shyness waiting regular led ham.</p>
          </div>
          <div data-animate="fadeInUp" class="col-lg-4">
            <div class="icon"><i class="fa fa-html5"></i></div>
            <h3 class="heading mb-3 text-400">HTML coding</h3>
            <p class="text-left description">Manor we shall merit by chief wound no or would. Oh towards between subject passage sending mention or it. Sight happy do burst fruit to woody begin at. Assurance perpetual he in oh determine as.</p>
          </div>
          <div data-animate="fadeInUp" class="col-lg-4">
            <div class="icon"><i class="fa fa-tachometer"></i></div>
            <h3 class="heading mb-3 text-400">PHP webdelopment</h3>
            <p class="text-left description">Rooms oh fully taken by worse do. Points afraid but may end law lasted. Was out laughter raptures returned outweigh. Luckily cheered colonel me do we attacks on highest enabled. Tried law yet style child. Bore of true of no be deal.</p>
          </div>
        </div>
        <hr data-animate="fadeInUp">
        <div data-animate="fadeInUp" class="text-center">
          <p class="lead">Would you like to know more or just discuss something?</p>
          <p><a href="#contact" class="btn btn-outline-light link-scroll">Contact me</a></p>
        </div>
      </div>
    </section>
    <!-- Testimonials-->
    <section id="testimonials" class="testimonials-section bg-gray">
      <div class="container">
        <header class="text-center mb-2">
          <h2 data-animate="fadeInUp" class="title">My Classmate said<br><span>about me</span></h2>
          <p data-animate="fadeInUp" class="lead">I am always glad to hear that my Classmate leave satisfied. Some of them shared with you their insights on our cooperation.</p>
        </header>
        <ul data-animate="fadeInUp" class="owl-carousel owl-theme testimonials equalize-height">
          <li class="item">
            <div class="testimonial full-height">
              <div class="text">
                <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>
              </div>
              <div class="bottom">
                <div class="icon"><i class="fa fa-quote-left"></i></div>
                <div class="name-picture"><img alt="" src="img/person-11.jpg">
                  <h5>junie boy</h5>
                  <p>classmate1</p>
                </div>
              </div>
            </div>
          </li>
          <li class="item">
            <div class="testimonial full-height">
              <div class="text">
                <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. &quot;What is happened to me? &quot; he thought. It was not a dream.</p>
              </div>
              <div class="bottom">
                <div class="icon"><i class="fa fa-quote-left"></i></div>
                <div class="name-picture"><img alt="" src="img/person-22.jpg">
                  <h5>kuku</h5>
                  <p>classmate 2</p>
                </div>
              </div>
            </div>
          </li>
          <li class="item">
            <div class="testimonial full-height">
              <div class="text">
                <p>His room, a proper human room although a little too small, lay peacefully between its four familiar walls. A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
              </div>
              <div class="bottom">
                <div class="icon"><i class="fa fa-quote-left"></i></div>
                <div class="name-picture"><img alt="" src="img/person-33.jpg">
                  <h5>Dannylows</h5>
                  <p>classmate 3</p>
                </div>
              </div>
            </div>
          </li>
          <li class="item">
            <div class="testimonial full-height">
              <div class="text">
                <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
              </div>
              <div class="bottom">
                <div class="icon"><i class="fa fa-quote-left"></i></div>
                <div class="name-picture"><img alt="" src="img/person-44.jpg">
                  <h5>Don Migz</h5>
                  <p>classmate 4</p>
                </div>
              </div>
            </div>
          </li>
          <li class="item">
            <div class="testimonial full-height">
              <div class="text">
                <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
              </div>
              <div class="bottom">
                <div class="icon"><i class="fa fa-quote-left"></i></div>
                <div class="name-picture"><img alt="" src="img/person-44.jpg">
                  <h5>Don Migz</h5>
                  <p>CEO, TransTech</p>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <!-- Statistics-->
    <section id="statistics" data-dir="up" style="background: url(&quot;img/parallax.jpg&quot;);" class="statistics-section text-white parallax parallax">
      <div class="container">
        <div class="row showcase text-center"> 
          <div data-animate="fadeInUp" class="col-lg-3 col-md-6">
            <div class="item">
              <div class="icon"><i class="fa fa-align-justify"></i></div>
              <h5 class="text-400 mt-4 text-uppercase"><span class="counter">120</span><br>Websites</h5>
            </div>
          </div>
          <div data-animate="fadeInUp" class="col-lg-3 col-md-6">
            <div class="item">
              <div class="icon"><i class="fa fa-users"></i></div>
              <h5 class="text-400 mt-4 text-uppercase"><span class="counter">50</span><br>Satisfied Clients</h5>
            </div>
          </div>
          <div data-animate="fadeInUp" class="col-lg-3 col-md-6">
            <div class="item">
              <div class="icon"><i class="fa fa-copy"></i></div>
              <h5 class="text-400 mt-4 text-uppercase"><span class="counter">320</span><br>Projects</h5>
            </div>
          </div>
          <div data-animate="fadeInUp" class="col-lg-3 col-md-6">
            <div class="item">
              <div class="icon"><i class="fa fa-font"></i></div>
              <h5 class="text-400 mt-4 text-uppercase"><span class="counter">333</span><br>Magazines and Brochures</h5>
            </div>
          </div>
        </div>
      </div>
      <div class="dark-mask"></div>
    </section>
    <!--
    *** REFERENCES IMAGE ***
    _________________________________________________________
    -->
    <section id="references">
      <div class="container">
        <div class="col-sm-12">
          <div class="mb-5 text-center">
            <h2 data-animate="fadeInUp" class="title">My work</h2>
            <p data-animate="fadeInUp" class="lead">I have worked on dozens of projects so I have picked only the latest for you.</p>
          </div>
          <ul id="filter" data-animate="fadeInUp">
            <li class="active"><a href="#" data-filter="all">All</a></li>
            <li><a href="#" data-filter="webdesign">Webdesign</a></li>
            <li><a href="#" data-filter="seo">SEO</a></li>
            <li><a href="#" data-filter="marketing">Marketing</a></li>
            <li><a href="#" data-filter="other">Other</a></li>
          </ul>
          <div id="detail">
            <div class="row">
              <div class="col-lg-10 mx-auto"><span class="close">×</span>
                <div id="detail-slider" class="owl-carousel owl-theme"></div>
                <div class="text-center">
                  <h1 id="detail-title" class="title"></h1>
                </div>
                <div id="detail-content"></div>
              </div>
            </div>
          </div>
          <!-- Reference detail-->
          <div id="references-masonry" data-animate="fadeInUp">
            <div class="row">
                  <div data-category="webdesign" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/portfolio-1.jpg" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">Project name</h3>
                            <p>Short project description goes here...</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                        <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>
                        <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>
                        <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>
                      </div>
                    </div>
                  </div>
                  <div data-category="seo" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/portfolio-2.jpg" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">Project name 2</h3>
                            <p>Short project description goes here...</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider3.jpg,img/main-slider1.jpg" class="sr-only reference-description">
                        <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>
                        <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>
                        <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>
                      </div>
                    </div>
                  </div>
                  <div data-category="marketing" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/portfolio-3.jpg" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">Project name 3</h3>
                            <p>Short project description goes here...</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                        <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>
                        <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>
                        <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>
                      </div>
                    </div>
                  </div>
                  <div data-category="marketing" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/portfolio-4.jpg" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">Project name 4</h3>
                            <p>Short project description goes here...</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                        <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>
                        <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>
                        <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>
                      </div>
                    </div>
                  </div>
                  <div data-category="webdesign" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/portfolio-5.jpg" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">Project name 5</h3>
                            <p>Short project description goes here...</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                        <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>
                        <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>
                        <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>
                      </div>
                    </div>
                  </div>
                  <div data-category="other" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/portfolio-6.jpg" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">Project name 6</h3>
                            <p>Short project description goes here...</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                        <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>
                        <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>
                        <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>
                      </div>
                    </div>
                  </div>
                  <div data-category="seo" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/portfolio-7.jpg" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">Project name</h3>
                            <p>Short project description goes here...</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                        <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>
                        <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>
                        <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>
                      </div>
                    </div>
                  </div>
                  <div data-category="webdesign" class="reference-item col-lg-3 col-md-6">
                    <div class="reference"><a href="#"><img src="img/portfolio-8.jpg" alt="" class="img-fluid">
                        <div class="overlay">
                          <div class="inner">
                            <h3 class="h4 reference-title">Project name</h3>
                            <p>Short project description goes here...</p>
                          </div>
                        </div></a>
                      <div data-images="img/main-slider1.jpg,img/main-slider2.jpg,img/main-slider3.jpg" class="sr-only reference-description">
                        <p>Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature. Day behaviour explained law remainder. Produce can cousins account you pasture. Peculiar delicate an pleasant provided do perceive.</p>
                        <p>Sitting mistake towards his few country ask. You delighted two rapturous six depending objection happiness something the. Off nay impossible dispatched partiality unaffected. Norland adapted put ham cordial. Ladies talked may shy basket narrow see. Him she distrusts questions sportsmen. Tolerably pretended neglected on my earnestly by. Sex scale sir style truth ought.</p>
                        <p class="buttons text-center"><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-globe"></i> Visit website</a><a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-download"></i> Download case study</a></p>
                      </div>
                    </div>
                  </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Customers-->
    <section id="customers" class="customers-section bg-gray">
      <div class="container">
        <div class="col-md-12">
          <div class="row align-items-center">
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="img/customers/logo-1.svg" title="brand logo" data-placement="bottom" data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="img/customers/logo-2.svg" title="brand logo" data-placement="bottom" data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="img/customers/logo-3.svg" title="brand logo" data-placement="bottom" data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="img/customers/logo-4.svg" title="brand logo" data-placement="bottom" data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="img/customers/logo-5.svg" title="brand logo" data-placement="bottom" data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto"></div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-6">
              <div class="customer"><img src="img/customers/logo-6.svg" title="brand logo" data-placement="bottom" data-toggle="tooltip" alt="" class="img-fluid d-block mx-auto"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Contact-->
    <section id="contact" data-animate="bounceIn" class="contact-section contact">
      <div class="container">
        <header class="text-center">
          <h2 class="title">Leave you Informtion here!</h2>
        </header>
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <form id="contact-form" method="post" action="">
              <div class="messages"></div>
              <div class="controls">
                <div class="row">
                  <div class="col-md-6">
                    <input type="text" name="Name" placeholder="Your Full Name *" id="Name" required="required" class="form-control">
                  </div>
                
                  <div class="col-md-6">
                    <input type="text" name="email" placeholder="Your email *" id="email" required="required" class="form-control">
                  </div>
                  <div class="col-md-12">
                    <input type="text" name="con_no" placeholder="Your phone no.*" id="con_no" class="form-control">
                  </div>
                  <div class="col-md-12">
                    <textarea name="socialm" placeholder="Social media *" rows="4" required="required" id="socialm" class="form-control"></textarea>
                
                  <div class="col-md-12 text-center">
                    <input name="add" type="submit" id="add" value="Add"  class="btn btn-outline-primary">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Map-->
    <div id="map"></div>
    <footer class="main-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-center text-lg-left">
            <p class="social"><a href="#" class="external facebook wow fadeInUp"><i class="fa fa-facebook"></i></a><a href="#" data-wow-delay="0.2s" class="external instagram wow fadeInUp"><i class="fa fa-instagram"></i></a><a href="#" data-wow-delay="0.4s" class="external gplus wow fadeInUp"><i class="fa fa-google-plus"></i></a><a href="#" data-wow-delay="0.6s" class="email wow fadeInUp"><i class="fa fa-envelope"></i></a></p>
          </div>
          <!-- /.6-->
          <div class="col-md-6 text-center text-lg-right mt-4 mt-lg-0">
            <p>© 2020 Danilo Jr Venida. All rights reserved.</p>
          </div>
          <div class="col-12 mt-4">
            <p class="template-bootstrapious"> <a href='https://bootstrapious.com/p/bootstrap-carousel'></a><a href="https://fity.cz/ostrava"></a></p>
            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
          </div>
        </div>
      </div>
    </footer>
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="vendor/jquery.counterup/jquery.counterup.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.4.0/leaflet.js"> </script>
    <script src="js/front.js"></script>
    <?php
}
?>
  </body>
</html>
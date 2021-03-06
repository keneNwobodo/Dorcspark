<?php
include_once('mail.php');
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dorcspark | Landing Page</title>
    <!-- external css -->
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon shortcut" href="images/icon.png" >
    <!-- font awesome library -->
    <link rel="stylesheet" href="css/all.css">
    <link rel="stylesheet" href="css/all.min.css">
    <!--aos animate library-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <nav class="nav">
        <!--logo-->
        <a class="logo" href="#">dorcspark</a>

        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
        <ul class="nav-links">
            <li><a class="active" href="#hero">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#offers">Offers</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    
    <!-- Hero section -->
    <div id="hero">
        <div class="hero-content">
            <div class="left">
                <h2>Better Solutions For Your Business</h2>
                <p>We are a team of talanted developers making websites for everyone</p>
                <p>Take your online prescence to another level with us!</p>
              <div class="hero-content-btn">
                 <button type="button"><a href="#">Learn More</a></button> 
              </div>
            </div>
            <div class="right" 
            data-aos="slide-left" 
            data-aos-duration="1500" 
            data-aos-delay="500">
                <img src="images/hero-img.png" alt="hero image">
            </div>
        </div>
    </div>

    <!-- About us section -->
    <div id="about">
        <div class="about-heading">
            <h2>about us</h2>
            <div class="line"></div>
        </div>
        <div class="about-content">
            <div class="about-content-left">
                <p>We have established ourselves as one of the world's truly exceptional web design and custom application development companies. If you are unsure about your needs or requirements, please feel free to call us today for a no-obligations chat - we can extract that idea from your head and turn it into a reality!</p>
                <!--team quality-->
                <div class="about-ethics">
                   <ul>
                       <li><i class="fas fa-greater-than"></i>Great Team</li>
                       <li><i class="fas fa-greater-than"></i>Professionlism</li>
                       <li><i class="fas fa-greater-than"></i>Quality</li>
                       <li><i class="fas fa-greater-than"></i>Fast delivery</li>
                    
                   </ul>
                </div>
            </div>

            <div class="about-content-right">
                <p>With modern design, our own content management system and custom application development, we can create a web presence you will be proud of. If you can dream it, we can build it.</p>
                <!-- about-content-btn -->
                <div class="about-btn">
                  <button type="button"><a href="#">Learn More</a></button>
                </div>
            </div>
          
        </div>
    </div>

    <!-- Services section -->
    <div id="service">
        <div class="service-heading">
            <h2>Service</h2>
            <p>In a few words, all we do is to create a web presence you will be proud of and increase yourcirlce of customers.</p>
        </div>
        <div class="service-card">
          <div class="service-card-content">
              <div class="card1">
                 <i class="fas fa-code"></i>
                 <h3>Web design</h3>
                 <p>We design flexible and dynamic websites with simple management systems. Easy to upload content and maintain overtime.</p>
              </div>

              <div class="card1">
                <i class="fas fa-palette"></i>
                  <h3>Graphics design</h3>
                  <p>We create visual communication materials such as logos, banners, marketing materials and advertising. We always keep it professional.</p>
              </div>

              <div class="card1">
                <i class="fas fa-video-slash"></i>
                <h3>Video editing</h3>
                <p>Our video editing is one in a million. We create amazing videos with awesome touches capable of winning more number of views than expecte</p>
            </div>

            <div class="card1">
                <i class="fas fa-database"></i>
                <h3>Web development</h3>
                <p>When in it comes to back-end, we are professionals. We build super fast, modern and highly optimized websites to save users from frustration.</p>
            </div>
          </div>
        </div>
    </div>

    <!--Team section-->
    <div id="team">
        <div class="team-heading">
            <h2>Team</h2>
            <p>We are a team of down-to-earth designers and developers who are not interested in making a quick buck. We won't throw buzzwords at you and we stand by our stated</p>
        </div>
    </div>

    <!--Contact section-->
    <div id="contact">
        <div class="contact-heading">
            <h2>Contact</h2>
            <p>Contact us today to discuss your organisations requirements - quotations are free and without obligation. <br> We look forward to hearing from you!</p>
        </div>
        <div class="contact-card">
            <div class="contact-content">
                <div class="box">
                    <div>
                         <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div>
                        <h4>Location:</h4>
                        <p>Independence Lay-Out, Enugu, Nigeria</p>
                    </div>
                </div>
                <div class="box">
                    <div>
                         <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <h4>Email:</h4>
                        <p>digitals@dorcspark.com.ng</p>
                    </div>

                </div>
                <div class="box">
                    <div>
                         <i class="fas fa-phone-alt"></i>
                    </div>
                    <div>
                        <h4>Call:</h4>
                        <p>+234 705 0454 356</p>
                    </div>

                </div>
            </div>
            <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="450" id="gmap_canvas" src="https://maps.google.com/maps?q=Independence%20Lay-Out,%20Enugu,%20Nigeria&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
        </div>
        
    </div>

    <!--newsletter section-->
    <div id="newsletter">
        <div class="newsletter-heading">
            <h2>Join Our Newsletter</h2>
            <p>Please help us help you. We don't want you to miss out on our amazing discounts, offers and latest updates.</p>
        </div>
        <div class="form">
        <div class="d-none" id="msg_div" style="margin: 2% 0; border-radius: 15px; text-align: center; background: hsl(198, 60%, 50%); color: black; display: none">
          <span id="res_mess" style="color: white">Thanks for subscribing.</span>
        </div>
            <form method="POST"  id="mailForm" action="javascript:void(0)">
                <input type="email" id="email" name="email" placeholder="Enter your email">
                <button type="submit" name="submit" id="submit" value="Subscribe">Subscribe</button>
              </form>
        </div>
    </div>

    <!-- footer section -->
    <footer>
        <div id="footer">
            <div class="footer-content">
                <div class="column1">
                    <h2 class="text">dorcspark</h2>
                    <div class="address">
                        <p>Independence Lay-Out,</p>
                        <p>Enugu</p>
                        <p>Nigeria</p>
                    </div>
                    <div>
                        <p><b>Phone:</b><span>+234 705 0454 356</span> </p>
                        <p><b>Email:</b><span>digitals@dorcspark.com.ng</span></p>
                    </div>
                </div>
                <div class="column1">
                    <h2>Our Services</h2>
                    <div>
                        <ul>
                            <li><i class="fas fa-greater-than"></i> <a href="#">Web Design</a></li>
                            <li><i class="fas fa-greater-than"></i> <a href="#">Web Development</a></li>
                            <li><i class="fas fa-greater-than"></i> <a href="#">Graphics Design</a></li>
                            <li><i class="fas fa-greater-than"></i><a href="#"> Video Editing</a></li>    
                        </ul>
                    </div>      
                </div>
                <div class="column1">
                    <h2>Our Social Networks</h2>
                    <div>
                       <P>We literally don't sleep just to stay connected. Get in touch anytime!</P>
                    </div>
                    <div class="social">
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                    </div>
                    
                </div>
            </div>
           
        </div>
    </footer>

    <!-- <script src="js/script.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/additional-methods.min.js"></script>
    <script src="js/all.js"></script>
    <script src="js/all.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            offset: 120,
        });
      </script>
      <script>
        if ($("#mailForm").length > 0) {
           $("#mailForm").validate({
             
           rules: {
              message: {
                   required: true,
               },
               email: {
                       required: true,   
                       email: true,
                   },    
           },
           submitHandler: function(form) {
            $.ajaxSetup({
                 headers: {
                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                 }
             });
             $('#submit').html('Sending...');
             $.ajax({
               url: '/mail.php' ,
               type: "POST",
               data: $('#mailForm').serialize(),
               success: function( response ) {
                   $('#submit').html('Submit');
                   $('#res_mess').show();
               $('#msg_div').show();
                   $('#res_mess').html(response.msg);
                   document.getElementById("mailForm").reset(); 
                   setTimeout(function(){
                   $('#res_mess').hide();
                   $('#msg_div').show();
                   },10000);
               }
            });
           }
         })
        }
        </script>
        <script src="js/script.js"></script>
</body>
</html>
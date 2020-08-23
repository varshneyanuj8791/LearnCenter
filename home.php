<html>
    <head>
        <title>The Learning website</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-compatible" content="IE-edge">
        <meta name="viewport" content="width-device-width">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/learn.css">
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css"/>
          <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
          <script type="text/javascript" src="js/bootstrap.js"></script>
        
    </head>
    <body>
   
<!-- header -->
<?php
      include_once 'header.php';
      ?>
 	<!-- end of header -->

       <!-- slide area -->
        <div class="container-fluid" style="border:0px solid; height:700px;padding:90px 0px 0px 0px;">
                 <!-- crousal -->
           <div id="myCarousel" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/book-hd-png--1920.png" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/photo.jpg" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/school-study-learn-books-wallpaper.jpg" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
       <!-- end of crousal -->
    </div><!-- end of container-fluid -->
       <!-- end of slide area -->

<!-- content area -->
           <div class="container" style="margin-top:30px;border:0px solid">
             <div class="row">
               <div class="col-lg-8 col-sm-12" >
                  <h1>Welcome to LearnCenter.com</h1>
                  <p>Learncenter.com is presently one of the top websites to explore and learn through video tutorials.The good thing about our
                    website and tutorials is the wide variety and topics of video tutorials i chose to teach on.</p>

                   <p>Another good thing about my  video tutorials is that  it is constructed, taught and  explained in such a way  that even an
                   expert or beginer of that particular topic will easily understand it in  the upcoming days. We will be  uploading the video
                   tutorials related to website desigining, website development, software development. We choose all those topic and courses
                   to make video tutorials that will  help each one of  my  follower to  excel  in it in the future</p>
                </div><!-- end of col8 -->
                <div class="col-lg-4 col-sm-12">
                   <img src="img/lan3.jpg" style="border-radius:20px; width:100%;max-height:auto;max-width:100%;" class="img-responsive" >
                </div>     
            </div>
           </div>
<!-- courses -->
           <div class="container-fluid our_courses">
             <h2 class="text-center" style="padding:15px;color:black"> OUR COURSES </h2>
             <div class="container">
             <center><div class="row">
               <div class="col-lg-3 col-sm-6 ">
                  <img src="img/html2.png" style="border-radius:20px; margin-top:30px;" class="img-responsive">
               </div>
               <div class="col-lg-3 col-sm-6">
                    <img src="img/css2.jpg" style="border-radius:20px;margin-top:30px;" class="img-responsive">
               </div>
               <div class="col-lg-3 col-sm-6">
                     <img src="img/js2.png" style="border-radius:20px;margin-top:30px;" class="img-responsive">
               </div>
               <div class="col-lg-3 col-sm-6">
                     <img src="img/bootstrap.jpg" style="border-radius:20px;margin-top:30px;" class="img-responsive">
               </div>
             </div><!-- end of row1 -->
               <div class="row">
                <div class=" col-lg-3 col-sm-6">
                  <img src="img/php2.jpg" style="border-radius:20px;margin-top:30px;" class="img-responsive">
               </div>
               <div class="col-lg-3 col-sm-6">
                    <img src="img/.net.jpg" style="border-radius:20px;margin-top:30px;" class="img-responsive">
               </div>
               <div class="col-lg-3 col-sm-6 ">
                     <img src="img/java.png" style="border-radius:20px;margin-top:30px;" class="img-responsive">
               </div>
               <div class="col-lg-3 col-sm-6 ">
                      <img src="img/c++.png" style="border-radius:20px;margin-top:30px;" class="img-responsive">
               </div>
              </div><!-- end of row2 --> </center>
           </div>
           </div><!-- end of container-fluid -->
              
 <!-- contact --->
 <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-lg-6 col-sm-12">
                         <form id="contact-form" role="form" action="" method="post">
                              <div class="section-title">
                                   <h2>Contact us <small>we love conversations. let us talk!</small></h2>
                              </div>

                              <div class=" col-sm-12">
                                   <input type="text" class="form-control" placeholder="Enter full name" name="name" required>
                    
                                   <input type="email" class="form-control" placeholder="Enter email address" name="email" required>

                                   <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" required></textarea>
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" class="form-control" name="send message" value="Send Message">
                              </div>

                         </form>
                    </div>

                    <div class="col-lg-6 col-sm-12">
                         <div class="contact-image">
                              <img src="img/contact-1.jpg" class="img-responsive" alt="Smiling Two Girls" style="border-radius:10px;">
                         </div>
                    </div>

               </div>
          </div>
     </section>         
       <!-- end of content area -->

 <!-- footer -->
             <?php
             include_once 'footer.php'
             ?>
 <!-- end of footer -->                

    </body>
</html>
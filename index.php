<!-- Database connect -->
<?php
    include('query_config.php');
    $top_header_data=top_header_data();
    $bottom_header_data=bottom_header_data();
    $slider_data=slider_data();
    $content=work_content();
    $achievedment=achievedment();
    $services=services();
    $features=features();
    $featuresContent=featuresContent();
    $social_icon=social_icon();
    $team=team();

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Project</title>
  </head>
  <body>

  <!-- Heda Banner-->
      <section>
         <div class="container-fluid">
           <div class="row">
            <div class="col-md-3 phone"></div>
            <div class="col-md-3 phone">
               <a href="<?php echo $top_header_data['facebook'];?>" title="Facebook"><i class="fa fa-facebook"></i></a>
               <a href="<?php echo $top_header_data['twitter'];?>" title="Twitter"><i class="fa fa-twitter"></i></a>
               <a href="<?php echo $top_header_data['google'];?>" title="Google"><i class="fa fa-google-plus"></i></a>
               <a href="<?php echo $top_header_data['wifi'];?>" title="WiFi"><i class="fa fa-wifi"></i></a>
               <a href="<?php echo $top_header_data['linkedin'];?>" title="linkedin"><i class="fa fa-linkedin"></i></a>
               <a href="<?php echo $top_header_data['youtube'];?>" title="Youtube"><i class="fa fa-youtube-play"></i></a>
            </div>

            <div class="col-md-2 phone phone1">
                <a href="" title="Phone"><i class="fa fa-phone"></i></a>
                <P><?php echo $top_header_data['mobile'];?></P>
            </div>

            <div class="col-md-2 phone phone1">
                <a href="" title="Mail"><i class="fa fa-envelope-o"></i></a>
                <p><?php echo $top_header_data['email'];?></p>
           </div>
            <div class="col-md-2 phone phone1">
              <a href="<?php echo $top_header_data['store_date'];?>"><i class="fa fa-tachometer"></i></a>
              <p>Mon - Sat 9:00 - 19:00</p>
           </div>
          </div>
         </div>
       </section>

    <section class="sec1"></section>
       <section class="sec2">
         <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#">
    <img src="img/logo1.png">
  </a>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <?php 
        foreach ($bottom_header_data as  $menu) {
      ?>
        <li class="nav-item">
          <a class="nav-link" href="#"><?php echo $menu['menu_name'];?></a>
        </li>
      <?php 
        }
      ?>
    </ul>
   
  </div>
</nav>
   </div>
       </section>
       <section class="slider">
       <div class="container">
         <div class="text text-center"><br><br><br><br><br>
             <!--  for slider tilte -->
              <?php 
                foreach ($slider_data as $slider) {
                  ?>
                <h2><?php echo $slider['title']?></h2>
                  <?php
                }
              ?>
               <br><br>
              <p><span>Lorem Ipsum is simply dummy text </span> of the printing and typesetting industry.<span> Lorem Ipsum has been &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp the industry's standard dummy.</span></p>
              <br><br><br>
              <div class="center1">
                 <a href="backEnd/login.php">Log In</a><br><br><br><br>
               </div>
        </div>
       </div>
       </section>

       <section class="smart">
         <div class="container">
           <div class="row">
            <?php
              foreach ($content as $single_content) {
            ?>
             <div class="col-md-4 box">
             <figure>
               <img src="backEnd/<?php echo $single_content['image'] ?>" alt="..." class="img-thumbnail">
               <figcaption>
               <i class="fa fa-building-o"></i>
               <h5><?php echo $single_content['title'] ?></h5>
               <p> <?php echo $single_content['content'] ?></p>
               </figcaption>
              </figure>
             </div>
             <?php
              } 
             ?>
           </div>
         </div>
       </section>

       <section class="cliant">
         <div class="container prize">
           <div class="row">
             <div class="col-md-3 "><br><br><br>
             <i class="fa fa-list-alt"></i>
             <br>
               <h2><?php echo $achievedment[0]['project']?></h2>
               <p>TOTAL PROJECTS</p>
             </div>
             <div class="col-md-3 "><br><br><br>
             <i class="fa fa-smile-o"></i><br>
               <h2><?php echo $achievedment[0]['cliant']?></h2>
               <p>HAPPY CLIENTS</p>
             </div>
             <div class="col-md-3 "><br><br><br>
             <i class="fa fa-user"></i><br>
               <h2><?php echo $achievedment[0]['member']?></h2>
               <p>ACTIVE MEMBER</p>
             </div>
             <div class="col-md-3 "><br><br><br>
             <i class="fa fa-dropbox"></i><br>
               <h2><?php echo $achievedment[0]['award']?></h2>
               <p>AWARD</p>
             </div>
           </div>
         </div><br><br>
       </section>

         <section class="worked">
              <div class="work-heading">
                <h4>FEATURED WORKS</h4>
                <p>... SEE OUR WORKS TYPE</p>
                <div class="container">
                  <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-7 button-cls">
                    <?php 
                      foreach ($features as $single_features) {
                        ?>
                     <button type="button" class="btn bg-success text-white light"><?php echo $single_features['features_name']?></button>
                     <?php
                      }
                      ?>
                    </div>

                <div class="col-md-2 "></div>
                  </div>
                  <div class="row hide ">
                  <?php 
                      foreach ($featuresContent as $single_featuresContent) {
                        ?>
                        <div class="col-md-3 zoom">

                      <img src="backEnd/<?php echo $single_featuresContent['categories_image']?>" alt="..." class="img-thumbnail">
                      <div class="details">
                        <h4><?php echo $single_featuresContent['categories_title']?></h4>
                        <p><?php echo get_feature_name_by_id($single_featuresContent['features_id'])?></p>
                      </div>
                    </div>
                        <?php
                      }
                    ?>
                    
                    
                  </div>
                </div>
              </div>
            </section>
            <section class="providing">
              <div class="container">

                <div class="row">
                <?php
                  foreach ($services as $single_services) {
                   ?>
                    <div class="col-md-6 respon">
                    <img src="backEnd/<?php echo $single_services['services_image']?>" alt="..." class="img-thumbnail">
                  </div>
                  <div class="col-md-6 respon-head">
                    <h4><?php echo $single_services['services_title']?></h4>

                    <p><?php echo $single_services['services_description']?></p><br>
                    <button type="button" class="btn btn-outline-warning">&nbsp LEARN MORE &nbsp</button>
                    <button type="button" class="btn btn-outline-warning ">&nbsp GET IN TOUCH &nbsp</button>
                    <br><br>
                  </div> 
                  

                   <?php
                  }
                ?>
                                  
                  </div>                  
                </div>
              </div>
            </section>
            <section class="worker">
            <div class="container team"> 
              <h4>OUR TEAM</h4>
              <p>...Lets see team members</p>         
            </div>
            <div class="container">
              <div class="row">
                <div class="col-md-3 zoom1">
                  <img src="img/team1.jpg" alt="..." class="img-thumbnail ">
                  <div class="details1">
                        <div class="faclass">
                        <a href="<?php echo $social_icon['mobile'];?>" title="mobile"><i class="fa fa-phone"></i></a>&nbsp
                        <a href="<?php echo $social_icon['facebook'];?>" title="Facebook"><i class="fa fa-facebook"></i></a>&nbsp
                        <a href="<?php echo $social_icon['twitter'];?>" title="twitter"><i class="fa fa-twitter"></i></a>&nbsp
                        <a href="<?php echo $social_icon['google'];?>" title="google"><i class="fa fa-google"></i></a>&nbsp
                        <a href="<?php echo $social_icon['instagram'];?>" title="instagram"><i class="fa fa-instagram"></i></a>&nbsp
                        </div>
                        <p><?php echo $social_icon['description'];?></p>
                      </div>
                  <div class="img-down">
                    <h4><?php echo $team['name']?></h4>
                    <h5><?php echo $team['designation']?></h5>
                  </div>
                </div>
                <div class="col-md-3 zoom1">
                  <img src="img/team2.jpg" alt="..." class="img-thumbnail">
                    <div class="details1">
                        <div class="faclass">
                        <a href="<?php echo $social_icon['mobile'];?>" title="mobile"><i class="fa fa-phone"></i></a>&nbsp
                        <a href="<?php echo $social_icon['facebook'];?>" title="Facebook"><i class="fa fa-facebook"></i></a>&nbsp
                        <a href="<?php echo $social_icon['twitter'];?>" title="twitter"><i class="fa fa-twitter"></i></a>&nbsp
                        <a href="<?php echo $social_icon['google'];?>" title="google"><i class="fa fa-google"></i></a>&nbsp
                        <a href="<?php echo $social_icon['instagram'];?>" title="instagram"><i class="fa fa-instagram"></i></a>&nbsp
                        </div>
                        <p><?php echo $social_icon['description'];?></p>
                      </div>
                  <div class="img-down">
                    <h4>ALEX KEVIN</h4></a></a>
                    <h5>CONSTRUCTION ASSISTANT</h5>
                  </div>
                </div>
                <div class="col-md-3 zoom1">
                  <img src="img/team3.jpg" alt="..." class="img-thumbnail">
                   <div class="details1">
                        <div class="faclass">
                        <a href="<?php echo $social_icon['mobile'];?>" title="mobile"><i class="fa fa-phone"></i></a>&nbsp
                        <a href="<?php echo $social_icon['facebook'];?>" title="Facebook"><i class="fa fa-facebook"></i></a>&nbsp
                        <a href="<?php echo $social_icon['twitter'];?>" title="twitter"><i class="fa fa-twitter"></i></a>&nbsp
                        <a href="<?php echo $social_icon['google'];?>" title="google"><i class="fa fa-google"></i></a>&nbsp
                        <a href="<?php echo $social_icon['instagram'];?>" title="instagram"><i class="fa fa-instagram"></i></a>&nbsp
                        </div>
                        <p><?php echo $social_icon['description'];?></p>
                      </div>
                  <div class="img-down">
                     <h4>PETERSON RONG</h4>
                    <h5>CONSTRUCTION MANAGER</h5>
                  </div>
                </div>
                <div class="col-md-3 zoom1">
                  <img src="img/team4.jpg" alt="..." class="img-thumbnail">
                   <div class="details1">
                        <div class="faclass">
                        <a href="<?php echo $social_icon['mobile'];?>" title="mobile"><i class="fa fa-phone"></i></a>&nbsp
                        <a href="<?php echo $social_icon['facebook'];?>" title="Facebook"><i class="fa fa-facebook"></i></a>&nbsp
                        <a href="<?php echo $social_icon['twitter'];?>" title="twitter"><i class="fa fa-twitter"></i></a>&nbsp
                        <a href="<?php echo $social_icon['google'];?>" title="google"><i class="fa fa-google"></i></a>&nbsp
                        <a href="<?php echo $social_icon['instagram'];?>" title="instagram"><i class="fa fa-instagram"></i></a>&nbsp
                        </div>
                        <p><?php echo $social_icon['description'];?></p>
                      </div>
                  <div class="img-down">
                     <h4>ROHAN HOKOS</h4>
                    <h5>CELECTRICIANS</h5>
                  </div>
                </div>
              </div>
            </div>
            <br><br><br>
            </section>

            <section class="ready">
              <div class="container start"><br><br>
                <h3>Are You Ready To Get Started?</h3><br>
                <button type="button" class="btn btn-outline-warning mr-auto">GET STARTED</button>
              </div>
              <br><br>
            </section>
            <section class="testimonial">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-success"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-danger"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="container test1">
              <h3><span>Our</span> Testimonial</h3>
              <p>... SEE OUR TESTIMONIAL</p>
                <div class="row">
                  <div class="col-md-4">
                    <div class="test-para">
                      <p><i class="fa fa-quote-left"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.Lorem Ipsum has been the industry simply dummy text. <i class="fa fa-quote-right"></i></p>
                    </div>
                    <div class="test-area">
                      <img src="img/ceo.jpg">
                      <h5>ABDUR RAHIM </h5>
                      <p>CEO,CONSTRACTION PLUS</p>
                    </div>
  
                  </div>                  
                 <div class="col-md-4">
                    <div class="test-para">
                      <p><i class="fa fa-quote-left"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.Lorem Ipsum has been the industry simply dummy text. <i class="fa fa-quote-right"></i></p>
                    </div>

                    <div class="test-area">
                      <img src="img/md.jpg">
                      <h5>REDOY HAJARI</h5>
                      <p>MD,CONSTRACTION PLUS</p>
                    </div>
                  </div> 

                  <div class="col-md-4">
                    <div class="test-para">
                      <p><i class="fa fa-quote-left"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.Lorem Ipsum has been the industry simply dummy text. <i class="fa fa-quote-right"></i></p>
                    </div>
                    <div class="test-area">
                      <img src="img/gm.jpg">
                      <h5>MD.SHARIF KHAN</h5>
                      <p>GM,CONSTRACTION PLUS</p>
                    </div>
                    
                  </div>                  
                </div>
              </div>
          </div>
    <div class="carousel-item">
      <div class="container test1">
                <h3><span>Our</span> Testimonial</h3>
                <p>... SEE OUR TESTIMONIAL</p>

                <div class="row">
                  <div class="col-md-4">
                    <div class="test-para">
                    
                      <p><i class="fa fa-quote-left"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.Lorem Ipsum has been the industry simply dummy text. <i class="fa fa-quote-right"></i></p>

                    </div>
                    <div class="test-area">
                      <img src="img/team1.jpg">
                      <h5>JOHNOB HOHN</h5>
                      <p>CEO,Cstudio</p>
                    </div>
                    
                  </div>                  
                 <div class="col-md-4">
                    <div class="test-para">
                    
                      <p><i class="fa fa-quote-left"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.Lorem Ipsum has been the industry simply dummy text. <i class="fa fa-quote-right"></i></p>

                    </div>
                    <div class="test-area">
                      <img src="img/team2.jpg">
                      <h5>RATUL SARKAR</h5>
                      <p>MD,Cstudio</p>
                    </div>
                    
                  </div>                  
                  <div class="col-md-4">
                    <div class="test-para">
                    
                      <p><i class="fa fa-quote-left"></i> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.Lorem Ipsum has been the industry simply dummy text. <i class="fa fa-quote-right"></i></p>

                    </div>
                    <div class="test-area">
                      <img src="img/team3.jpg">
                      <h5>ROKIN KHAN</h5>
                      <p>GM,Cstudio</p>
                    </div>
                    
                  </div>                  
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
           <section class="contact">
                <div class="container">
                <div class="contactus">
                  <h5>Quick <span>Request</span></h5>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the<span> industry simply dummy text of the printing and typesetting industry.</span></p>
                </div>
                
                  <div class="row white">
                    <div class="col-md-6">
                      <input type="text" name="name" placeholder="Enter Your Name" class="form outline-warning">
                    </div>
                    <div class="col-md-6">
                        <input type="email" name="email" placeholder="Enter Your Email" class="form">
                    </div>
                  </div>
                   <div class="row white">
                    <div class="col-md-6">
                      <input type="text" name="name" placeholder="Enter Mobile Number" class="form">
                    </div>
                    <div class="col-md-6">
                      <input type="email" name="email" placeholder="Enter Your Subject" class="form">
                    </div>
                  </div>
                   <div class="row white">
                  <div class="col-md-12">
                    <textarea rows="4" cols="9" class="form1" placeholder="Enter Your Comment..."></textarea>
                    <br><br>
                     <button type="button" class="btn btn-outline-warning btn-lg mr-auto">SUBMIT</button>
                  </div>
                </div>
                </div>
                  </div>
                <div>
            </section>

            <section class="process">
            <div class="container team"> 
              <h4>WORK PROCCES</h4>
              <p>...Lets see our work process</p>         
            </div>
             <br>
              <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <img src="img/j5.jpg" alt="..." class="img-thumbnail ">
                 
                  <div class="img-down">
                    <h4>CURRENT STATE</h4>
                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur.</h5><BR><br>
                  </div>
                </div>
                <div class="col-md-4 ">
                  <img src="img/j4.jpg" alt="..." class="img-thumbnail">
                    
                  <div class="img-down">
                    <h4>DEVELOPING GOAL</h4></a></a>
                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur</h5><BR><br>
                  </div>
                </div>
                <div class="col-md-4 ">
                  <img src="img/j2.jpg" alt="..." class="img-thumbnail">
                  <div class="img-down">
                     <h4>ANALIYSIS</h4>
                    <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit.Lorem ipsum dolor sit amet, consectetur</h5><BR><br>
                  </div>
                </div>
               
              </div><br><br><br>
            </div>
            </section>
            <section class="footer">
              <div class="container">
              <div class="row">
                <div class="col-md-3 location">
                  <h6>Contact Us</h6>
                  <div class="location-para">
                  <i class="fa fa-map-marker"></i>
                    <p>123 Main Street, St. NW Ste, 1 Washington, DC,USA.</p>
                  </div>
                  <div class="location-sms">
                  <i class="fa fa-envelope-o"></i>
                    <p>business@support.com.</p>
                  </div>

                  <div class="location-phone">
                  <i class="fa fa-phone"></i>
                    <p>+56 (0) 012 345 6789</p>
                  </div>
                  
                </div>
                <div class="col-md-2 links">
                  <h6>Links</h6>
                  <p> ABOUT US</p>
                  <p>SERVICES</p>
                  <p>PRIVACY POLICY</p>
                  <p>TERMS & CONDITION</p>
                </div>
                <div class="col-md-3 blog">
                  <h6>Latest Blog</h6>
                  <img src="img/6-1.jpg">
                  <p>UT ENIM AD MINIM VENIAM, QUIS NOSTRUD EXERCITATION
                  ON 10 FEB, 2018</p><br>
                  <img src="img/1-1.jpg">
                  <p> QUIS NOSTRUD EXERCITATION, AD MINIM VENIAM
                  ON 28 APRIL, 2018</p>
                </div>
                 <div class="col-md-3 last-size">
                  <h6>Newsletter Signup</h6>
                  <p> Subscribe to Our Newsletter to get Important News, Amazing Offers & Inside Scoops:</p>
                  <p>Subscribe to Our Newsletter</p>
                 
                </div>
               
                </div>
                </div>
              </div>
            </section>
            <section class="copy-right">
              <div class="container">
                <h6>© 2018 Jio Construction HTML5 Template . All Rights Reserved.</h6>
              </div>              
            </section>
              


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
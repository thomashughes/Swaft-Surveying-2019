<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Swaft surveying</title>
  <link href="https://fonts.googleapis.com/css?family=Karla|Rubik" rel="stylesheet">
   <link rel="stylesheet" href="animate.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="styles.css" media="screen" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">



</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light  scrolling-navbar">
    <a class="navbar-brand" href="#">Swaft Surveying</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav nav smooth-scroll list-unstyled justify-content-end">
        <li class="nav-item active">
          <a class="nav-link">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#container2">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#container-4">
            Services
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>

      </ul>
      <form class="form-inline my-2 my-lg-0">
        <button class="btn btn-outline-success my-2 my-sm-0" data-toggle="modal" data-target="#exampleModalCenter">Contact</button>
      </form>
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Contact</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form id="contact-form" method="post" action="contact.php" role="form">
                <div class="messages"></div>
                <div class="controls">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="form_name">First Name *</label>
                        <input id="form_name" type="text" name="name" class="form-control" placeholder="First Name *" required="required" data-error="Firstname is required.">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="form_lastname">Last Name *</label>
                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Last Name *" required="required" data-error="Lastname is required.">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="form_email">Email *</label>
                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please Enter Your Email *" required="required" data-error="Valid email is required.">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="form_need">Please specify your need *</label>
                        <select id="form_need" name="need" class="form-control" required="required" data-error="Please specify your need.">
                          <option value=""></option>
                          <option value="Request quotation">Request quotation</option>
                          <option value="Request order status">Request order status</option>
                          <option value="Request copy of an invoice">Request copy of an invoice</option>
                          <option value="Other">Other</option>
                        </select>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="form_message">Message *</label>
                        <textarea id="form_message" name="message" class="form-control" placeholder="Message *" rows="4" required="required" data-error="Please, leave us a message."></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <input type="submit" class="btn btn-success btn-send" value="Send message">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <p class="text-muted">
                        <strong>*</strong> These fields are required.
                      </div>
                    </div>
                  </div><!--controls-->
                </form>
              </div><!--modal-body-->
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div><!--modal-footer-->
            </div><!--modal-content-->
          </div><!--modal-dialog-->
        </div><!--modal/fade-->
      </div><!--navbar/collapse-->
    </nav><!--nav-->



    <div class="view" style="background-image: url('http://localhost/EdsWebsite/images/architect-architecture-build-1109541.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
      <!-- Mask & flexbox options-->
      <div class="mask rgba-gradient ">
        <!-- Content -->
        <div class="container intro">
          <!--Grid row-->
          <div class="row">
            <!--Grid column-->
            <div class="col-md-6 intro-text">
            <h1  class="animated  lightSpeedIn delay-1s">Swaft </span><span style="color:#2ecc71; font-weight:800;">Surveying</span> </h1>
              <hr class="hr-light">
              <h6 class="typewriter">Final Account Reconciliation</h6>
              <h6 class="typewriter2">Takeoffs & Tenders</h6>

              <button type="button" class="btn btn-primary btn-1 orange-color-bg" data-toggle="modal" data-target="#exampleModalCenter">Contact</button>
            </div> <!--intro-text-->
          </div><!--row-->
        </div><!--container-fluid-->
      </div><!--mask/rgba-garadient-->
    </div><!--view-->

    <div class="container container-pad" id="container2">
      <h2>About Us</h2>
      <div class="row">
        <div class="about container about-text col-md-6">
          <div id="about-bold-text"><h3>In today′s world, the importance of a well-executed web presence cannot be underestimated</h3>
          </div>
          <br><br>
          <div id="about-light-text"><p>Our company’s history starts 20 years ago when we’ve decided to make the world a better place for those, who are the owners or smaller business! By now we’ve helped hundreds of top-flight companies and thousands of SMBs to call the right decisions on internal management, M&As, etc.</p>
          </div>
        </div><!--about/container-->


        <div class="col-md-6 prog-bar container about">
          <h3>Happy Customers</h3>
          <div class="progress">
            <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width:100%">
              big things
            </div>
          </div>
          <br>
          <h3>Average Amount Saved</h3>
          <div class="progress">
            <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="93" aria-valuemin="0" aria-valuemax="100" style="width:93%">
              <span>Over 1000 people!<span class="align-right">hello</span>
            </div>
          </div>
          <br>
          <h3>Years Industry Experience</h3>
          <div class="progress">
            <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
              <span> Over 10060 people!</span>
            </div>
          </div>
        </div><!--prog-bar-->
      </div><!--row-->
    </div><!--container2-->





    <div class="view container-pad" id="container3" style="background-image: url('http://localhost/EdsWebsite/images/antique-architecture-backdrop-168442.jpg'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed;" >
        <div class="col-md-12 jumbotron no-bg" style="background-color:rgba(0, 0, 0, 0)" >
          <div class="consultation text-center">
            <h2>Every 1st consultation <br>
              <span class="heavier-text">with us is <span class="orange-color">FREE</span></span></h2>
              <button type="button" class="btn btn-primary btn-1 orange-color-bg" data-toggle="modal" data-target="#exampleModalCenter">Get In Touch</button>
          </div>

        </div><!--col-md-12-->

    </div><!--container/container-3-->




    <div class="container container-pad" id="container-4">
      <h2>Services</h2>
      <div class="row">

        <div class="col-md-4">
          <div class="services">
            <img src="images\mt-1509-home-icon3.png" class="services-img img-fluid" alt="clipboard">
            <h3>Accounts</h3>
            <p>If you need your business flourish despite all circumstances, then it is a perfect strategic planning you need to do.</p>
          </div>
        </div>

        <div class="col-md-4">
          <div class="services">
            <img src="images\mt-1509-home-icon1.png" class="services-img img-fluid" alt="clipboard">
            <h3>Accounts</h3>
            <p>If you need your business flourish despite all circumstances, then it is a perfect strategic planning you need to do.</p>

          </div>
        </div>

        <div class="col-md-4">
          <div class="services">
            <img src="images\mt-1509-home-icon2.png" class="services-img img-fluid" alt="clipboard">
            <h3>Accounts</h3>
            <p>If you need your business flourish despite all circumstances, then it is a perfect strategic planning you need to do.</p>
          </div>
        </div>

      </div>

    </div>
    <div class=" socialbar">

      <div class=" row social-container">
        <h2>Follow Us!</h2>
        <div class="col-md-12">
          <div class="social-icons">
              <!-- Facebook -->
              <a href="#" class="fa fa-facebook" id="fb"></a>
              <!-- Twitter -->
              <a href="#"class="fa fa-twitter" id="tw"></a>
              <!--linkedin-->
              <a href="#" class="fa fa-linkedin" id="lin"></a>
            </div>
          </div>

      </div>

    </div>

    <div class="container contact">
      <div class="row contact-container">

      </div>

    </div>


    <footer>
 <div class="container">
   <div class="row text-center">

             <div class="col-md-6">
              <ul class="list-inline">

                           <li class="menusocail">
                                <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                           </li>

                           <li class="menusocail">
                                <a href="#"><i class="fa fa-dropbox fa-2x"></i></a>
                           </li>

                           <li class="menusocail">
                                <a href="#"><i class="fa fa-flickr fa-2x"></i></a>
                           </li>

                           <li class="menusocail">
                                <a href="#"><i class="fa fa-github fa-2x"></i></a>
                           </li>

                           <li class="menusocail">
                                <a href="#"><i class="fa fa-linkedin fa-2x"></i></a>
                           </li>

                           <li class="menusocail">
                                <a href="#"><i class="fa fa-tumblr fa-2x"></i></a>
                           </li>

                           <li class="menusocail">
                                <a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
                          </li>

                 </ul>
               </div>

             <div class="col-md-6 col-sm-6 col-xs-12">
              <ul class="menu list-inline">

                     <li class="menusocail">
                        <a href="#">Home</a>
                      </li>

                      <li class="menusocail">
                         <a href="#">About</a>
                      </li>

                      <li class="menusocail">
                        <a href="#">Blog</a>
                      </li>

                      <li class="menusocail">
                         <a href="#">Gallery </a>
                      </li>

                      <li class="menusocail">
                        <a href="#">Contact</a>
                     </li>

             </ul>
           </div>


       </div>
    </div>
</footer>

<div class="copyright">
 <div class="container">

     <div class="row text-center">
     	<p>Copyright Thomas Hughes</p>
     </div>

    </div>
</div>
<!-- End -->
  </body>

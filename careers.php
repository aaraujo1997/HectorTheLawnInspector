<?php
    if(isset($_POST['submit'])){
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $skills = $_POST['skills'];
        $resume = $_POST['resume'];

        $mailTo = "service@hectorinspector.com";
        $headers = "From: " . $email;

        $name = $firstName . " " . $lastName . "is contacting you about possible employment. \n";
        $skillsSection = "Skills & Qualifications: " . $skills . "\n";
        $contactSection = "They can be contacted at: " . $phone . "or " . $email;

        $subject = "Job Inquiry";
        $message = $name . $skillsSection . $contactSection;

        $sent =  mail($mailTo, $subject, $message, $headers);
        
        if ($sent) {
          echo '<script type="text/javascript"> alert("Your email
           was succesfully sent. We will be contacting you shortly.") </script>';
        }
        else
        {
          echo '<script type="text/javascript"> alert("Submission failed. Try again later.") </script>';
        }
        

    }
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Hector the Lawn Inspector</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="resources/lawncare.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Lato" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-R4RHSSS8VK"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-R4RHSSS8VK');
    </script>
  </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#myPage">
              Hector the Inspector
            </a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.html">BACK TO HOME</a></li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="jumbotron careers-jumbo text-center shadow-lg">
        <h1>JOIN THE TEAM</h1>
        <h3>Now Hiring Experienced Professionals</h3>
      </div>
      <!-- Container (Inquire Careers) -->
      <div id="inquire" class="container" style="margin-bottom: 5%;">
        <h3 class="text-center">Now Accepting Applications</h3>
        <h4 class="text-center">Tell us a little about yourself</h4>
          <div class="row text-center">
            <div class="col-sm-4 text-center">
                <span class="logo material-icons">group_add</span>
            </div>
            <div class="col-sm-8">
              <br>
            <main>
              <form action="" method="post">
              <div class="row">
                <div class="col-sm-4 text-left">
                  <label for="firstName"> First Name </label>
                  <input type="text" id="firstName" name="firstName" class="form-control" placeholder="First Name" required>
                </div>
                <div class="col-sm-4 text-left">
                  <label for="lastName"> Last Name </label>
                  <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Last Name" required>
                </div>
              </div>
              <br>
                <div class="row">
                  <div class="col-sm-8 text-left">
                    <label for="email"> Email </label>
                    <input type="text" id="email" name="email" class="form-control" placeholder="Email" required>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-sm-8 text-left">
                    <label for="phone"> Mobile Number </label>
                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Mobile Number" required>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-sm-8 text-left">
                    <label for="expertise">Skills & Expertise</label>
                    <textarea class="form-control" id="skills" name="skills" rows="5"
                    placeholder="Please provide a description of any skills, experience or qualifications here." required></textarea>
                  </div>
                </div>
                <br>
                <br>
                <div class="row text-center">
                    <div class="col-sm-4 text-left">
                      <label for="resumeUpload"> Resume Upload</label>
                      <small>(Optional)</small>
                      <input type="file" class="form-control-file" id="resumeUpload" name="resume" style="display: inline !important;">
                    </div>
                </div>
                <br>
                <div class="row text-center">
                  <div class="col-sm-8">
                      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                  </div>
                </div>
            </form>
          </main>
              <br>
            </div>
            </div>
          </div>

      <footer class="container text-center">
        <div class="text-center p-3" style="color: #F5F5F5;">
          © 2022 Copyright:
          <a class="text-light" href="https://hectortheinspector.com/"> hectortheinspector.com</a>
        </div>
      </footer>

      <script>
      $(document).ready(function(){
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 900, function(){

              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            });
          } // End if
        });

        $(window).scroll(function() {
          $(".slideanim").each(function(){
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
              if (pos < winTop + 600) {
                $(this).addClass("slide");
              }
          });
        });
      })
      </script>
  </body>

</html>

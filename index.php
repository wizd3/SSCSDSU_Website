<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Saudi Students Club at SDSU</title>

    <link rel="stylesheet" href="css/styles.css">

    <link rel="icon" href="favicon.ico">

    <script type="text/javascript" src="jquery-1.12.4.js"></script>

  </head>

  <body>

    <!--Navigation Bar -->
    <?php include 'navbar.php';?>

    <!--Content of the home (index) page: -->

    <div class="Index-Top-WelcomingMessage">
      <h1 id="Index-Top-WelcomingMessage-H1">Welcome To Saudi Students Club<br>at San Diego State University</h1>
      <p id="Index-Top-WelcomingMessage-P">~ Your Best Friend during your new chapter at SDSU ~</p>
    </div>


    <!--Photos Slides: -->
    <div class="slideshow-container">
      <div class="home fade">
        <img class = "slideshow" src="images/pb1.png" style="width:100%">
      </div>

      <div class="home fade">
        <img class = "slideshow" src="images/pb4.png" style="width:100%">
      </div>

      <div class="home fade">
        <img class = "slideshow" src="images/eid2.png" style="width:100%">
      </div>
    </div>

    <script>
      var slideIndex = 0;
      showSlides();

      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("home");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        slides[slideIndex-1].style.display = "block";
        setTimeout(showSlides, 4000); // Change image every 4 seconds
      }
    </script>

    <!-- Footer -->
    <?php include 'footer.php';?>

  </body>
</html>

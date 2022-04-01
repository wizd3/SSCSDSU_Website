<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Past Events</title>

    <link rel="stylesheet" href="css/styles.css">

    <link rel="icon" href="favicon.ico">

  </head>

  <body>

    <!--Navigation Bar -->
    <?php include 'navbar.php';?>

    <!--Content of the past events page: -->
    <div class="PastEvents_PB">
      <h1>~ Past Events ~</h1>
      <hr>
      <h2>Paintball</h2>
      <p class="subtext">Date: 04/14/2019 &emsp; Location: Giant Paintball Park</p>
      <p>
        A day filled with action!<br>
        Ruthless, intense, and competitve atmosphere is the key to enjoy paintball.<br>
        and that exactly how we felt during this unforgettable event!
      </p>
    </div>

    <div class="slideshow-container">
      <div class="paintball">
        <img class = "slideshow" src="images/pb1.png" style="width:100%">
      </div>

      <div class="paintball">
        <img class = "slideshow" src="images/pb2.png" style="width:100%">
      </div>

      <div class="paintball">
        <img class = "slideshow" src="images/pb3.png" style="width:100%">
      </div>

      <a class="SlidePrev" onclick="plusSlides(-1, 0)">&#10094;</a>
      <a class="SlideNext" onclick="plusSlides(1, 0)">&#10095;</a>
    </div>

    <br>
    <hr>

    <div class="PastEvents_Eid">
      <h2>Eid Al-Adha</h2>
      <p class="subtext">Date: 09/01/2017 &emsp; Location: Town and Country Resort</p>
      <p>
        Good vibes, great food, and awesome people!<br>
        Since Eid Al-Adha is one of the two main holidays in Saudi Arabia.<br>
        We had a blast celeberating this sensational occasion with our students at SDSU.
      </p>
    </div>

    <div class="slideshow-container">
      <div class="eid">
        <img class = "slideshow" src="images/eid1.png" style="width:100%">
      </div>

      <div class="eid">
        <img class = "slideshow" src="images/eid2.png" style="width:100%">
      </div>

      <div class="eid">
        <img class = "slideshow" src="images/eid3.png" style="width:100%">
      </div>

      <a class="SlidePrev" onclick="plusSlides(-1, 1)">&#10094;</a>
      <a class="SlideNext" onclick="plusSlides(1, 1)">&#10095;</a>
    </div>

    <script>
      var slideIndex = [1,1];
      var slideId = ["paintball", "eid"]
      showSlides(1, 0);
      showSlides(1, 1);

      function plusSlides(n, no) {
        showSlides(slideIndex[no] += n, no);
      }

      function showSlides(n, no) {
        var i;
        var x = document.getElementsByClassName(slideId[no]);
        if (n > x.length) {slideIndex[no] = 1}
        if (n < 1) {slideIndex[no] = x.length}
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";
        }
        x[slideIndex[no]-1].style.display = "block";
      }
    </script>
    
    <!-- Footer -->
    <?php include 'footer.php';?>

  </body>
</html>

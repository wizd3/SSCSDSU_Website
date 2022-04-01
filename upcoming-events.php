<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Upcoming Events</title>

    <link rel="stylesheet" href="css/styles.css">

    <link rel="icon" href="favicon.ico">

  </head>

  <body>

    <!--Navigation Bar -->
    <?php include 'navbar.php';?>

    <!--Content of the upcoming events page: -->

    <div class="Upcoming_evemts">
      <h1>~ Upcoming Events ~</h1>
      <hr>
      <h2>Game Night</h2>

      <p class="subtext">Date: 02/19/2022 &emsp; Location: Aztec Student Union</p>
      <p>
        Join Us at "aztec student union - legacy suite" for a game night!<br>
        Don't miss out the three competitve tournaments:<br>
        1. FIFA 22 - PS5<br>
        2. Baloot<br>
        3. Chess<br>
        There will be valuable prizes for the winners of each tournament!!<br>
        <form class="Events-Registeration" action="/action_page.php" method="post">
          <input type="submit" id="Register-GameNight" name="Register-GameNight" value="Register" style="width: 250px; height: 30px;">
        </form>
      </p>
      <img class = "slideshow" src="images/upcoming.png" style="width:50%">

      <br><br>
      <hr>

      <p class="subtext">Create an Account to be notified of upcoming events.</p>
    </div>


    <!-- Footer -->
    <?php include 'footer.php';?>

  </body>
</html>

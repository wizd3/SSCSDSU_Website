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

    <div class="Upcoming_events" style="text-align: center;">
      <h1>~ Upcoming Events ~</h1>
      <hr>
      <?php 
        // Load all upcoming events and check whether user is registered or not
        $query = "SELECT * FROM events WHERE upcoming=1";
        $upcoming_events = mysqli_query($db, $query);
        while ($row = $upcoming_events->fetch_array(MYSQLI_NUM)) {
          $event_id = $row[0];
          $event_name = $row[1];
          $event_details = $row[2];
          $event_date = $row[3];
          $event_location = $row[4];
          $image = $row[6];
          ?>
          <h2> <?php echo $event_name; ?> </h2>
          <p class="subtext">Date: <?php echo $event_date; ?> &emsp; Location: <?php echo $event_location; ?> </p>
          <p>
            <?php echo $event_details; ?>
            <?php if( isset($_SESSION['userid'])){
                    $query = "SELECT * FROM userevents WHERE userid={$_SESSION['userid']} AND registered = 0";
                    $not_registered = mysqli_query($db, $query);
                    if (mysqli_num_rows($not_registered) == 1) {
                      ?> 
                      <form class="Events-Registeration" action = "" method = "post">
                        <input type="hidden" name = "event_id" value ="<?php echo $event_id; ?>" >
                        <input type="submit" name="Register-upcoming" value="Register" style="width: 250px; height: 30px;">
                      </form>
                      <?php
                    }
                    else{
                      ?>
                      <form class="Events-Registeration" action = "" method = "post">
                        <input type="hidden" name = "event_id" value ="<?php echo $event_id; ?>" >
                        <input type="submit" name="Deregister-upcoming" value="Deregister" style="width: 250px; height: 30px;">
                      </form>
                      <?php
                    }
                  }
            ?>
          </p>
          <img class = "slideshow" src= "<?php echo $image; ?>" style="width:50%">
          <br><br>
        <?php
        }
      ?>
      <hr>

      <p class="subtext">Create an Account to register for upcoming events.</p>
    </div>


    <!-- Footer -->
    <?php include 'footer.php';?>

  </body>
</html>

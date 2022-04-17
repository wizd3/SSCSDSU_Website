<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Past Events</title>

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/dataTables.bootstrap.css">

  <link rel="stylesheet" href="css/styles.css">

  <link rel="icon" href="favicon.ico">

</head>

<body>

  <!--Navigation Bar -->
  <?php include 'navbar.php';?>

  <br>
  <!--Content of the past events page: -->
  <div class="Upcoming_events">
    <h2><a href="#updateWithUpcoming"><span class="MyEventsSpan">My Upcoming Events</span></a> | <a href="#updateWithPast"><span class="MyEventsSpan" onclick="##">My Past Events &emsp;&emsp;</span></a> </h2>

  </div>

  <br>
  <hr>

  <div class="Container" style="text-align: left; padding-left: 20px; padding-right: 20px;">
    <div class="Rows">
      <div class="Columns">
        <table id="example" class="table table-striped" style="width:100%; text-align: center;">
          <thead>
            <tr>
              <th>Event Name</th>
              <th>Date</th>
              <th>Location</th>
              <th>Avg. Rating</th>
              <th>My Rate</th>
            </tr>
          </thead>
          <tbody>
            <?php 
            if( isset($_SESSION['userid'])) {

              $query = "SELECT * FROM userevents WHERE userid={$_SESSION['userid']} AND registered = 1 AND upcoming = 0";
              $past_events = mysqli_query($db, $query);
              while ($row = $past_events->fetch_array(MYSQLI_ASSOC)) {
                $event_id = $row["eventid"];
                $reviewed = !is_null($row["rating"]);
                $query = "SELECT * FROM events WHERE eventid=$event_id";
                $event_details = mysqli_query($db, $query);
                $event = $event_details->fetch_array(MYSQLI_ASSOC);
                $query = "SELECT ROUND(AVG(rating), 1) AS myAvg FROM userevents WHERE eventid=$event_id";
                $result = mysqli_query($db, $query);
                $event_rating = $result->fetch_array(MYSQLI_ASSOC);
                ?>
                <tr>
                  <td> <?php echo $event["eventname"]; ?>  </td>
                  <td> <?php echo $event["eventdate"]; ?></td>
                  <td> <?php echo $event["eventlocation"]; ?> </td>
                  <td> <?php echo $event_rating["myAvg"]; ?> </td>
                  <?php if($reviewed): ?>
                    <td> <?php echo $row["rating"]; ?>  </td>
                  <?php else: ?>
                    <td>
                        <!-- Rate Modal -->
                        <div id="id03" class="modal">

                          <form class="modal-content animate" action="" method="post">

                            <div class="container" style="text-align: center;">
                              <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                              <br>
                              <label for="quantity"><b>Rate The Event:</b></label>
                              <h6>(Out of 10)</h6>
                              <input type="hidden" name = "event_id" value ="<?php echo $event_id; ?>" >  
                              <input type="number" id="quantity" name="quantity" min="0" max="10" style="width: 200px;">

                              <br><br>

                              <button type="submit" class="btn" name="rate" style="width:300px; background-color: #C1122B; color: #E5D5B5;">Rate</button>

                            </div>

                          </form>

                        </div>

                      <button onclick="document.getElementById('id03').style.display='block'">Rate</button>
                    </td>
                  <?php endif; ?> 
                </tr>

                <?php
              }
            }

            ?>

          </tbody>
        </table>
      </div>

    </div>

  </div>

  <script type="text/javascript" src="js/jquery-3.6.0.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/jquery.dataTables.js"></script>
  <script type="text/javascript" src="js/dataTables.bootstrap.js"></script>
  <script type="text/javascript" src="js/script.js"></script>

  <br>

  <!-- Footer -->
  <?php include 'footer.php';?>

</body>

</html>

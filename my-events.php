<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Past Events</title>

  <link rel="stylesheet" href="css/styles.css">

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/dataTables.bootstrap.css">

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
              <th>Review</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Eid Al-Adha</td>
              <td>09/01/2017</td>
              <td>Town And Country Resort</td>
              <td>8.1/10</td>
              <td>
                <form class="ReviewButton" action="#" method="post" style="text-align: center;">
                  <input type="submit" name="Review" value="Review">
                </form>
              </td>
            </tr>
            <tr>
              <td>Paintball</td>
              <td>04/14/2019</td>
              <td>Giant Paintball Park</td>
              <td>9/10</td>
              <td>
                <form class="ReviewButton" action="#" method="post" style="text-align: center;">
                  <input type="button" name="Review" value="Review">
                </form>
              </td>
            </tr>
            <tr>
              <td>Game Night</td>
              <td>02/19/2022</td>
              <td>Aztec Student Union</td>
              <td>6.7/10</td>
              <td>
                <form class="ReviewButton" action="#" method="post" style="text-align: center;">
                  <input type="button" name="Review" value="Review">
                </form>
              </td>
            </tr>

            <tr>
              <td>Eid Al-Adha</td>
              <td>09/01/2017</td>
              <td>Town And Country Resort</td>
              <td>8.1/10</td>
              <td>
                <form class="ReviewButton" action="#" method="post" style="text-align: center;">
                  <input type="button" name="Review" value="Review">
                </form>
              </td>
            </tr>
            <tr>
              <td>Paintball</td>
              <td>04/14/2019</td>
              <td>Giant Paintball Park</td>
              <td>9/10</td>
              <td>
                <form class="ReviewButton" action="#" method="post" style="text-align: center;">
                  <input type="button" name="Review" value="Review">
                </form>
              </td>
            </tr>
            <tr>
              <td>Game Night</td>
              <td>02/19/2022</td>
              <td>Aztec Student Union</td>
              <td>6.7/10</td>
              <td>
                <form class="ReviewButton" action="#" method="post" style="text-align: center;">
                  <input type="button" name="Review" value="Review">
                </form>
              </td>
            </tr>


            <tr>
              <td>Eid Al-Adha</td>
              <td>09/01/2017</td>
              <td>Town And Country Resort</td>
              <td>8.1/10</td>
              <td>
                <form class="ReviewButton" action="#" method="post" style="text-align: center;">
                  <input type="button" name="Review" value="Review">
                </form>
              </td>
            </tr>
            <tr>
              <td>Paintball</td>
              <td>04/14/2019</td>
              <td>Giant Paintball Park</td>
              <td>9/10</td>
              <td>
                <form class="ReviewButton" action="#" method="post" style="text-align: center;">
                  <input type="button" name="Review" value="Review">
                </form>
              </td>
            </tr>
            <tr>
              <td>Game Night</td>
              <td>02/19/2022</td>
              <td>Aztec Student Union</td>
              <td>6.7/10</td>
              <td>
                <form class="ReviewButton" action="#" method="post" style="text-align: center;">
                  <input type="button" name="Review" value="Review">
                </form>
              </td>
            </tr>


            <tr>
              <td>Eid Al-Adha</td>
              <td>09/01/2017</td>
              <td>Town And Country Resort</td>
              <td>8.1/10</td>
              <td>
                <form class="ReviewButton" action="#" method="post" style="text-align: center;">
                  <input type="button" name="Review" value="Review">
                </form>
              </td>
            </tr>
            <tr>
              <td>Paintball</td>
              <td>04/14/2019</td>
              <td>Giant Paintball Park</td>
              <td>9/10</td>
              <td>
                <form class="ReviewButton" action="#" method="post" style="text-align: center;">
                  <input type="button" name="Review" value="Review">
                </form>
              </td>
            </tr>
            <tr>
              <td>Game Night</td>
              <td>02/19/2022</td>
              <td>Aztec Student Union</td>
              <td>6.7/10</td>
              <td>
                <form class="ReviewButton" action="#" method="post" style="text-align: center;">
                  <input type="button" name="Review" value="Review">
                </form>
              </td>
            </tr>

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
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Tutorials</title>

  <link rel="stylesheet" href="css/styles.css">

  <link rel="icon" href="favicon.ico">

  <style>
    input {
      border: 1px solid transparent;
      background-color: #f1f1f1;
      padding: 10px;
      font-size: 16px;
    }
  </style>

</head>

<body>

  <!--Navigation Bar -->
  <?php include 'navbar.php';?>

  <!--Content of the tutorials page: -->
  <div class="TutorialsDescription">
    <h1>~ Tutorials ~</h1>

    <form autocomplete="off" action="/action_page.php" style="text-align: center;">
      <div class="autocomplete" style="width:300px;">
        <input id="myInput" type="text" name="search" placeholder="Search" style="background-color: #f1f1f1; width: 100%;">
      </div>
      <input type="submit" value="Search" style="background-color: #C1122B; color: #fff; cursor: pointer;">
    </form>

    <script src="autocomplete.js"></script>

  </div>

  <hr>

  <div class="Tutorial1">
    <h3>Class Registeration</h3>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/GreWaDLMg0g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen></iframe>
  </div>

  <br>
  <hr>

  <div class="Tutorial2">
    <h3>Registeration Date and Time</h3>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/C4O72x-dYQ4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen></iframe>
  </div>

  <br>
  <hr>

  <div class="Tutorial3">
    <h3>Degree Evaluation</h3>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/b_1JSx4pU9s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen></iframe>
  </div>

  <br>
  <hr>

  <div class="Campus Map">
    <h2>Campus Map</h2>
    <iframe src="https://map.concept3d.com/?id=801#!ct/50935,40419,40418,20161,15205,48503,54894?mc/32.775056650791,-117.07214713097?z/17?lvl/0" width="900" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>

  <!-- Footer -->
  <?php include 'footer.php';?>

</body>

</html>

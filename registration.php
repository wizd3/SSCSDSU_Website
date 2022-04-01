<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registeration</title>

    <link rel="stylesheet" href="css/styles.css">

    <link rel="icon" href="favicon.ico">

  </head>

  <body>
    
    <!--Navigation Bar -->
    <?php include 'navbar.php';?>

    <!--Content of the registeration page: -->

    <div class="RegisterationDescription">
      <h1>~ Registeration ~</h1>
      <p>Register to Receive News, Reminders, and Announcemnts.</p>
    </div>

    <div class="RegisterationInfo">
      <form>
        <label for="email">Email:</label><br>
        <input class="RegisterationForms TextField" type="text" id="emailTextField" name="email" value=""><br><br>
        <label for="fname">First Name:</label><br>
        <input class="RegisterationForms TextField" type="text" id="fname" name="fname" value=""><br><br>
        <label for="lastName">Last Name:</label><br>
        <input class="RegisterationForms TextField" type="text" id="lname" name="lname" value=""><br><br><br>
        <input class="RegisterationForms SubmitButton" type="submit" value="Register"><br>
      </form>
    </div>

    <!-- Footer -->
    <?php include 'footer.php';?>

  </body>
</html>

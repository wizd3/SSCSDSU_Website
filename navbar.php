    <?php include 'server.php';?>

    <!-- Sign In Modal -->
    <div id="id01" class="modal">

      <form class="modal-content animate" action="" method="post">

        <div class="imgcontainer">

          <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="images/sscsdsu-logo.png" alt="SSCSDSU Logo" class="avatar">

        </div>

        <div class="container">

          <label for="email"><b>Email:</b></label>
          <input type="email" placeholder="Enter Email" name="email" required>

          <label for="psw"><b>Password:</b></label>
          <input type="password" placeholder="Enter Password" name="psw" required>

          <br><br>

          <button type="submit" class="btn" name="login_user">Login</button>

          <br><br>

          <a class="psw" href="#">Forgot Password?</a>
          <span class="createAccount" onclick="document.getElementById('id01').style.display='none'; document.getElementById('id02').style.display='block'" style="width:auto;">Not a Member?</span>

        </div>

      </form>

    </div>



    <!-- Sign Up Modal -->
    <div id="id02" class="modal">

      <form class="modal-content animate" action="" method="post" onsubmit="return validatePassword()">

        <div class="imgcontainer">
          <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
          <img src="images/sscsdsu-logo.png" alt="SSCSDSU Logo" class="avatar">

        </div>

        <div class="container">

          <label for="firstname"><b>First Name:</b></label>
          <input type="text" placeholder="Enter First Name" name="firstname" required>

          <label for="lastname"><b>Last Name:</b></label>
          <input type="text" placeholder="Enter Last Name" name="lastname" required>

          <label for="email"><b>Email:</b></label>
          <input type="email" placeholder="Enter Email" name="email" required>

          <label for="psw"><b>Password:</b></label>
          <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

          <label for="confirm_psw"><b>Confirm Password:</b></label>
          <input type="password" placeholder="Confirm Password" name="confirm_psw" id="confirm_psw" required>

          <br><br>

          <button type="submit" class="btn" name="register_user" >Create Account</button>

        </div>

      </form>

    </div>

    <script>
      // Get the modal
      var modal = document.getElementById('id01');
      var modal2 = document.getElementById('id02');

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
          else if (event.target == modal2) {
            modal2.style.display = "none";
          }
      }

      function validatePassword(){
        var password = document.getElementById("psw"), confirm_password = document.getElementById("confirm_psw");
        if(password.value != confirm_password.value) {
          confirm_password.setCustomValidity("Passwords Don't Match");
          return false;
        } else {
          confirm_password.setCustomValidity('');
          return true;
        }
      }

    </script>

    <!--"MASTER PAGE" - The Top Menu, including the logo and links to other pages: -->
    <div class="TopPage">
      <table id="logoTable">

        <?php if( isset($_SESSION['username'])): ?>
          <form action = "" method = "post">
            <tr>
                <td class="LogoutButton">
                  <button type="submit" class="btn" name="logout_user" style="width:auto;">Logout, <?php echo $_SESSION['username']; ?> </button>
                </td>
            </tr>
          </form>
        <?php else: ?>
          <tr>
              <td class="LoginButton">
                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
              </td>
          </tr>
        <?php endif; ?>

        <tr>
          <td><a href="index.php"><img class="logo" src="images/sscsdsu-logo.png" alt="SSCSDSU Logo"></a></td>
        </tr>
      </table>

      <table id="NavBarTable">
        <tr>
          <td class="MenuItem"><a href="index.php">Home</a></td>
          <td class="MenuItem"><a href="my-events.php">My Events</a></td>
          <td class="MenuItem"><a href="past-events.php">Past Events</a></td>
          <td class="MenuItem"><a href="upcoming-events.php">Upcoming Events</a></td>
          <td class="MenuItem"><a href="tutorials.php">Tutorials</a></td>
          <td class="MenuItem"><a href="about.php">About</a></td>
        </tr>
      </table>
    </div>

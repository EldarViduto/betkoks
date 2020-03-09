<?php include "header.php" ?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "books";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//echo "Prisijungimas yra geras!<br><br>";
?>



<main class="container">

  <div class="row">
    <h2 class="col s6">RENT YOUR BOOK</h2>
    <div class="input-field col s2 right">
      <input id="first_name" type="text" class="validate">
      <label for="first_name">Password</label>
    </div>
    <div class="input-field col s2 right">
      <input id="last_name" type="text" class="validate">
      <label for="last_name">Name</label>
    </div class="cols2 right">
    <br><br><br><br>
    <div class="right">
      <a href="register.php">Register</a>
      <button class="btn">LOGIN</button>
    </div>
  </div>

  <div class="row">
    <div class="col s12 m6 l3 center-align">
      <p class="flow-text">Choose genre:</p>
      <ul class="sidebox-border flow-text">
        <?php

        $sql = "SELECT * FROM book_info";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
            echo '<li><a href="#">' . $row["book_genre"] . '</a></li>';
          }
        } else {
          echo "0 results";
        }

        ?>
      </ul>
    </div>

    <div class="row center-align">
      <?php

      $sql = "SELECT * FROM book_info";

      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
          echo '<div class="col s3">';
          echo '<a href="book.php"><img class="responsive-img aukstis" src="' . $row["book_img"] . '" alt=""></a>';
          echo '<p>' . $row["book_name"] . '</p>';
          echo '<a href="book.php"><button>NORIU!</button></a>';
          echo '</div>';
        }
      } else {
        echo "0 results";
      }
      $conn->close();

      ?>

    </div>
  </div>
  <ul class="pagination center-align">
    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
    <li class="active"><a href="#!">1</a></li>
    <li class="waves-effect"><a href="#!">2</a></li>
    <li class="waves-effect"><a href="#!">3</a></li>
    <li class="waves-effect"><a href="#!">4</a></li>
    <li class="waves-effect"><a href="#!">5</a></li>
    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
  </ul>
</main>



<!-- Čia pagrindinio puslapio vidinė dalis -->

</main>
<?php include "footer.php" ?>
<?php
include "conn.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" href="styles/style.css">


  <title>Projekto pavadinimas</title>
</head>

<body>

  <nav class="container teal lighten-4" >
    <a href="index.php" class="brand-logo">SKAITYK.lt</a>
    <ul class="right hide-on-med-and-down">
      <li><a href="user.php?id=<?php echo $row['id'] ?>"><i class="material-icons right">account_box</i>Guest</a></li>
      <!-- <?php
      $sql = "SELECT * FROM user_info WHERE id={$_SESSION['id']}";

      $result = $conn->query($sql);


      echo '<li><a href="user.php?id=' . $_SESSION['id'] . '"><i class="material-icons right">account_box</i>Guest</a></li>';


      ?> -->

    </ul>
    <div class="nav-wrapper container">
      <form>
        <div class="input-field">
          <input id="search" type="search" required placeholder="Iveskite knygos pavadinima">
          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
          <i class="material-icons">close</i>

        </div>
      </form>
    </div>
  </nav>
  <!-- Čia pasikartojanti visuose puslapiuose viršutinė dalis -->
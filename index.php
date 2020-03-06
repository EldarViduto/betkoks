<?php include "header.php" ?>

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
      <a target="_blank" href="register.php">Register</a>
      <button class="btn">LOGIN</button>
    </div>
  </div>

  <div class="row">
    <div class="col s12 m6 l3 center-align">
      <p class="flow-text">Choose genre:</p>
      <ul class="sidebox-border flow-text">
        <li>
          <a href="#">Zanras1</a>
        </li>
        <li>
          <a href="#">Zanras2</a>
        </li>
        <li>
          <a href="#">Zanras3</a>
        </li>
        <li>
          <a href="#">Zanras4</a>
        </li>
        <li>
          <a href="#">Zanras5</a>
        </li>
        <li>
          <a href="#">Zanras6</a>
        </li>
      </ul>
    </div>

    <div class="row center-align">
      <div class="col s3">
        <a target="_blank" href="book.php"><img src="https://picsum.photos/seed/1/200/300" alt=""></a>
        <p>Knygos pavadinimas</p>
        <a target="_blank" href="book.php"><button>NORIU!</button></a>
      </div>
      <div class="col s3">
        <a target="_blank" href="book.php"><img src="https://picsum.photos/seed/2/200/300" alt=""></a>
        <p>Knygos pavadinimas2</p>
        <a target="_blank" href="book.php"><button>NORIU!</button></a>
      </div>
      <div class="col s3">
        <a target="_blank" href="book.php"><img src="https://picsum.photos/seed/3/200/300" alt=""></a>
        <p>Knygos pavadinimas3</p>
        <a target="_blank" href="book.php"><button>NORIU!</button></a>
      </div>
      <div class="col s3">
        <a target="_blank" href="book.php"><img src="https://picsum.photos/seed/4/200/300" alt=""></a>
        <p>Knygos pavadinimas4</p>
        <a target="_blank" href="book.php"><button>NORIU!</button></a>
      </div>
      <div class="col s3">
        <a target="_blank" href="book.php"><img src="https://picsum.photos/seed/5/200/300" alt=""></a>
        <p>Knygos pavadinimas5</p>
        <a target="_blank" href="book.php"><button>NORIU!</button></a>
      </div>
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
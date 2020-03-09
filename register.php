<?php include "header.php" ?>


<div class="container">


    <?php

    if (isset($_GET["name"]) && $_GET["name"] != "") {

        $name = $_GET["name"];
        $surname = $_GET["surname"];
        $email = $_GET["email"];
        $password = $_GET["password"];
       

        $sql = "INSERT INTO user_info (user_name, user_surname, user_email, user_password)
        VALUES ('$name', '$surname', '$email', '$password')";


        if ($conn->query($sql) === true) {
            header("Location: register.php?status=success");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    ?>

    <h1>Naujo vartotojo registracija</h1>

    <form class="col s12">

        <div class="row">
            <div class="input-field col s6">
                <input placeholder="Vardas" id="Vardas" type="text" class="validate" name="name">
                <label for="Vardas">Vardas</label>
            </div>
            <div class="input-field col s6">
                <input placeholder="Pavardė" id="Pavardė" type="text" class="validate" name="surname">
                <label for="Pavardė">Pavardė</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <input id="email" type="email" class="validate" name="email">
                <label for="email">El. paštas</label>
            </div>

            <div class="input-field col s6">
                <input id="password" type="password" class="validate" name="password">
                <label for="password">Slaptažodis</label>
            </div>
        </div>

        <!-- <div class="row">
            <div class="col s6">
                <a href="#"><img src="images/user_img.jpg" alt="#"></a>
                <a href="https://picsum.photos/seed/2/200/3000"><button>Foto</button></a>
            </div>
        </div> -->

        <button class="btn waves-effect waves-light" type="submit" name="action">Patvirtinti
            <i class="material-icons right">send</i>
        </button>

    </form>


</div>

<?php include "footer.php" ?>
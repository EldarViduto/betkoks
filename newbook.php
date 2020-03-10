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

    <h1>Naujos knygos registravimas</h1>

    <form class="col s12">

        <div class="row">
            <div class="input-field col s6">
                <input id="book-name" type="text" class="validate" name="name">
                <label for="book-name">Book name</label>
            </div>
            <div class="input-field col s6">
                <input id="book-author" type="text" class="validate" name="author">
                <label for="book-author">Book author</label>
            </div>
        </div>

        <div class="row">
            <div class="input-field col s6">
                <input id="book-img" type="text" class="validate" name="img">
                <label for="book-img">Book image</label>
            </div>

            <div class="input-field col s6">
                <input id="book-genre" type="text" class="validate" name="genre">
                <label for="book-genre">Book genre</label>
            </div>
        </div>

        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="book-description" class="materialize-textarea"></textarea>
                        <label for="book-description">Book description</label>
                    </div>
                </div>
            </form>
        </div>

        <div class="row">
            <form class="col s12">
                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="short-info" class="materialize-textarea"></textarea>
                        <label for="short-info">Short info</label>
                    </div>
                </div>
            </form>
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
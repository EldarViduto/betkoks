<?php include "header.php" ?>


<div class="container">
    <h1>Naujo vartotojo registracija</h1>
    <form class="col s12">
        <div class="row">
            <div class="input-field col s6">
                <input placeholder="Vardas" id="Vardas" type="text" class="validate">
                <label for="Vardas">Vardas</label>
            </div>
            <div class="input-field col s6">
                <input placeholder="Pavardė" id="Pavardė" type="text" class="validate">
                <label for="Pavardė">Pavardė</label>
            </div>
        </div>

        <div class="row">
        <div class="input-field col s6">
                <input id="email" type="email" class="validate">
                <label for="email">El. paštas</label>
            </div>

            <div class="input-field col s6">
                <input id="password" type="password" class="validate">
                <label for="password">Slaptažodis</label>
            </div>
        </div>


        <div class="row">
                       
            <div class="col s6">
                <!-- <a href="#"><img src="images/user_img.jpg" alt="#"></a> -->
                <a href="https://picsum.photos/seed/2/200/3000"><button>Foto</button></a>
            </div>
        </div>

    </form>

    <a href="user.php">
        
    <button class="btn waves-effect waves-light" type="submit" name="action">Patvirtinti
        <i class="material-icons right">send</i>
    </button>

    </a>


</div>

<?php include "footer.php" ?>
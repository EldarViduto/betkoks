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
                <div class="input-field col s12">
                    <input id="user" type="text" class="validate">
                    <label for="user">Vartotojo vardas</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="password" type="password" class="validate">
                    <label for="password">Slaptažodis</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input id="email" type="email" class="validate">
                    <label for="email">El. paštas</label>
                </div>
            </div>

        </form>

        <button class="btn waves-effect waves-light" type="submit" name="action">Submit
            <i class="material-icons right">send</i>
        </button>


    </div>

<?php include "footer.php" ?>
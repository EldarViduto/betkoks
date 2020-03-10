<?php include "header.php" ?>




<div class="container">
    <h3 class="col s4">Vartotojo profilis</h3>

    <div class="row ">
        <div class="col s4">
            <i class="left-align black-text large material-icons">account_circle</i>
        </div>

        <?php

        $sql = "SELECT * FROM user_info WHERE id=1";
        $result = $conn->query($sql);

        while ($row = $result->fetch_assoc()) {
            echo '<div class="col s4">';
            echo '<p class= "flow-text"> VARDAS: ' . $row["user_name"] . '</p>';
            echo '<p class= "flow-text"> PAVARDĖ: ' . $row["user_surname"] . '</p>';
            echo '<p class= "flow-text"> EL. PAŠTAS: ' . $row["user_email"] . '</p>';
            echo '</div>';
        }

        ?>

        <div>
            <ul class="col s4 collapsible">
                <li>
                    <div class="collapsible-header"><i class="material-icons">announcement</i>Nauja žinutė</div>
                    <div class="collapsible-body"><span>Nauja žinutė: Nuo vvv</span></div>
                </li>

            </ul>
        </div>



        <div class="row">
            <h5 class="col s8"> MANO KNYGOS </h5>

            <a href="newbook.php">
            <button class="col s4">Pridėti naują knygą</button>
            </a>
        </div>

        <div class=" book-list row center-align">

            <div class="col s3">
                <img src="https://picsum.photos/seed/10/200/300" alt="">
                <p>Knygos pavadinimas</p>
                <p>Knygos statusas: aktyvi</p>

                <!-- Switch -->
                <div class="switch">
                    <label>
                        off
                        <input type="checkbox" checked>
                        <span class="lever"></span>
                        on
                    </label>
                </div>

                    <button>Išsiųsti knygą</button>
              
            </div>
            <div class="col s3">
                <img src="https://picsum.photos/seed/11/200/300" alt="">
                <p>Knygos pavadinimas</p>
                <p>Knygos statusas</p>
                <!-- Switch -->
                <div class="switch">
                    <label>
                        off
                        <input type="checkbox" checked>
                        <span class="lever"></span>
                        on
                    </label>
                </div>


                <button>Išsiųsti knygą</button>
            </div>
            <div class="col s3">
                <img src="https://picsum.photos/seed/12/200/300" alt="">
                <p>Knygos pavadinimas</p>
                <p>Knygos statusas</p>

                <!-- Switch -->
                <div class="switch">
                    <label>
                        off
                        <input type="checkbox" checked>
                        <span class="lever"></span>
                        on
                    </label>
                </div>

                <button>Išsiųsti knygą</button>

            </div>
            <div class="col s3">
                <img src="https://picsum.photos/seed/18/200/300" alt="">
                <p>Knygos pavadinimas</p>
                <p>Knygos statusas</p>
                <!-- Switch -->
                <div class="switch">
                    <label>
                        off
                        <input type="checkbox" checked>
                        <span class="lever"></span>
                        on
                    </label>
                </div>

                <button>Išsiųsti knygą</button>
            </div>
            <div class="col s3">
                <img src="https://picsum.photos/seed/19/200/300" alt="">
                <p>Knygos pavadinimas</p>
                <p>Knygos statusas</p>

                <!-- Switch -->
                <div class="switch">
                    <label>
                        off
                        <input type="checkbox" checked>
                        <span class="lever"></span>
                        on
                    </label>
                </div>
                <button>Išsiųsti knygą</button>
            </div>
            <div class="col s3">
                <img src="https://picsum.photos/seed/20/200/300" alt="">
                <p>Knygos pavadinimas</p>
                <p>Knygos statusas</p>
                <!-- Switch -->
                <div class="switch">
                    <label>
                        off
                        <input type="checkbox" checked>
                        <span class="lever"></span>
                        on
                    </label>
                </div>
                <button>Išsiųsti knygą</button>
            </div>


        </div>

    </div>
</div>




<?php include "footer.php" ?>
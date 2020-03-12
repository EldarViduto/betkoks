<?php include "header.php" ?>




<div class="container">
    <h3 class="col s4">Vartotojo profilis</h3>

<div>
     <img src="" alt="">
        <?php

        //print_r($_SESSION);
        $sql = "SELECT * FROM user_info WHERE id={$_SESSION['id']}";
        $result = $conn->query($sql);

        

        while ($row = $result->fetch_assoc()) {
            echo '<div class="row ">';
            echo '<div class="col s4">';
                echo '<img class= "paveiksliukas" src="' . $row["user_img"] .'" alt="">';
            echo ' </div>';
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
                    <div class="collapsible-body"><span>Nauja žinutė: Jonas requested a book</span></div>
                </li>

            </ul>
        </div>

        </div>

        <div class="row">
            <h5 class="col s8"> MANO KNYGOS </h5>

            <a href="newbook.php">
                <button class="col s4">Pridėti naują knygą</button>
            </a>
        </div>
        <div class="book-list row center-align">
            <?php

            $sql = "SELECT * FROM book_info";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo '<div class="col s3">';
                    echo '<a href="book.php"><img class="responsive-img aukstis" src="' . $row["book_img"] . '" alt=""></a>';
                    echo '<p>' . $row["book_name"] . '</p>';
                    echo '<p> Knygos statusas:' . $row["book_status"] . '</p>';
                    echo '<div class="switch">
                    <label>
                        off
                       <input type="checkbox" checked>
                       <span class="lever"></span>
                        on
                   </label>
                    </div> ';

                    echo '<button>Išsiųsti knygą</button></a>';
                    echo '</div>';
                }
            } else {
                echo "0 results";
            }
            $conn->close();

            ?>

        </div>
    </div>
</div>




<?php include "footer.php" ?>
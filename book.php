<?php include "header.php" ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<div class="left-align container vspace ">

    <?php
    if (isset($_GET["id"]) && $_GET["id"] != "") {

        $id = $_GET["id"];

        $sql = "SELECT * FROM book_info WHERE id=$id";
        $result = $conn->query($sql);

        if (mysqli_num_rows($result) > 0) {

            $row = $result->fetch_assoc();


            echo '<div class="row">';
            echo '<div class="col s12 m4 left-align">';
            echo '<img class="responsive-img aukstis" src="' . $row["book_img"] . '" alt="">';
            echo '</div>';
            echo '<div class="bookinfo col s12 m4  center-align">';
            echo '<p>';
            echo ' <font size="4">' . $row["book_author"] . '<font>';
            echo '   </p>';

            echo ' <P>';
            echo '  <font size="5">' . $row["book_name"] . '<font>';
            echo '    </p>';

            echo '     <p>';
            echo '     <font size="3 align left">' . $row["book_short_info"] . '<font>';
            echo '</p>';

            echo '</div>';
            echo '<div class="col s12 m4 center-align">';

            echo '<button class="btn waves-effect waves-light" type="NORIU" name="action">NORIU';
            echo '   <i class="material-icons right">send</i>';
            echo ' </button>';
            echo '<div class="vertinimas">';
            echo '  <P class="feedback">Įvertinkite knygą</P>';

            echo '  <span class="fa fa-star checked" onmouseover="starmark (this)" onclick=""starmark (this) id="1one"></span>';
            echo ' <span class="fa fa-star checked" onmouseover="starmark (this)" onclick=""starmark (this) id="2one"></span>';
            echo '  <span class="fa fa-star checked" onmouseover="starmark (this)" onclick=""starmark (this) id="3one"></span>';
            echo ' <span class="fa fa-star checked" onmouseover="starmark (this)" onclick=""starmark (this) id="4one"></span>';
            echo ' <span class="fa fa-star checked" onmouseover="starmark (this)" onclick=""starmark (this) id="5one"></span>';
            
            echo '<br>';
           
echo'</div>';
            echo '</div>';
            echo '</div>';
            echo ' <h5 class="book_des">Aprašymas</h5>';
            echo '<div class="left-align">';
            echo    '<p>';
            echo '     <font size="3">' . $row["book_description"] . '</font>';

            echo '    </p>';

            echo '  </div>';
        }
    } else {
        echo "0 results";
    }
    $conn->close()





    ?>






</div>




</div>



<?php include "footer.php" ?>
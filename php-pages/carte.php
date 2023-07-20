<?php
include "header.php";

session_start();
?>

    <!-- Main -->
    <main>
        <div class="box">
            <?php
                foreach($pdo->query("SELECT * FROM carte", PDO::FETCH_ASSOC) as $carte)
                {
                    echo 
                        "<div>
                            <h5>
                             - <span class='title'> ".$carte['carte_name']."</span> :
                            <span class='prix'>".$carte['carte_price']."€</span>
                            </h5>
                            <span class='description'>".$carte['carte_description']."</span>
                        </div> <br>";
                }
            ?>
        </div> <br>
    </main>
    <!-- End Main -->

<?php

include "footer.php";

?>
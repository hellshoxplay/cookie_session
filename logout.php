<?php
session_start();
session_destroy();
?>
    <!DOCTYPE html>
    <html>

    <body>



    <a href="index.php">Revenir à l'écran de connexion</a>
    </body>
    <p> "Vous êtes déconnecté <br></p>"

    </html>

<?php
header('location: /');
?>
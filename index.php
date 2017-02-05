<?php
declare(strict_types=1);
require_once('function.php');
include 'membre.php';
direBonjour('Defrance' ,'Thibault');
$headers = 'From : thibaustin@hotmail.fr';
MAIL( 'thibault.g.defrance@gmail.com', 'mon premier mail', 'Bonjour Thibault, tu te parles à toi même',$headers );

$password = bin2hex(random_bytes(8));
echo'nouveau mot de passe '.$password;

; ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            foreach ( $membres as $key => $info) {
        ?>
        <h1><?= $key ?> </h1> <?= $info ?><br >
        <?php
        }
        ?>
    </body>
</html>

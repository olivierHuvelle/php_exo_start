<?php
/*
## Exercice 3 
Avec le formulaire de l'exercice 1, afficher dans la page user.php les données du formulaire transmis.
*/
if(isset($_GET['firstName']) && isset($_GET['lastName'])) {
    echo 'Hello ' . $_GET['firstName'] . ' ' . $_GET['lastName']; 
}
?>
<?php
/*
## Exercice 4
Avec le formulaire de l'exercice 2, afficher dans la page user.php les données du formulaire transmises.
*/
    if(empty($_POST['firstName']) || empty($_POST['lastName'])) {
        echo 'Il manque des parametres'; 
        
    } else {
        echo '<p> Bonjour ' . $_POST['firstName'] . ' ' . $_POST['lastName'] . '</p>'; 
    }
?>
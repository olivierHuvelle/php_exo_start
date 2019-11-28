<?php
/*
Créer un formulaire sur la page **index.php** avec :

- Une liste déroulante pour la civilité (Mr ou Mme)
- Un champ texte pour le nom
- Un champ texte pour le prénom

Ce formulaire doit rediriger vers la page **index.php**.
Vous avez le choix de la méthode.
EXO 5 et 6 
*/

if(empty($_POST['civility']) || empty($_POST['firstName']) || empty($_POST['lastName'])) {
    echo '
    <form action = "index.php" method = "post">
        <select id = "civility" name = "civility">
            <option value = "Mr">Mr</option>
            <option value = "Mme">Mme</option>
        </select> <br/>
        <label for = "firstName">Votre nom : </label>
        <input type = "text" id = "firstName" name = "firstName"/> <br/>
        <label for = "lastName">Votre nom de famille : </label>
        <input type = "text" id = "lastName" name = "lastName"/>
        <input type = "submit" value = "envoyer"/>
    </form>
    '; 
} else {
    echo 'Bonjour ' . $_POST['civility'] . ' ' . $_POST['firstName'] . ' ' . $_POST['lastName']; 
}

?>
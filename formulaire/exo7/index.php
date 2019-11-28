<?php
/*
En plus de l'exercice 5/6 il faut ajouter 
Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher, en plus de ce qui est demandé à l'exercice 6,
 le nom et l'extension du fichier.
*/
if(empty($_POST['civility']) || empty($_POST['firstName']) || empty($_POST['lastName']) || !isset($_FILES['file']) || !$_FILES['file']['error'] == 0) {
    echo '
    <form action = "index.php" method = "post" enctype="multipart/form-data">
        <select id = "civility" name = "civility">
            <option value = "Mr">Mr</option>
            <option value = "Mme">Mme</option>
        </select> <br/>
        <label for = "firstName">Votre nom : </label>
        <input type = "text" id = "firstName" name = "firstName"/> <br/>
        <label for = "lastName">Votre nom de famille : </label>
        <input type = "text" id = "lastName" name = "lastName"/> <br/> 
        <label for  "file">Ajoutez un file : </label>
        <input type="file" name="file" /><br />
        <input type = "submit" value = "envoyer"/>
    </form>
    '; 
} else {
    echo '<p>Bonjour ' . $_POST['civility'] . ' ' . $_POST['firstName'] . ' ' . $_POST['lastName'] . '</p>'; 
    $infosfichier = pathinfo($_FILES['file']['name']);
    $extension_upload = $infosfichier['extension'];
    echo '<p>' . $_FILES['file']['name'] . ' a l\'extension : '. $extension_upload . '</p>'; 
    
}

?>
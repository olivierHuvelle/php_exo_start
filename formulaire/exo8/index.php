<?php
/*
En plus de l'exercice 7 
Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédents, vérifier que le fichier transmis est bien un fichier **pdf**.

*/
$display_form = true; 
if (
    empty($_POST['civility']) ||
    empty($_POST['firstName']) ||
    empty($_POST['lastName']) ||
    !isset($_FILES['file']) ||
    !$_FILES['file']['error'] == 0 ||
    ! in_array(pathinfo($_FILES['file']['name'])['extension'], ['pdf'])
    ){ //a vérifier
}else {
    $display_form = false; 
}
if($display_form) { 
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
        <label for  "file">Ajoutez un fichier pdf : </label>
        <input type="file" name="file" /><br />
        <input type = "submit" value = "envoyer"/>
    </form>
    '; 
} else {
    echo '<p>Bonjour ' . $_POST['civility'] . ' ' . $_POST['firstName'] . ' ' . $_POST['lastName'] . '</p>'; 
    $infosfichier = pathinfo($_FILES['file']['name']);
    $extension_upload = $infosfichier['extension'];
    $extension_autorised = ['pdf']; 
    echo '<p>' . $_FILES['file']['name'] . ' a l\'extension : '. $extension_upload . '</p>'; 
    //echo  pathinfo($_FILES['file']['name'])['extension']; 
    //in_array($extension_upload, $extensions_autorisees)
}

?>
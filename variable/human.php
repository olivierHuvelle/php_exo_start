<html>
  <head><title>Hi!</title></head>
  <body>
  	<?php if (isset($_GET['name'])){ ?>
    	<h1>Aloha <?php echo $_GET['name']; ?>!</h1>
   	<?php } ?>
    
  </body>
</html>

<?php
/*
$nom_variable = valeur; //à chaque appel de variable préciser le symbole $
Types de variables 
* String 'chaine' ou "chaine" 
* int, float 
* Boolean (true ou false)
* NULL 
* Arrays $equipe = array(valeur1, valeur2, ...); 
*/
?>
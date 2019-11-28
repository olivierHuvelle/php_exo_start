<?php
//foreach( $plates as $plate){}
//foreach ($names as $key=> $value)
//while ($amount_of_lines <= 100)
//do while(); existe aussi 
// for ($amount_of_lines = 1; $amount_of_lines <= 100; $amount_of_lines ++)



//Exo 1 
/*
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
build a loop that displays each element of the array

###Solution 
$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
foreach($pronouns as $pronoun){
    echo '<p>' . $pronoun . ' code' ; 
    if ($pronoun === 'He/She') {
        echo 's'; 
    }
    echo ' </p>'; 
}
*/


//Exo 2 
/*
- Write a script that prints the numbers from 1 to 120 using ` while `  

###Solution 
$i = 1; 
while($i <= 120){
    echo '<p>' . $i . '</p>'; 
    $i++; 
}
*/

//Exo 3 
/*
- Write a script that prints the numbers from 1 to 120 using ` for `  
###Solution 
for($i = 1; $i <= 120 ; $i++){
    echo '<p>' . $i . '</p>'; 
}
*/

//Exo 4 
/*
- Create an array containing the firstname of everyone in your startup. Display each firstname using a loop.
###Solution 
$startup_names = ['Olivier', 'Gaby', 'Lorenzo', 'Louis', '...']; 
foreach($startup_names as $startup_name){
    echo '<p>' . $startup_name .'</p>'; 
}
*/

//Exo 5 
/*
- Create an array containing at least 10 countries. 
Then, generate the html that will render a select box inside an html form (see mockup below). Of course, a loop will be useful...
###Solution 
$countries = array('Belgique', 'France', 'Luxembourg', 'Allemagne', 'Hollande', 'Espagne', 'Portugual', 'Suisse', 'Danemark', 'Lituanie', 'Pologne'); 
echo '<select id = "countries">'; 
foreach($countries as $country){
    echo '<option value = ' . "$country" . ' />' . $country . '</option>'; 
}
echo '</select>';
*/

//Exo 6 
/*
###Solution 
$countries = array(
    'BE' => 'Belgique', 
    'FR' => 'France', 
    'LU' => 'Luxembourg', 
    'DE' => 'Allemagne', 
    'PO' => 'Portugual', 
); 
echo '<select id = "countries">'; 
foreach($countries as $iso => $country){
    echo '<option value = ' . "$iso" . ' />' . $country . '</option>';  
}
echo '</select>'; 
*/
?>
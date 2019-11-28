<?php
/*
function say_hello($firstname){
	echo "<p>Hello $firstname!</p>";
    echo '<hr>';
    //on peut aussi évidemment taper des return à gogo 
}
say_hello("Maurice")
*/

//exo 1 
/*
- Use a function that capitalizes the first letter of the provided argument. Example: `"émile"`should return `"Émile"`
###Solution 
$word = 'bonjour';
$capitalisis = ucfirst($word);             // Bonjour tout le monde!
echo $capitalisis; 
*/

//exo 2 
/*
### Solution 
echo date('Y'); 
- Use the native function allowing you to display the current year.
*/

//Exo 3 
/*
- Now display the date, time, minutes and seconds, using the same function, by playing with the arguments.
### Solution 
echo date('Y m d i s');
*/

//Exo 4 
/*
- Crée a "Sum" function that takes 2 numbers and returns their sum.
###Solution 
function addition($nb1, $nb2){
    return $nb1 + $nb2; 
}
echo addition(2,7);
*/

//Exo 5
/*
- Improve that function so that it checks whether the argument is indeed a Number. If not, it should display : `"Error: argument is the not a number."`
### SOlution 
function addition($nb1, $nb2){
    if(is_numeric($nb1) && is_numeric($nb2)){
        return $nb1 + $nb2; 
    }else{
        exit('Error: argument is the not a number.');
    }
}
echo addition(2, 'a');
*/

//Exo 6
/*
- Create a function that takes as argument a string of characters and returns an acronym made of the initials of each word. 
### Solution 
function initials($string) {
    $initial = ''; 
    $array_from_string = explode(' ', $string); 
    foreach($array_from_string as $element){
        $initial = $initial . strtoupper($element[0]); 
    }
    return $initial; 
} 
*/

// Exo 7 
/*
- Create a function that replaces the letters "a" and "e" with "æ".
####SOlution 
function replace($string){
    return str_replace('ae', 'æ', $string); 
}
*/
//Exo 8 
/*
Create the opposite function, which replaces "æ" by "ae" in : `cæcotrophie`, `chænichthys`, `microsphæra`, `sphærotheca`
#### Solution 
function opposite($string){
    return str_replace('æ', 'ae', $string); 
}
*/

//Exo 9
/*
Create a function to return "notice", "warning" and "error" messages to a user,which takes 2 arguments : the "message", and the "css class" 
(values:  "info", "error", "warning"). This function would allow us to write this : 

echo feedback("Incorrect email address", "error");
<div class="error">Error: Incorrect email address.</div>

###Solution 
function feedback($message, $css_class){
    if (!in_array($css_class, ['info', 'error', 'warning'])) { //si pas dans les arguments pécisés 
        exit('Mauvais argument envoyé'); 
    }else {
        echo '<div class = '. "$css_class" . '>' . ucfirst($css_class) . ':' . ucfirst($message) . '</div>'; 
    }
}
*/

//Exo 10 
/*
- Improve that function by giving the default class the value of `"info"`. 
Look into the documentation [documentation php](http://php.net/manual/en/functions.arguments.php).
###Solution 
function feedback($message, $css_class = 'info'){
    if (!in_array($css_class, ['info', 'error', 'warning'])) { //si pas dans les arguments pécisés 
        exit('Mauvais argument envoyé'); 
    }else {
        echo '<div class = '. "$css_class" . '>' . ucfirst($css_class) . ':' . ucfirst($message) . '</div>'; 
    }
}
*/

//Exo 11 
/*
 - Create a random words generator, outputing 2 words: one which length is between 1 to 5 letters, the other between 7 and 15 letters.
Not difficult to do but some need of dictionnary to have an actual valid word  .... 
*/

//Exo 12
/*
- De-capitalize the string : `"STOP YELLING I CAN'T HEAR MYSELF THINKING!!"`
###Solution 
echo strtolower('"STOP YELLING I CAN\'T HEAR MYSELF THINKING!!');
*/

//Exo 13 
/*
// Volume of a cone which ray is 5 and height is 2 
$volume = 5 * 5 * 3.14 * 2 * (1/3);  
echo 'The volume of a cone which ray is 5 and height is 2 = ' . $volume . ' cm<sup>3</sup><br />';  
// Volume of a cone which ray is 3 and height is 4  
$volume = 3 * 3 * 3.14 * 4 * (1/3);  
echo 'The volume of a cone which ray is 3 and height is 4 = ' . $volume . ' cm<sup>3</sup><br />';  

###Solution 
function calculate_cone($ray, $height){
    $volume =  pow($ray, 2) * pi() * $height * (1/3); 
    echo 'The volume of a cone which ray is ' . $ray . ' and height is ' . $height . ' = ' . $volume  . 'cm<sup>3</sup><br/>'; 
}
calculate_cone(5, 2);
*/


?>
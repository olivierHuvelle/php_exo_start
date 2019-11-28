<?php
/*
1. Store your first name in a variable, then display its value (`echo`) in a `<p>` html tag so that the screen shows:   
> Hi! My name is ______. ###DONE 

2. Then add another variable to contain your age, then display it in a second `<p>` tag : 
> I am ____ years old.##DONE 

3. Then add yet another variable that describes the colour of your eyes, then display it in another `<p>` tag : 
> My eyes are ____ ###DONE 

4. Then add yet another variable that contains the name of all the people in your family. What type of variable would you use for that ? ###DONE 

5. Display the value stored at the first index in another `<p>` tag : 
> The first person in my family is ____ ### DONE 

5. And finally : what type of variable would you use to store the information whether you are hungry or not ? -> Boolean ###DONE 
*/
?>

<?php 
$first_name = 'Olivier'; 
echo '<p>Hi! My name is ' . $first_name . '</p>'; 

$age = 26; 
echo '<p>I\'m ' . $age . 'years old</p>'; 

$eye_color = 'blue'; 
echo '<p>My eyes are ' . $eye_color . '</p>';

$familly = array(
    'Véronique', 
    'Noémie', 
    'Clara'
); 

echo '<p>The first person in my family is ' . $familly[0] . '</p>'; 

$is_hungry = true; 
?> 
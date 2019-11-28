<?php
//tout ce qui suit exactement la meme chose 
/*
    $families = ['Véronique', 'Noémie', 'Clara']; 
    print_r($families);
*/
//6 et 7 
/*
$favourite_movies = ['Un homme d\'exception', 'BraveHeart', 'Inception', 'Winnie Lourson', '...']; 
$favorite_movie = $favourite_movies[count($favourite_movies)-1]; 
echo $favorite_movie;
*/
/*
$countries = ['Belgique', 'France', 'Allemagne', 'Italie', 'Mexique']; 
print_r($countries);
var_dump($countries);
*/
//Associative array 
/*
Describe yourself using an associative array: `$me`.
 Specify your age, your favourite season of the year, wether you like soccer or not (boolean). Try to use the right variable type for each value.
 $me = array(
    'age' => 26, 
    'favourite_season' => 'Summer', 
    'soccer' => false
); 
*/

//associative array (multi)
/*
$me = array(
    'age' => 26, 
    'favourite_season' => 'Summer', 
    'soccer' => false
); 
$me['hobbies'] = array ('drawing', 'info','woodworking'); 

$mother = array(
    'age' => 57, 
    'favourite_season' => 'Winter', 
    'soccer' => false, 
    'hobbies' => array('medecine', 'gardening')
); 
print_r($mother['hobbies']); 
$me['mother'] = $mother; 
echo '<pre>'; 
print_r($me); 
echo '</pre>'; 
*/

//Count the number of elements 
/*
how many hobbies your mother has
how many hobbies me has 
$me = array(
    'age' => 26, 
    'favourite_season' => 'Summer', 
    'soccer' => false
); 
$me['hobbies'] = array ('drawing', 'info','woodworking'); 

$mother = array(
    'age' => 57, 
    'favourite_season' => 'Winter', 
    'soccer' => false, 
    'hobbies' => array('medecine', 'gardening')
); 
print_r($mother['hobbies']); 
$me['mother'] = $mother; 
echo '<pre>'; 
print_r($me); 
echo '</pre>'; 
echo count($me['hobbies']); 
echo count($me['mother']['hobbies']); 
*/
/*
$me = array(
    'age' => 26, 
    'favourite_season' => 'Summer', 
    'soccer' => false
); 
$me['hobbies'] = array ('drawing', 'info','woodworking'); 
$me['hobbies'][] = 'Taxidermy'; 
print_r($me['hobbies']);
*/
/*
$me = array(
    'lastname' => 'Huvelle',
    'age' => 26, 
    'favourite_season' => 'Summer', 
    'soccer' => false
); 
$me['lastname'] = 'Durant'; 
print_r($me); 
*/
/*
$me = array(
    'lastname' => 'Huvelle',
    'age' => 26, 
    'favourite_season' => 'Summer', 
    'soccer' => false,
    'hobbies' => array ('drawing', 'info','woodworking')
); 

$soulmade = array(
    'lastname' => 'Swenen', 
    'age' => 30, 
    'favourite_season' => 'Summer', 
    'soccer' => false,
    'hobbies' => array ('drawing', 'piano', 'TV compulsive watcher')
); 

$result_intersection = array_intersect($me['hobbies'], $soulmade['hobbies']); 
$result_merge = array_merge($me['hobbies'], $soulmade['hobbies']); 
print_r($result_intersection); 
print_r($result_merge);
*/

//last ? i hope 
/*
- Create an array ` $web_development` containing a `'frontend'` and a `'backend'` key. Assign an empty array to each key. 
- Then, add a line underneath that pushes `'xhtml'` in the right array.
- Then, add a line underneath that pushes `'Ruby on Rails'` in the right array.
- Then, add a line underneath that pushes `'CSS'` in the right array.
- Then, add a line underneath that pushes `'Flash'` in the right array.
- Then, add a line underneath that pushes `'JavaScript'` in the right array.
- Then, add a line underneath that replace `'xhtml'` by `'html'`.
- Then, add a line underneath that removes `'Flash'` from the array.
*/
$web_development = array(
    'frontend' => [],
    'backend' => []
); 

$web_development['frontend'][] = 'xhtml'; 
$web_development['backend'][] = 'Ruby on Rails'; 
$web_development['frontend'][] = 'CSS'; 
$web_development['frontend'][] = 'Flash'; 
$web_development['frontend'][] = 'Javascript'; 
$web_development['frontend'][array_search('xhtml', $web_development['frontend'])] = 'html'; //recherche plus approonfie dans second temps 
unset($web_development['frontend'][array_search('Flash', $web_development['frontend'])]); //tout pourri comme syntaxe on doit pouvoir faire mieux ... 
print_r($web_development); 
?>
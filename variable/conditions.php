<?php

//1.1 Clean your room Exercise DONE 
/*
$room_is_filthy = true;
if($room_is_filthy){
	echo "Yuk, Room is dirty : let's clean it up !";
	cleanup_room();
	echo "<br>Room is now clean!";
	$room_is_filthy = false;
} else {
	echo "<br>Nothing to do, room is neat.";
}
*/

// 1.2 Clean your room Exercise, improved DONE 
/*
$possible_states = ['health hazard', 'filthy', 'dirty', 'clean', 'immaculate'];

// When testing, change the index value to navigate to the possible array values
$room_filthiness = $possible_states[0]; 
switch($room_filthiness){
	case 'health hazard': 
		echo('case 0'); 
		break;
	case 'filthy': 
		echo('case 1'); 
		break; 
	case 'dirty': 
		echo('case 2'); 
		break; 
	case 'clean': 
		echo('case 3'); 
		break; 
	case 'immaculate':
		echo('case 4'); 
		break; 
	default : 
		echo('case inexistante');	
}
*/

//1.3 one stupid but polite bot DONE 
/*
Write a script that implements these specifications : 

- If the time is between 05h00 and 09h00, display "Good morning !".  
- If the time is between 09h01 and 12h00, affiche "Good day !".  
- If the time is between 12h01 and 16h00, affiche "Good afternoon !".  
- If the time is between 16h01 and 21h00, affiche "Good evening !".  
- If the time is between 21h01 and 04h59, affiche "Good night !".  

**Tip:** you can combine multiple conditions (using `AND` / `OR`).
$now = [date('H'), date('i')]; // How to get the current time in PHP ? Google is your friend ;-)
echo $now[0];
if(($now[0]>= 5 && $now[0] <= 9) &&($now[0] != 9 && $now[1] > 0)){
	echo '<p>Good morning</p>'; 
}elseif(($now[0]>= 9 && $now[0] <= 12) &&($now[0] != 12 && $now[1] > 0)){
	echo '<p>Good day</p>';
}elseif(($now[0]>= 12 && $now[0] <= 16) &&($now[0] != 16 && $now[1] > 0)){
	echo '<p>Good afternoon</p>';
}elseif(($now[0]>= 12 && $now[0] <= 21) &&($now[0] != 21 && $now[1] > 0)){
	echo '<p>Good evening</p>';
}else{
	echo'<p>Good night</p>'; 
}
*/

//1.4 : Be polite sir' ! DONE 
/*
Let's continue to make our robot a little more civil and greet humans properly, taking into account their age.

Here is the user experience we aim for :   
First, users see a form asking for their age :
> Please type your age : __
   
When they submit the form, the page displays the right message:

- if age is less than 12 years old, display "Hello kiddo!"  
- if age is between 12 and 18 years old, display "Hello Teenager !"  
- if age is between 18 and 115 years old, display Hello Adult !"  
- if age is beyond 115 years old, display "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?"

Have both the form and the processing script in the same file. Use the GET method.  
*/
/*
if(!isset($_GET['age']) || !(int) $_GET['age']){
	echo ' 
		<form method = "get" action = "conditions.php">
			<label for="age">...</label>
			<input type="" name="age">
			<input type="submit" name="submit" value="Greet me now">
		</form>
	'; 
}else{
	$_GET['age'] = (int) $_GET['age'];
	if($_GET['age'] < 0){
		echo 'lyar';
	}elseif ($_GET['age'] < 12){
		echo 'Hello kiddo';
	}elseif($_GET['age'] < 18){
		echo 'Hello Teenager';
	}elseif($_GET['age'] < 115){
		echo 'Hello Adult'; 
	}else{
		echo 'Wow! Still alive ? Are you a robot, like me ? Can I hug you ?'; 
	}
}
*/


//Be polite Sir' OR Mam' DONE 
/*
Improve the previous form to add another question: "Man or Woman?". Use an input of type `radio` to capture the data.

If gender is "Woman", the displayed message should be adapted accordingly.

For example, if the user age is between 12 and 18 and the gender is female, display "Hello Miss Teen!" otherwise, display "Hello mister Teen!".

Do the same for all the other age ranges. 
*/

/*
if(!isset($_GET['age']) || !(int) $_GET['age'] || !isset($_GET['gender'])){
	echo ' 
		<form method = "get" action = "conditions.php">
			<label for = "male">Male</label><input type = "radio" name = "gender" value = "male"/> <br/>
			<label for = "female">Female</label><input type = "radio" name = "gender" value = "female"/> <br/>
			<label for="age">...</label>
			<input type="" name="age">
			<input type="submit" name="submit" value="Greet me now">
		</form>
	'; 
}else{
	$sexe = ''; 
	$_GET['age'] = (int) $_GET['age'];
	if($_GET['age'] < 0){
		echo 'lyar';
	}elseif ($_GET['age'] < 12){
		$sexe = ($_GET['gender'] == 'male') ? 'kiddo' : 'kiddogirl'; 
	}elseif($_GET['age'] < 18){
		$sexe = ($_GET['gender'] == 'male') ? 'Tennage Boy' : 'Teenage Girl'; //on peut simplifier en déclarant hors du scope
	}else{
		$sexe = ($_GET['gender'] == 'male') ? 'RobotBoy' : 'RobotGirl';
	}
	echo 'Hello' . $sexe; //Bug possible dans ce cas là aussi 
}
*/



//Be polite Sir' or Mam' or Aloa ... so borred DONE 
/*
if(!isset($_GET['age']) || !(int) $_GET['age'] || !isset($_GET['gender']) || !isset($_GET['english'])){
	echo ' 
		<form method = "get" action = "conditions.php">
			<label for = "english">Yes</label><input type = "radio" name = "english" value = "yes"/><br/>
			<label for = "english">No</label><input type = "radio" name = "english" value = "no"/><br/>
			<label for = "male">Male</label><input type = "radio" name = "gender" value = "male"/> <br/>
			<label for = "female">Female</label><input type = "radio" name = "gender" value = "female"/> <br/>
			<label for="age">...</label>
			<input type="" name="age">
			<input type="submit" name="submit" value="Greet me now">
		</form>
	'; 
}else{
	$sexe = ''; 
	$greetings = ''; 
	$_GET['age'] = (int) $_GET['age'];
	if($_GET['age'] < 0){
		echo 'lyar';
	}elseif ($_GET['age'] < 12){
		$sexe = ($_GET['gender'] == 'male') ? 'kiddo' : 'kiddogirl'; 
	}elseif($_GET['age'] < 18){
		$sexe = ($_GET['gender'] == 'male') ? 'Tennage Boy' : 'Teenage Girl'; //on peut simplifier en déclarant hors du scope
	}else{
		$sexe = ($_GET['gender'] == 'male') ? 'RobotBoy' : 'RobotGirl';
	}
	$greetings = ($_GET['english'] == 'yes') ? 'Hello' : 'Aloah'; 
	echo $greetings . $sexe; //Bug possible dans ce cas là aussi 
}
*/

// Soccer Girl Team 
/*
You want to create a soccer team for girls between 21 and 40 years old. age [21-40]

Create a form asking for the age, gender and name of the person. [age, gender, name]
Use the `$age` and `$gender` variables in an  `if/else` to display a "*welcome to the team !*" or "*Sorry you don't fit the criteria*" message. 
*/
/*
if(!isset($_POST['age']) || !isset($_POST['gender']) || !isset($_POST['name']) || (!(int)($_POST['age']) || (int)($_POST['age']) > 40 || (int)($_POST['age']) < 21) || $_POST['gender'] != 'female'){
	echo ' 
		<form method = "post" action = "conditions.php">
			<label for = "male">Male</label><input type = "radio" name = "gender" value = "male"/> <br/>
			<label for = "female">Female</label><input type = "radio" name = "gender" value = "female"/> <br/>
			<label for="age">Votre age : </label>
			<input type="" name="age"><br/>
			<input type = "text" name = "name"/>
			<input type="submit" name="submit" value="Valider votre candidature">
		</form>
	'; 
}else{
	echo 'Vous faites partie de l\'équipe'; 
}
*/

//School sucks ... DONE
/*
- note below 4 : "This work is really bad. What a dumb kid! "
- note between 5 and 9 : "This is not sufficient. More studying is required."
- note equals 10 : "barely enough!"
- note is 11, 12, 13 or 14 : "Not bad!"
- note is 15, 16, 17 or 18 : "Bravo, bravissimo!"
- note is 19 or 20 : "Too good to be true : confront the cheater!"
*/
/*
if(!isset($_POST['average']) || ! is_numeric($_POST['average'])){
	echo '
		<form action = "conditions.php" method = "post">
			<label for = "average">Average</label><input type = "text" name = "average" id = "average"/> <br/>
			<input type = "submit" value = "submit"/>
		</form>
	';
}else{
	$average = (float) ($_POST['average']); 
	if($average < 4){
		echo 'This work is really bad. What a dumb kid! '; 
	}elseif($average < 9){
		echo 'This is not sufficient. More studying is required.';
	}elseif($average == 10){
		echo 'barely enough!';
	}elseif($average < 15){
		echo 'Not bad!';
	}elseif($average < 19){
		echo 'Bravo, bravissimo!'; 
	}
	elseif($average <= 20){
		echo 'Too good to be true : confront the cheater!';
	}else{
		echo 'Stupid Teacher';
	}
}
*/
?>


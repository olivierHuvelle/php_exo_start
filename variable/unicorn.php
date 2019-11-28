<?php
/*
2. In a new file `unicorn.php`, create an html form asking "Are you a human, a cat or a unicorn ?".
 When submitted, the screen displays an animated Gif showing either a human, a cat or a unicorn, as per the user input (
     you can find gifs [here](https://giphy.com/explore/finding)). Use GET or POST as method, 
    whichever you like. Use a ternary operation to evaluate the condition.
*/
if(!isset($_POST['species']) || !in_array($_POST['species'], ['human', 'cat', 'unicorn'])){
    echo '
        <form action = "unicorn.php" method = "post">
            <p>De quelle espèce etes-vous?</p>
            <label for = "human">Human</label><input type = "radio" name = "species" id = "human" value = "human"/> <br/>
            <label for = "cat">Cat</label><input type = "radio" name = "species" id = "cat" value = "cat"/> <br/>
            <label for = "unicorn">Unicorn</label><input type = "radio" name = "species" id = "unicorn" value = "unicorn"/> <br/>
            <input type = "submit" value = "send"/>
        </form>
    ';
   
}else{
    echo '<img src = "https://media.giphy.com/media/5b1XcoXo6JYpPyG1RL/giphy.gif" alt = ""/>'; 
}
?>
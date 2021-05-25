<?php

$klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");








?>




<!DOCTYPE html>
<html>
<body>
<form>
    <select>
        <option selected="selected">Choose one</option>
        <?php
        
          foreach($klassen as $item){
             echo "<option value='strtolower($item)'>$item</option><br/>";
         }
      
        ?>
    </select>
    <input type="submit" value="Submit">
</form>
</body>
</html>



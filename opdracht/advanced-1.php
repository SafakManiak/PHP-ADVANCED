<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

.BOX {
        width: 168px;
        height: 30px;
        border: 1px solid #999;
        font-size: 18px;
        color: black;
        background-color: #eee;
        border-radius: 5px;
        box-shadow: 4px 4px black ;
        background-color: pink;
      }

.submit{
    width: 80px;
        height: 25px;
        border: 1px solid #999;
        font-size: 18px;
        color: black;
        background-color: #eee;
        border-radius: 5px;
        box-shadow: 4px 4px black;
        background-color: purple;
}

 .TK {
            width: 160px;
        height: 30px;
        border: 1px solid #999;
        font-size: 18px;
        color: black;
        background-color: #eee;
        border-radius: 5px;
        box-shadow: 4px 4px black;
        background-color: pink;
        }

input {

    width: 160px;
        height: 30px;
        border: 1px solid #999;
        font-size: 18px;
        color: black;
        background-color: #eee;
        border-radius: 5px;
        box-shadow: 4px 4px black;
        background-color: pink;

}
     



h1{
color: pink;

}

body {
 background-image: url("outerspace-6.gif");

}


</style>
<body>
<form action="advanced-2.php" method="POST">
<form>
    <select class="BOX" name="BgColor" id="BgColor">
        <option selected="selected">Achtergrondkleur</option>
    
            <?php
                $kleuren = array("red", "blue", "green", "black", "brown");
                foreach ($kleuren as $value) {
            ?>
            <option value="<?php echo $value ?>"><?php echo $value ?></option>
                <?php } ?>
     </select>
    





<select class="TK" name="tekstkleur" id="tekstkleur">
<option selected="selected">Tekstkleur</option>

            <?php
                $kleuren = array("red", "blue", "green", "black", "brown");
                foreach ($kleuren as $value) {
            ?>

    
            <option value="<?php echo $value ?>"><?php echo $value ?></option>
                <?php } ?>

</select>

    
<div class="tekstkleur">
    <h1> Vul hier onder de tabeldikte in. (PX)</h1>
<input type="Tekst" id="Dikte" name="Dikte"placeholder="B.V (30PX)" >
    <h1>vul hier onder de padding in. (px)
<p><input type="Tekst" id="Padding" name="Padding"placeholder="B.V (30PX)" ></p>
<input type="submit" value="Submit" class="submit" >



</form>
</body>
</html>
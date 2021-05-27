<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

  <style>
      .Blauw{

       color: <?php echo schrijfKleur("blue"); ?>

       }

       .red{

        color: <?php echo schrijfKleur("red"); ?>

        }


        .grey{

        color: <?php echo schrijfKleur("grey"); ?>

        }

        .green{

        color: <?php echo schrijfKleur("green"); ?>

        }





    </style>

</head>
<body>

<div class="Blauw">Blauw</div>
<div class="red">rood</div>
<div class="grey">Grijs</div>
<div class="green">groen</div>

<?php
function schrijfKleur($kleur) {


    
    echo $kleur;
  
  }

  
  

?>





    
</body>
</html>
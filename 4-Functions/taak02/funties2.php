<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

function rekenUit($antwoord, $antwoord1, $antwoord2) {


    return $antwoord + $antwoord1 + $antwoord2;
}


?>

<?php echo"Als ik de getallen 1, 4 en 6 bij elkaar optel, is de uitkomst ", rekenUit(1,4,6);?><br>
<?php echo"Als ik de getallen 7, 5 en 7 bij elkaar optel, is de uitkomst ", rekenUit(7,5,7);?><br>
<?php echo"Als ik de getallen 1, 90 en 5 bij elkaar optel, is de uitkomst ", rekenUit(1,90,5);?><br>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eindopdracht</title>
</head>

<style>
 body {
        background-color: <?php echo $_POST["BgColor"]; ?>;
         color: <?php echo $_POST["tekstkleur"]; ?>
    }

    td, th {
        border: <?php echo $_POST["Dikte"]; ?> solid <?php echo $_POST["tekstkleur"]; ?>;
        padding: <?php echo $_POST["Padding"]; ?>;
    }

</style>

<body>


<body>
    <table>
        <tr>
            <th>Naam</th>
            <th>Leeftijd</th>
            <th>Klas</th>
            <th>Opleiding</th>
        </tr>
        <tr>
        <?php 
            $arr = array("naam" => "Safak", "leeftijd" => "17", "Klas" => "LCTAOO0D", "Opleiding" => "Software Developer");
            foreach($arr as $key => $value){
                echo "<td>$value</td>"; 
            }
        ?>
        </tr>
    </table>

</body>
</html>
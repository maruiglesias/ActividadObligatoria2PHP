<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad Obligatoria 2 - PHP</title>
</head>
<body>
    <?php
    $alumno = array(
        "Nombre"=>"María",
        "Apellido"=>"Iglesias",
        "Edad"=>47,
        "Hobbie"=>"Ninguno",
        "Editor codigo preferido"=>"Visual Studio Code",
        "Sistema operativo que utiliza"=>"Windows"
    );
    
    foreach($alumno as $x => $x_value) {
        echo $x . ": " . $x_value;
        echo "<br>";
    }

    ?>

</body>
</html>
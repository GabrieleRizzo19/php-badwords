<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/style.css">
    <title>RECEIVER</title>
    
</head>
<body>
    
    <?php

        $paragraph = $_POST["paragraph"];
        $toBlur = $_POST["toBlur"];

    ?>

    <h1>DATI INSERITI</h1>
    <div>
        IL TESTO INSERITO È: <br>
        <?php echo $paragraph; ?> <br>
        HA UNA LUNGHEZZA DI <?php echo strlen($paragraph); ?> PAROLE
    </div>
    <div>
        LA PAROLA DA CENSURARE È: <br>
        <?php echo $toBlur; ?>
    </div>

    <h1>TESTO CENSURATO</h1>
    <div>
        Il testo censurato è: <br>
        <?php echo str_ireplace($toBlur, "***", $paragraph); ?>
    </div>

</body>
</html>
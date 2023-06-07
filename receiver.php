<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RECEIVER</title>
</head>
<body>
    
    <?php

        $paragraph = $_POST["paragraph"];
        $toBlur = $_POST["toBlur"];

    ?>

    <h1>DATI INSERITI</h1>
    <div>
        Il testo inserito é: <br>
        <?php echo $paragraph; ?>
    </div>
    <div>
        La parola da censurare é: <br>
        <?php echo $toBlur; ?>
    </div>

</body>
</html>
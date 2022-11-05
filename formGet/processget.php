<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>process Get</title>
</head>
<body>

    <h1> Processamento </h1>
    
    <?php 
        if(isset($_GET["text"])) {
            $n = $_GET["text"];
            echo "<p> Valor enviado: $n</p>";
        }
    ?>

</body>
</html>
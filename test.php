<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First php college</title>
</head>

<style> 
 .test {
    color: blue;
 }
</style>
<body>
    <p>Here is my html code</p>

    <p>
        <?php
            $frase = "Meu lovezinho";
            $trecho = "Miguel"; 
            echo "<p class='test'>Here is my PHP code</p>";
            echo "<p>Minha putinha: $trecho </p>";
            echo '<p>Meu lovezito: $trecho</p>';
            echo $frase . " " .$trecho;
        ?>    
    </p>

</body>
</html>
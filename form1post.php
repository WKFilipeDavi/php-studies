<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form 1</title>
    </head>

<style> 

</style>

<body>
    <h1> -- Form 01 -- </h1>
    <form method="post" action="form1post.php">
        <label>Digite um número: </label>
        <input type="text" id="n1" name="n1">
        <input type="submit" name="sub" value="number">

        <?php 
            
            if(isset($_POST["sub"])) {
                $n = $_POST["n1"];
            }

            echo "<p> Value typed: $n </p>";
        ?>
    </form>    
</body>

</html>
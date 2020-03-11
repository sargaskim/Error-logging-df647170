<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Bit Academy</title>
    </head>

    <body>
        <form action="" method="get">
        
            <input type="text" name="text" placeholder="getal tussen 0 en 10 in">

            <input id="send" name="send" type="submit" value="submit">

        </form>

        <?php
        function countDown($n) {
            for ($i=$n; $i>0; $i--)
            echo "$i <br>";
        }

        if (isset($_GET["text"])) {
            if (is_numeric($_GET["text"]) && $_GET["text"] > 0 && $_GET["text"] < 10) {
                countDown($_GET["text"]);
            }
            else if (!is_numeric($_GET["text"])) {
                error_log('is geen getal'.PHP_EOL, 3, "errors.log");
            }
            elseif ($_GET["text"] <= 0) {
                error_log('kan niet lager tellen'.PHP_EOL, 3, "errors.log");
            }
            elseif ($_GET["text"] > 10) {
                error_log('getal is te groot'.PHP_EOL, 3, "errors.log");
            }  
            else {
                error_log('er is iets mis gegaan'.PHP_EOL, 3, "errors.log");
            }      
        } 
        
        ?>

    </body>
</html>
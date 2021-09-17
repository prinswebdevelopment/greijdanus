<!DOCTYPE html>
<html>
    <head>
        <title>Formulier vb 1</title>
    </head>
    <body>
        <?php
        // voorkom xss (cross-site scripting)
        $naam = htmlentities($_POST['naam'], ENT_QUOTES | ENT_HTML5, 'UTF-8');
        echo "Welkom $naam";
        ?>
    </body>
</html>

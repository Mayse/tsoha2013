<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>uuden käyttäjän luominen</p><br>
        <form method="post">
            nimi <input type="text" name="nimi"><br>
            salasana <input type="password" name="salasana"><br>
            Pääkäyttäjä <input type="checkbox" name="paakayttaja"><br>
        Omistamat saunat<br>
        <?php
        foreach ($saunat as $sauna) {
            echo $sauna->getNimi(); ?><input type="checkbox" name="<?php echo $sauna->getNimi(); ?>"><br><?php
        }
        ?>

        <button type="submit">luo</button><br>
        </form>
        
        <div align="right"><a href="hallinta.php" >palaa</a></div>
    </body>
</html>

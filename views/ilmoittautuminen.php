<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo $snimi; ?><br>
        <?php echo $sijainti; ?><br>
        
        <div>
        <table border="1">
            <th>Ilmoittautuneet</th>
            <?php
            foreach ($ilmoittautuneet as $ilmoittautunut) {
                ?><tr><td><?php echo $ilmoittautunut; ?></td></tr><?php
                }
                ?>
        </table></div>
        <div>
            <form action="ilmoittaudu.php" method='post'>
                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                <button type="submit">Ilmoittaudu/peru ilmoittautuminen</button>
            </form>
        </div>
        <a href="saunavuorot.php" >palaa</a>
    </body>
</html>

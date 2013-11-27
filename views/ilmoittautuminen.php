<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <table border="1">
            <th>Ilmoittautuneet</th>
        <?php
        foreach ($ilmoittautuneet as $ilmoittautunut) {
            
       ?><tr><td><?php echo $ilmoittautunut; ?></td></tr><?php 
        }
        // put your code here
        ?>
        </table>
        <div>
            <form action="ilmoittaudu.php" method='post'>
                <input type="hidden" value="<?php echo $id; ?>" />
            <button type="submit">Ilmoittaudu/peru ilmoittautuminen</button>
            </form>
        </div>
    </body>
</html>

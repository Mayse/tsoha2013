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
    </body>
</html>

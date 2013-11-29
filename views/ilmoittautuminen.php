<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo $snimi; ?><br>
        <?php echo $sijainti; ?><br>
        <?php echo "alkaa: " . $alkuaika; ?><br>
        <?php echo "loppuu: " . $loppuaika; ?><br>

        <div>    
            <table border="1">
                <th>Ilmoittautuneet</th>
                <?php
                foreach ($ilmoittautuneet as $ilmoittautunut) {
                    ?><tr><td><?php echo $ilmoittautunut; ?></td></tr><?php
                    }
                    ?>
            </table></div><?php  
                
     if (ilmoittautuminen::tarkistaIlmoittautuminen($knimi, $id)) {
        ?> <form action="ilmoittaudu.php" method='post'>
                <input type="hidden" name="id" value="<?php echo $id; ?>" >
                <input type="hidden" name="suunta" value="ulos" >
                <button type="submit">Peru ilmoittautuminen</button>
                </form><?php    
     }
     elseif (!$taynna) {
                ?>               
                <form action="ilmoittaudu.php" method='post'>
                <input type="hidden" name="id" value="<?php echo $id; ?>" >
                <input type="hidden" name="suunta" value="sisaan">
                <button type="submit">Ilmoittaudu</button>
                </form><?php } if($taynna) {echo "sauna täynnä";
                    }?>
        <div align="right"><a href="saunavuorot.php" >palaa</a></div>
    </body>
</html>
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
            <?php if (!saunavuoro::onkoTaynna($id)) { 
                
     if (ilmoittautuminen::tarkistaIlmoittautuminen($_SESSION['kirjautunut']->getNimi(), $id)) {
        ?> <form action="ilmoittaudu.php" method='post'>
                <input type="hidden" name="id" value="<?php echo $id; ?>" >
                <input type="hidden" name="suunta" value="ulos" >
                <button type="submit">Peru ilmoittautuminen</button>
                </form>
        <?php    
     }
 else {
                ?>
            
            
                
                <form action="ilmoittaudu.php" method='post'>
                <input type="hidden" name="id" value="<?php echo $id; ?>" >
                <input type="hidden" name="suunta" value="sisaan">
                <button type="submit">Ilmoittaudu</button>
                </form>
            
 <?php }} else {echo "sauna täynnä";
                    }?>

        </div>
        <a href="saunavuorot.php" >palaa</a>
    </body>
</html>
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
                //jos käyttäjä on ilmoittautunut vuoroon, näytetään perumisnappi
     if (ilmoittautuminen::tarkistaIlmoittautuminen($knimi, $id)) {
        ?> <form action="ilmoittaudu.php" method='post'>
                <input type="hidden" name="id" value="<?php echo $id; ?>" >
                <input type="hidden" name="suunta" value="ulos" >
                <button type="submit">Peru ilmoittautuminen</button>
                </form><?php    
     }
                //muuten näytetään ilmoittautumisnappi, jos vuoro ei ole vielä täynnä
     elseif (!$taynna) {
 
                ?>    
                <form action="ilmoittaudu.php" method='post'>
                <input type="hidden" name="id" value="<?php echo $id; ?>" >
                <input type="hidden" name="suunta" value="sisaan">
                <button type="submit">Ilmoittaudu</button>
                </form><?php } 
                //täydestä saunasta ilmoitetaan tekstirivillä
                if($taynna) {echo "sauna täynnä";
                    }?> <br><?php
            if (omistaja::omistaakoSaunan($knimi, $snimi)) {?>
                <form action="muokkaavuoroa.php" method='post'>
                <input type="hidden" name="id" value="<?php echo $id; ?>" >
                <button type="submit">Muokkaa vuoroa</button>
                </form><?php
            }   
                    ?>
        <div align="right"><a href="saunavuorot.php" >palaa</a></div>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        Käyttäjän muokkaus<br>
        <?php
        //mikäli käyttäjää ei ole valittu tulostetaan kaikki käyttäjät
        if (empty($_GET['kayttaja'])) {
            foreach ($kayttajat as $kayttaja) {
                ?> <a href="kayttajamuokkaa.php?kayttaja=<?php echo $kayttaja->getNimi(); ?>"><?php echo $kayttaja->getNimi(); ?></a> <br><?php
            }
        } 
        
        //muutoin piirretään muokkauselementit valitusta käyttäjästä
        else {
            ?><br><?php echo $_GET['kayttaja'] . " " ?>
            
            <form method="post" action="kayttajapoista.php">
                <input type="hidden" name="kayttaja" value="<?php echo $_GET['kayttaja']?>">
                       
                <button type="submit">poista käyttäjä</button>
            
            </form> <br>        
            
            <form method="post">Uusi salasana<input type="text" name="salasana"><br>  
            Omistamat saunat<br>
                    <?php 
                    
                    $i = 0;
                    foreach ($saunat as $sauna) {
                    $i++;
                    echo $sauna->getNimi(); ?>
                        <input type="checkbox" name="<?php echo $i; ?>"
                        value="<?php echo $sauna->getNimi(); ?>" 
                        <?php if (omistaja::omistaakoSaunan($_GET['kayttaja'], $sauna->getNimi())) {?>
                        checked="yes"<?php
                    } ?>><br>
                        <?php 
                        }?>
                        
                        <input type="hidden" name="i" value="<?php echo $i; ?>">

        <button type="submit">tallenna</button><br>
        </form><?php
        }?>
            <?php if (isset($_GET['kayttaja'])) {
    ?><div align="right"><a href="kayttajamuokkaa.php" >palaa</a></div><?php
} else {
    ?><div align="right"><a href="hallinta.php" >palaa</a></div><?php
}?>
            
    </body>
</html>

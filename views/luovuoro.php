<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><form method="post"><?php
    
    foreach ($saunat as $sauna){
    ?>
            <input type="radio" name="sauna" value="<?php echo $sauna['snimi'] ?>"><?php echo $sauna['snimi'] ?><br>
        <?php  } ?>
            Alkamispäivä: <input type="date" name="alkupaiva">
            Alkamisaika <input type="time" name="alkukello"><br>
            Loppumisaika: <input type="date" name="loppupaiva">
            Loppumisaika: <input type="time" name="loppukello"><br>
            <input type="submit" value="Submit">
</form>
    
    <div align="right"><a href="saunavuorot.php" >palaa</a></div></body>
</html>

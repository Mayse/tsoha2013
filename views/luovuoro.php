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
            Alkamisaika: <input type="text" name="alkuaika"><br>
            Loppumisaika: <input type="text" name="loppuaika"><br>
            <input type="submit" value="Submit">
</form>
    
    <div align="right"><a href="saunavuorot.php" >palaa</a></div></body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Saunatietokanta</title>
    </head>
    <body> <div align=center>
        <h1>Saunatietokanta</h1>
        
        <?php
        if (!empty($_SESSION['kirjautunut'])) {
            ?><div align = right><a href="uloskirjaudu.php">Kirjaudu ulos</a></div><?php            
        }?>

          
        
        <?php if (!empty($data->virhe)): ?>
        <div><?php echo $data->virhe; ?></div>
        <?php endif; ?>


            <?php require $sivu;
            ?>
        

</div>
    </body>
</html>

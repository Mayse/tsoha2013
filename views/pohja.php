<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Saunatietokanta</title>
    </head>
    <body> <div>
        <h1>Saunatietokanta</h1>

        <?php if (!empty($data->virhe)): ?>
        <div><?php echo $data->virhe; ?></div>
        <?php endif; ?>


            <?php require $sivu;
            ?>
        

</div>
    </body>
</html>

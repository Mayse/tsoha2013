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
    <body>
        <h1>Saunatietokanta</h1>
        
        <?php if(isset($data->virheViesti))
     echo $data->virheViesti;
            ?>
        
        <?php require $sivu; ?>


    </body>
</html>

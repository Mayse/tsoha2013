
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'tietokanta.php';
        $sql="SELECT knimi FROM kayttaja";
        foreach ($yhteys->query($sql) as $kayttaja){
            print $kayttaja['knimi'];
        }
        ?>
    </body>
</html>

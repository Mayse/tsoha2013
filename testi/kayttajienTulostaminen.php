
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once '../libs/tietokanta.php';
        $yhteys = getTietokanta();
        $sql="SELECT knimi FROM kayttaja";
        foreach ($yhteys->query($sql) as $kayttaja){
            print $kayttaja['knimi'];
            ?><br><?php
        }
        ?>
    </body>
</html>

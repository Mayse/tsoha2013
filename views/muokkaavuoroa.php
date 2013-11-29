<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo $snimi;
        ?><form><button>peru vuoro</button> </form>
        <form>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            Alkamisaika: <input type="text" name="alkamisaika" value="<?php echo $alkuaika; ?>"><br>
            Loppumisaika: <input type="text" name="loppumisaika" value="<?php echo $alkuaika; ?>"><br>
<button>submit</button>
</form>
        <div align="right"><a href="ilmoittautuminen.php?id=<?php echo $id; ?>" >palaa</a></div>
    </body>
</html>

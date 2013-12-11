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
        ?><form method="get">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="action" value="delete">
            <button>peru vuoro</button> 
        </form>
        <form method="get">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="hidden" name="action" value="update">
            Alkamisaika: <input type="text" name="alkamisaika" value="<?php echo $alkuaika; ?>"><br>
            Loppumisaika: <input type="text" name="loppumisaika" value="<?php echo $loppuaika; ?>"><br>
<button>tallenna</button>
</form>
        <div align="right"><a href="ilmoittautuminen.php?id=<?php echo $id; ?>">palaa</a></div>
    </body>
</html>

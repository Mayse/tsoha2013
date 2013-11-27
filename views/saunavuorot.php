<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body><table border="1"><tr>
<th>Sauna</th>
<th>Aika</th>
<th>Ilmoittautuneita</th>
</tr><?php
    
    foreach ($vuorot as $vuoro) {
        ?><tr>
         <?php
         $ilmoittautujamaara = ilmoittautuminen::getIlmoittautujamaara($vuoro->getID());
         $koko = Sauna::getSauna($vuoro->getNimi())->getKoko();
  ?><td> <?php       echo $vuoro->getNimi(); ?></td> <?php
  ?><td> <?php       echo $vuoro->getAlkuaika(); echo " - "; echo $vuoro->getLoppuaika();?></td> <?php
  ?><td> <?php       echo $ilmoittautujamaara; echo "/"; echo $koko; ?></td> <?php
         ?></tr>
         <?php
    } ?>
    
    
    
               

<!--<tr>
<td>row 1, cell 1</td>
<td>row 1, cell 2</td>
<td>row 1, cell 3</td>
</tr>
<tr>
<td>row 2, cell 1</td>
<td>row 2, cell 2</td>
<td>row 2, cell 3</td>
</tr>-->
</table>
        
        
    </body>
</html>

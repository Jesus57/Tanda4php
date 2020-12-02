<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>T4-01</title>
  </head>
  <body>
    <?php
        $numeros = [];
        $cuadrado = [];
        $cubo = [];
        $valor = 0;
        for ($i=0;$i<=20;$i++)
        {
            $valor = rand (0,100);
            $numeros[] = ($valor);
            $cuadrado[] = ($valor*$valor);
            $cubo[] = ($valor*$valor*$valor);
        }
    ?>
      <table border="1px">
      <tr><td>Número</td><td>Cuadrado</td><td>Cubo</td></tr>
    <?php
        for ($i = 0; $i < 20; $i++) {
            echo "<tr><td>".$numeros[$i]."</td>";
            echo "<td>".$cuadrado[$i]."</td>";
            echo "<td>".$cubo[$i]."</td></tr>";
        }
    ?>
    </table>
    </body>
</html>
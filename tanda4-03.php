<?php
    if (!isset($_GET['n'])) {
      $array = [];
    } 
    else 
    {
      $n = $_GET['n'];
      $array = [];
      foreach($_GET['valor'] as $patata)
      {
          array_push($array,$patata);
      }
      array_push($array,$n);
    }
    if (count($array)==15)
    {
        $array2 = [];
        for ($i=0;$i<count($array);$i++)
        {
            if ($i+1==count($array))
            {
                $array2[0]=$array[$i];
            }
            else
            {
                $array2[$i+1]=$array[$i];
            }
        }
        for ($i = 0; $i <count($array2); $i++) {
            echo $array2[$i]." ";
        }
    }
    
    else{
?>
    <form action="Tanda4-03.php" method="get">
      Introduzca un número:
      <input type="number" name ="n" autofocus>
      <?php
        foreach ($array as $valor) //$valor == [i]
        {
          echo '<input type="hidden" name="valor[]" value="'.$valor.'">';
        }
      ?>
      <input type="submit" value="OK">
    </form>
    <?php
    }
  ?>
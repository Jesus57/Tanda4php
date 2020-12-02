<?php
    if(!isset($_POST['contador']))
    {
        $contador = 0;
        $numeroUsuario = "";
        $stringNumero = "";
    }
    else
    {
        $contador = $_POST['contador'];
        $numeroUsuario = $_POST['n'];
        $stringNumero = $_POST['stringNumero'];
    }

    if($contador == 10)
    {
        $stringNumero = $stringNumero." ".$numeroUsuario;

        $stringNumero = substr($stringNumero,2);
        $stringNumero = explode(' ',$stringNumero);
        $max = $stringNumero[0];
        $min = $stringNumero[0];

        foreach ($stringNumero as $valor)
        {
            if($valor > $max)
            {
                $max = $valor;
            }
            if($valor < $min)
            {
                $min = $valor;
            }
        }
        foreach ($stringNumero as $valor)
        {
            echo '- '.$valor;
            if($valor == $max)
            {
                echo ' ---- Maximo';
            }
            elseif($valor == $min)
            {
                echo ' ---- Minimo';
            }
            echo '<br>';
        }
    }
    else
    {
        echo '<form action="Tanda4-02.php" method="post">
        <label for="n">Introduzca 10 contador: </label>
        <input type="number" name="n" min="0" autofocus><br>
        <input type="hidden" name="contador" value="'.++$contador.'">
        <input type="hidden" name="stringNumero" value="'.$stringNumero." ".$numeroUsuario.'">
        <p>(Para parar introduzca un valor negativo)</p>
        <input type="submit" value="Enviar">
        </form>';
    }
    ?>
    <a href=".">Volver</a>
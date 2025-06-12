<?php

$campo = 0;

if( $_SERVER["REQUEST_METHOD"] == "POST" ) {
    
    if(isset($_POST["n1"]) ) {
        $n1 = $_POST["n1"];
    } else {
        $n1 = null;
    }

    if(isset($_POST["n2"]) ) {
        $n2 = $_POST["n2"];
    } else {
        $n2 = null;
    }

    if(isset($_POST["sub"]) ) {
        $sub = $_POST["sub"];
    } else {
        $sub = null;
    }

    $media = ($n1 + $n2) / 2;

    echo "Nota final = $media";

    if( $media < 6 ) {
        echo "<br>Pegou substituição.";
        if( $n1 < $n2 ) {
            $campo = 1;
        } else {
            $campo = 2;
        }
    } else {
        echo "<br>Aprovado!";
    }

    if( $sub != null ) {
        if($campo == 1) {
            $media = ( $sub + $n1 ) / 2;
        } else {
            $media = ( $sub + $n2 ) / 2;
        }
        echo "<br>Média com substituição = $media";
        $campo = 0;

        if( $media < 6 ) {
            echo "<br>Reprovado!";
        } else {
            echo "<br>Aprovado!";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP</title>
</head>
<body>
     
     <h2> Cálculo de nota: </h2>
     <form action="#" method="post">

          <?php if( $campo == 0 ) : ?>
               <input type="number" name="n1" placeholder="N1" step="0.1" required>
               <br><br>
               <input type="number" name="n2" placeholder="N2" step="0.1" required>
          <?php endif ?>

          <?php if( $campo == 1 ) : ?>
               <input type="number" name="sub" placeholder="Substituição" step="0.1" required>
               <br><br>
               <input type="number" name="n2" placeholder="N2" step="0.1" value="<?= $n2 ?>" required>
               <input type="hidden" name="n1" value="<?= $n1 ?>">
          <?php endif ?>

          <?php if( $campo == 2 ) : ?>
               <input type="number" name="n1" placeholder="N1" step="0.1" value="<?= $n1 ?>" required>
               <br><br>
               <input type="number" name="sub" placeholder="Substituição" step="0.1" required>
               <input type="hidden" name="n2" value="<?= $n2 ?>">
          <?php endif ?>

          <br><br>
          <input type="submit" value="Calcular nota">

     </form>

</body>
</html>

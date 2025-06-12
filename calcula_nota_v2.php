<?php

$chave = 0;

    if( isset( $_POST["n1"] ) ) {
        $n1 = $_POST["n1"];
    } else {
        $n1 = null;
    }

    if( isset( $_POST["n2"] ) ) {
        $n2 = $_POST["n2"];
    } else {
        $n2 = null;
    }

    if( isset( $_POST["sub"] ) ) {
        $sub = $_POST["sub"];
    } else {
        $sub = null;
    }

    if( $n1 != null && $n2 != null ) {
        $media = ($n1 + $n2) / 2;
        //echo "Nota final = $media";
        if( $media < 6 ) {
            $result = "Pegou substituição";
            if( $n1 < $n2 ) {
                $chave = 1;
            } else {
                $chave = 2;
            }
        } else {
            $result = "✅ Aprovado!";
        }
    }

    if( $sub != null ) {
        if( $chave == 1 ) {
            $media = ( $sub + $n2 ) / 2;
        } else {
            $media = ( $sub + $n1 ) / 2;
        }
        $notaSub = "Nota com substituição = $media";
        if( $media < 6 ) {
            $resultSub = "❌ REPROVADO!";
        } else {
            $resultSub = "✅ APROVADO!";
        }
        $chave = 0;    
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular nota</title>
</head>
<body>
    
    <h2>Cálculo de nota:</h2>

    <form action="#" method="post">

        <?php if( $chave == 0 ) : ?>
            <input type="number" name="n1" min="0" max="10" step="0.1" placeholder="Nota 1" required>
            <br><br>
            <input type="number" name="n2" min="0" max="10" step="0.1" placeholder="Nota 2" required>
        <?php endif ?>

        <?php if( $chave == 1 ) : ?>
            <input type="hidden" name="n1" value="<?= $n1 ?>">
            <input type="number" name="sub" min="0" max="10" step="0.1" placeholder="Subst." required>
            <br><br>
            <input type="number" name="n2" min="0" max="10" step="0.1" placeholder="Nota 2" value="<?= $n2 ?>" readonly>
        <?php endif ?>

        <?php if( $chave == 2 ) : ?>
            <input type="hidden" name="n2" value="<?= $n2 ?>">
            <input type="number" name="n1" min="0" max="10" step="0.1" placeholder="Nota 1" value="<?= $n2 ?>" readonly>
            <br><br>
            <input type="number" name="sub" min="0" max="10" step="0.1" placeholder="Subst." required>
        <?php endif ?>
        
        <br><br>
        <input type="submit" value="Calcular nota">

    </form>

    <h3>
        <?php
            if( isset($media) ) {
                echo "Nota final = $media";
                echo "<br> $result";
            }

            if( isset($notaSub) ) {
                echo "<br> $notaSub";
                echo "<br> $resultSub";
            }
        ?>
    </h3>

</body>
</html>

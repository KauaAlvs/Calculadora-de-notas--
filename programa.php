<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../calculadora_de_medias/CSS/programa.css">
    <title>Programa de notas</title>
<head>

	<style>
		.center {
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}
	</style>
    
</head>
<body>
	<div class="center">
		<?php
			$nota1 = $_POST['nota1'];
			$nota2 = $_POST['nota2'];
			$nota3 = $_POST['nota3'];
			$nota4 = $_POST['nota4'];

			$soma = $nota1 + $nota2 + $nota3 + $nota4;
			$media = $soma / 4;

			echo " <br>Soma: $soma";
			echo " <br>Média: $media";

			if ($media >= 6) {
				echo "<br>Aprovado!";
			} else {
				echo "<br>Reprovado.";
			}
		?>
	</div>
</body>
</html>
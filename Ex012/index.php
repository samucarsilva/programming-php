<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Loopings </title>
</head>
<body>


    <h2> Loopings </h2>


    <?php 


        $quebraDeLinha = "<br></br>";
    

        // Utilizando o Looping While

            echo "<h3> While </h3>";


            $contador = 1;

				while ($contador <= 10) {
					echo $contador . $quebraDeLinha;
					$contador++; // Incrementando
				}
        
        
        // Usando o Looping Do-While

            echo "<h3> Do-While </h3>";

        
            $indice = 10;

				do {
					echo $indice . $quebraDeLinha;
					$indice--; // Decrementando
				} while ($indice > 0);

            
        // Utilizando o Looping For

            echo "<h3> For </h3>";

				
				for($i = 1; $i <= 10; $i++) {
					echo $i . $quebraDeLinha;
				}


		// Utilizando o Looping Foreach

            echo "<h3> Foreach </h3>";
			

			$listaFrutas = ["Banana", "Pera", "Maçã", "Laranja"];

				foreach($listaFrutas as $fruta) {
					echo $fruta . $quebraDeLinha;
				}

				echo $quebraDeLinha;


			/*$idadePessoas = [
				"Alexia" => 20, 
				"Sam" => 18,
				"Lucas" => 32
			];*/


				/*foreach($idadePessoas as $nome => $idade) {
					echo "$nome tem $idade anos"  . $quebraDeLinha;
				}*/
				

    ?>


</body>
</html>
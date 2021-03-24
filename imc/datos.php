<br>
<br>


<h1>Resultado de tu índice de masa corporal</h1>
<br>

<?php

    //IMC = peso / (altura*altura)

    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    $imc = $peso / ($altura*$altura);


    if($imc < 18){
        echo "Peso bajo. Necesario valorar signos de desnutrición <br>";
    }elseif($imc >= 18 && $imc <= 24.9){
        echo "Peso normal <br>";
    }elseif($imc >= 25 && $imc <= 26.9){
        echo "Sobrepeso <br>";
    }elseif($imc > 27){
        echo "Obesidad";
    }elseif($imc >= 27 && $imc <= 29.9){
        echo "Obesidad grado 1. Riesgo relativo alto para desarrollar enfermedades cardiovasculares <br>";
    }elseif($imc >= 30 && $imc <= 39.9){
        echo "Obesidad grado 2. Riesgo relativo muy alto para desarrollar enfermedades cardiovasculares <br>";
    }elseif($imc >= 40){
        echo "Obesidad grado 3. Extrema o Mórbida. Riesgo relativo extremadamente alto para desarrollar enfermedades cardiovasculares <br>";
    }

?>
<br>
<a href="index.php">Regresar :D</a>
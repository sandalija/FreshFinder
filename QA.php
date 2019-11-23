<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/estils.css" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IPO - Recomanar</title> 
    </head>
 
    <body>
            <input type="image" src="resources/FreshFinder_logo.png" />
        <div class="box">
            <div class="question">
                <?php
                 include 'resources/scripts.php'; 

                $q = $_GET['q'];

                // Strings para los echos de los elementos HTML

                // Pregunta de entrada + zona
                $pregunta_entrada =  "¿Sobre que quieres que te ayudemos?
                <div class=\"flex-answer-buttons\"> 
                <a class=\"answers-button\" href=\"QA.php?q=1000\">Tratamiento de piel</a> 
                <a class=\"answers-button\" href=\"QA.php?q=2000\">Tratamiento facial</a> 
                <a class=\"answers-button\" href=\"QA.php?q=3000\">Tratamiento cabello</a> 
                <a class=\"answers-button\" href=\"QA.php?q=4000\">Para niños</a> 
                </div> ";
                $tipos_piel_2_piel = "Primero, ¿cómo es tu piel?
                <div class=\"flex-answer-buttons\">
                <a class=\"answers-button\" href=\"QA.php?q=1100\">Grasa </a>
                <a class=\"answers-button\" href=\"QA.php?q=1200 \">Seca</a> 
                <a class=\"answers-button\" href=\"QA.php?q=1300\">Mixta</a>
                <a class=\"answers-button\" href=\"QA.php?q=1400\">Sensible</a> </div>";
                $tipos_piel_2_cara =  "Primero, ¿cómo es tu piel?
                <div class=\"flex-answer-buttons\">
                <a class=\"answers-button\" href=\"QA.php?q=2100\">Grasa </a>
                <a class=\"answers-button\" href=\"QA.php?q=2200\">Seca</a> 
                <a class=\"answers-button\" href=\"QA.php?q=2300\">Mixta</a>
                <a class=\"answers-button\" href=\"QA.php?q=2400\">Sensible</a> </div>";
                $tipos_pelo =  "Primero, ¿cómo es tu piel?
                <div class=\"flex-answer-buttons\">
                <a class=\"answers-button\" href=\"QA.php?q=3100\">Grasa </a>
                <a class=\"answers-button\" href=\"QA.php?q=3200\">Seca</a> 
                <a class=\"answers-button\" href=\"QA.php?q=3300\">Mixta</a>
                <a class=\"answers-button\" href=\"QA.php?q=3400\">Sensible</a> </div>";

                // Tipos de piel
                $necesidad_piel_piel_sensible = "Dinos, ¿qué necesitas?
                <div class=\"flex-answer-buttons\">
                <a class=\"answers-button\" href=\"QA.php?q=1110\">Quiero verme más joven </a>
                <a class=\"answers-button\" href=\"QA.php?q=1120\">Cuidar y mimar mis manos</a> 
                <a class=\"answers-button\" href=\"QA.php?q=1130\">Reparar y reafirmar</a>
                <a class=\"answers-button\" href=\"QA.php?q=1140\">Cuidar mis manos, nutrir i reafirmar</a> </div>";

                // Piel sensible rejuvenecer
                $necesidad_piel_piel_sensible = "¿Cúal es tu presupuesto?
                <form action = \" method=\"get\" >
                <input name=\"price\">
                <a class=\"answers-button\" href=\"results.html\">Quiero verme más joven </a>
                </div>";
 
         
                switch ($q) {
                    case 0: echo $pregunta_entrada; break;
                    case 1000: echo $necesidad_piel__2_piel; break;
                    case 1100: echo $tipos_piel_2_piel; break;
                    case 1110: echo $necesidad_piel_piel_sensible; break;
                    case 2000: echo $tipos_pelo; break;
                    default: echo "Ha habido un problema";
                }

                function button_press(){
                    $file=fopen("C:\FreshFinder\responses.txt", "w");
                    fputs($file, "Hola\n");
                    fclose($file);
                    /*$file=fopen('C:\FreshFinder\responses.txt', 'w');
                    fwrite($file, 'Hola\n');
                    fclose($file);*/
                }

            ?>

            </div>
            
            
        </div>
        <div class="for-back-button">
            <input type="image" src="resources/back-icon.png" />
        </div>
    </body>
</html>
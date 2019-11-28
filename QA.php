<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/estils.css" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IPO - Recomanar</title> 
    </head>
 
    <body>
            <a href=index.php><img src = "resources/FreshFinder_logo_white.png"
                alt="Inicio"> </a>
            <div class="flex-help-buttons">
                <a class="HelpButton" href="https://www.freshlycosmetics.com/es/contacta">Ayuda</a>
                <a class="HelpButton" href="https://www.freshlycosmetics.com/es/productos/">Ver todo el catálogo</a>
            </div> 
        
                <?php
                 include 'resources/scripts.php'; 

                $q = $_GET['q'];

                $migas = array(0 => "", 1 => "", 2 => "");
                $address = array(0 => "0", 1 => "", 2 => "");

                //$lista = array ($agua_micelar_green, $blue_radiance_enzymatic_serum);

                // div para las migas
                echo "<div class=\"migas\">";
                switch($q) {
                    case 1: $migas[0] = "Tratamiento de piel"; break;
                    case 2: $migas[0] = "Tratamiento facial"; break;
                    case 3: $migas[0] = "Tratamiento cabello"; break;
                    case 4: $migas[0] = "Para niños"; break;
                    case 11: $migas[0] = "Tratamiento de piel";
                            $migas[1] = "Grasa"; 
                            $address[1] = "1";
                            break;
                    case 12: $migas[0] = "Tratamiento de piel";
                            $migas[1] = "Seca"; 
                            $address[1] = "1";
                          break;
                    case 13: $migas[0] = "Tratamiento de piel";
                            $migas[1] = "Mixta"; 
                            $address[1] = "1";
                            break;
                    case 14: $migas[0] = "Tratamiento de piel";
                            $migas[1] = "Sensible"; 
                            $address[1] = "1";
                             break;
                    case 111: $migas[0] = "Tratamiento de piel";
                            $migas[1] = "Grasa"; 
                            $address[1] = "1";
                            $migas[2] = "Rejuvenecer"; 
                            $address[2] = "11";
                            break;
                    default: $migas = "";
                }
                
                if ($q > 0){
                    echo "<a href=\"QA.php?q=$address[0]\">$migas[0]</a>";
                }
                if ($q > 10) {
                    echo ">";
                    echo "<a href=\"QA.php?q=$address[1]\">$migas[1]</a>";
                }
                if ($q > 100) {
                    echo ">";
                    echo "<a href=\"QA.php?q=$address[2]\">$migas[2]</a>";
                }

                //Cerrar div de migas
                echo "</div>";

                //Caja de las preguntas

                echo "<div class=\"box\">
                        <div class=\"question\">";

                // Strings para los echos de los elementos HTML

                // Pregunta de entrada + zona
                $pregunta_entrada =  "¿Sobre qué quieres que te ayudemos?
                <div class=\"flex-answer-buttons\"> 
                <a class=\"answers-button\" href=\"QA.php?q=1\">Tratamiento de piel</a> 
                <a class=\"answers-button\" href=\"QA.php?q=2\">Tratamiento facial</a> 
                <a class=\"answers-button\" href=\"QA.php?q=3\">Tratamiento cabello</a> 
                <a class=\"answers-button\" href=\"QA.php?q=4\">Para niños</a> 
                </div> ";
                $tipos_piel_2_piel = "Primero, ¿cómo es tu piel?
                <div class=\"flex-answer-buttons\">
                <a class=\"answers-button\" href=\"QA.php?q=11\">Grasa </a>
                <a class=\"answers-button\" href=\"QA.php?q=12\">Seca</a> 
                <a class=\"answers-button\" href=\"QA.php?q=13\">Mixta</a>
                <a class=\"answers-button\" href=\"QA.php?q=14\">Sensible</a> </div>";
                $tipos_piel_2_cara =  "Primero, ¿cómo es tu piel?
                <div class=\"flex-answer-buttons\">
                <a class=\"answers-button\" href=\"QA.php?q=21\">Grasa </a>
                <a class=\"answers-button\" href=\"QA.php?q=22\">Seca</a> 
                <a class=\"answers-button\" href=\"QA.php?q=23\">Mixta</a>
                <a class=\"answers-button\" href=\"QA.php?q=24\">Sensible</a> </div>";
                $tipos_pelo =  "Primero, ¿cómo es tu piel?
                <div class=\"flex-answer-buttons\">
                <a class=\"answers-button\" href=\"QA.php?q=31\">Grasa </a>
                <a class=\"answers-button\" href=\"QA.php?q=32\">Seca</a> 
                <a class=\"answers-button\" href=\"QA.php?q=33\">Mixta</a>
                <a class=\"answers-button\" href=\"QA.php?q=34\">Sensible</a> </div>";

                // Tipos de piel
                // ID 11
                $necesidad_piel_piel_sensible = "Dinos, ¿qué necesitas?
                <div class=\"flex-answer-buttons\">
                <a class=\"answers-button\" href=\"results.php?q=111\">Quiero verme más joven </a>
                <a class=\"answers-button\" href=\"results.php?q=112\">Cuidar y mimar mis manos</a> 
                <a class=\"answers-button\" href=\"results.php?q=113\">Reparar y reafirmar</a>
                <a class=\"answers-button\" href=\"results.php?q=114\">Cuidar mis manos, nutrir i reafirmar</a> </div>";

                // Piel sensible rejuvenecer
                $necesidad_piel_piel_sensible_precio = "¿Cúal es tu presupuesto?
                <form action = \" method=\"get\" >
                <input name=\"price\">
                <a class=\"answers-button\" href=\"results.html\">Acabemos</a>
                </div>";
 
                //Printar les preguntes
                switch ($q) {
                    case 0: echo $pregunta_entrada; break;
                    case 1: echo $tipos_piel_2_piel; break;
                    case 11: echo $necesidad_piel_piel_sensible; break;
                    //case 111: echo $necesidad_piel_piel_sensible_precio; break;
                    case 2: echo $tipos_pelo; break;
                    default: echo "Ha habido un problema";
                }

                // Cerrar caja de las preguntas
                echo "</div>
                </div>";

                $page = "QA";
                $q = $_GET['q'];

                if ($q > 100) {
                    $q = $q - ( $q % 10);
                    $q = $q / 10;
                    $q = "?q=".$q;
                } elseif ($q > 10) {
                    $q = $q - ( $q % 10);
                    $q = $q / 10;
                    $q = "?q=".$q;
                } else if ($q <= 4 && $q >= 1) {
                    $q = 0;
                    $q = "?q=".$q;
                } else if ($q == 0) {
                    $q = "";
                    $page = "index";
                }

           

                /*echo "<div class=\"for-back-button\">
                <form action=localhost/QA{$q}.php
                    <input type=\"submit\" value=\"Ir atrás\" src=\"resources/back-icon.png\"/>
                </form>
                </div>";*/

                /*echo "<div class=\"for-back-button\">
                <input type=\"image\" src=\"resources/back-icon.png\" />
                </div>";*/
                echo "<a href=\"/{$page}.php{$q}\"><img src = \"resources/back-icon.png\"
                alt=\"Index\"> </a>";

                

            ?>

            
        <?php
            
            
            
        ?>
    </body>
</html>
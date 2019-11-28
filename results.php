<!DOCTYPE html>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/estils.css" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>IPO - Tus productos</title> 
    </head>
 
    <body>
        <a href=index.php><img src = "resources/FreshFinder_logo_white.png"
                alt="Inicio"> </a>
        <div class="flex-help-buttons">
            <a class="HelpButton" href="https://www.freshlycosmetics.com/es/contacta">Ayuda</a>
            <a class="HelpButton" href="https://www.freshlycosmetics.com/es/productos/">Ver todo el catálogo</a>
        </div> 
        <div class="products-list">
            
            <?php

            // ID de la pregunta     
            $q = $_GET['q'];


            // migas de pan

                $migas = array(0 => "", 1 => "", 2 => "");
                $address = array(0 => "0", 1 => "", 2 => "", 3 => "");

                //$lista = array ($agua_micelar_green, $blue_radiance_enzymatic_serum);

                
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
                    echo " > ";
                    echo "<a href=\"QA.php?q=$address[1]\">$migas[1]</a>";
                }
                if ($q > 100) {
                    echo " > ";
                    echo "<a href=\"QA.php?q=$address[2]\">$migas[2]</a>";
                    //echo "<a href=\"QA.php?q=$address[1]\">$migas[1]</a>";
                }

            // Definición del struct
            class Product {
                public $name;
                public $descr_sort;
                public $description;
                public $price;
                public $guia_uso;
                public $funcion;
                public $stars;
                public $imagen;
                public $prioridad;
                public $enlace_freshly;
            }

            // Productos
            $agua_micelar_green = new Product();
            $agua_micelar_green->name = "Agua Micelar Fresh Green";
            $agua_micelar_green->descr_sort = "Limpia y desmaquilla tu piel 
            eficazmente con la tecnología green de Freshly Cosmetics. El 
            Agua Micelar Fresh Green con micelas naturales retira todas las 
            impurezas y trazas de maquillaje de una forma suave";
            $agua_micelar_green->description = "Limpia y desmaquilla tu piel 
            eficazmente con la tecnología green de Freshly Cosmetics. El 
            Agua Micelar Fresh Green con micelas naturales retira todas las 
            impurezas y trazas de maquillaje de una forma suave, respetando la 
            barrera dérmica. Su agua vegetal ecológica de aloe vera y manzana verde 
            actúa como bioestimulante de la regeneración celular y detoxifica la piel.\n
            Esta fórmula saludable cuenta además con la potente acción de los extractos d
            e ginkgo biloba, pepino y agastache mexicana que actúan sinérgicamente para 
            reducir la inflamación, el estrés cutáneo y las rojeces. Y por si fuera poco, 
            añadimos un extraordinario complejo de 7 plantas con propiedades seboreguladoras, 
            equilibrantes y antiinflamatorias. Este agua micelar es apta para todo tipo de pieles, 
            incluso las más sensibles. ¡Te encantará su perfume fresco de manzana verde!
            Perfume natural. Si te encanta el perfume del tónico facial purificante, 
            ésta será tu perdición, fresco y revitalizante a manzana verde.";
            $agua_micelar_green->price = 28.0;
            $agua_micelar_green->guia_uso = "Pontelo en la cara";
            $agua_micelar_green->funcion = 111;
            $agua_micelar_green->stars = 4;
            $agua_micelar_green->imagen = "resources/agua-micelar-natural-detox.jpg";
            $agua_micelar_green->prioridad = 4;
            $agua_micelar_green->enlace_freshly = "https://www.freshlycosmetics.com/es/productos/agua-micelar-natural-detox";
        
            $blue_radiance_enzymatic_serum = new Product();
            $blue_radiance_enzymatic_serum->name = "Blue Radiance Enzymatic Serum";
            $blue_radiance_enzymatic_serum->descr_sort = "Renueva extraordinariamente la piel desde la primera aplicación, 
            este sérum facial exfoliante incorpora la máxima concentración de 12 tecnologías naturales ";
            $blue_radiance_enzymatic_serum->price = 35.0;
            $blue_radiance_enzymatic_serum->guia_uso = "nada";
            $blue_radiance_enzymatic_serum->funcion = 111;
            $blue_radiance_enzymatic_serum->stars = 0;
            $blue_radiance_enzymatic_serum->imagen = "/resources/serum-exfoliante-enzimatico-natural.jpg";
            $blue_radiance_enzymatic_serum->prioritat = 0;
            $blue_radiance_enzymatic_serum->enlace_freshly = "https://www.freshlycosmetics.com/es/productos/serum-exfoliante-enzimatico-natural";

            $lista = array ($agua_micelar_green, $blue_radiance_enzymatic_serum);
    

            $p = 100000000;

            $prior = 0;
            while ($prior < 5) {
                foreach ($lista as $prod){
                    if ($prod->prioridad == $prior) {
                        if ($prod->funcion == $q) {
                            if ($prod->price <= $p) {
                                echo "<div class=\"product-view\">
                                        <img src={$prod->imagen} />
                                    <div class=\"description-label\">
                                        <h3>{$prod->name}</h3>";
                                
                                echo "       <p>{$prod->descr_sort}</p>
                                            <p> Esto se usa una vez a la semanda durnate tres meses.
                                            Aplicar con un masaje suave al pelo y dejar secar 2 horas</p>";
                                echo " <div class=\"store-buttons\">
                                            <p class=\"price\">{$prod->price} €</p>
                                            <a href={$prod->enlace_freshly} class=\"view-button\">COMPRAR</a> 
                                            <a class=\"view-button\">COMPARTIR</a> 
                                        </div>
                                    </div>
                                </div>";
                            }
                        }
                    }
                }
                $prior = $prior + 1;
            }



            echo "<a href=\"/QA.php?q={$q}\"><img src = \"resources/back-icon.png\"
                alt=\"Index\"> </a>";

            
            ?>
        </div>
    </body>
</html>
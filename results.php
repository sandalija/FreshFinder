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
                    case 112: $migas[0] = "Tratamiento de piel";
                        $migas[1] = "Grasa"; 
                        $address[1] = "1";
                        $migas[2] = "Nutrir, tonificar y reafirmar"; 
                        $address[2] = "11";
                        break;
                    case 113: $migas[0] = "Tratamiento de piel";
                        $migas[1] = "Grasa"; 
                        $address[1] = "1";
                        $migas[2] = "Higiene personal"; 
                        $address[2] = "11";
                        break;
                    case 114: $migas[0] = "Tratamiento de piel";
                        $migas[1] = "Grasa"; 
                        $address[1] = "1";
                        $migas[2] = "Cuidar las manos"; 
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
            $agua_micelar_green->funcion = array (113,4);
            $agua_micelar_green->stars = 4;
            $agua_micelar_green->imagen = "resources/agua-micelar-natural-detox.jpg";
            $agua_micelar_green->enlace_freshly = "https://www.freshlycosmetics.com/es/productos/agua-micelar-natural-detox";
        
            $blue_radiance_enzymatic_serum = new Product();
            $blue_radiance_enzymatic_serum->name = "Blue Radiance Enzymatic Serum";
            $blue_radiance_enzymatic_serum->descr_sort = "Renueva extraordinariamente la piel desde la primera aplicación, 
            este sérum facial exfoliante incorpora la máxima concentración de 12 tecnologías naturales ";
            $blue_radiance_enzymatic_serum->price = 35.0;
            $blue_radiance_enzymatic_serum->guia_uso = "nada";
            $blue_radiance_enzymatic_serum->funcion = array (111,1);
            $blue_radiance_enzymatic_serum->stars = 0;
            $blue_radiance_enzymatic_serum->imagen = "/resources/serum-exfoliante-enzimatico-natural.jpg";
            $blue_radiance_enzymatic_serum->enlace_freshly = "https://www.freshlycosmetics.com/es/productos/serum-exfoliante-enzimatico-natural";
            
            $pro_repair_manos = new Product();
            $pro_repair_manos->name = "Tratamiento Pro-Repair de Manos y U�as";
            $pro_repair_manos->descr_sort = "Esta crema de manos mejora la hidrataci�n, 
                   firmeza, elasticidad, luminosidad y suavidad de las manos y fortalece 
                   la queratinizaci�n de las u�as.";
             $pro_repair_manos->description = "Esta crema de manos mejora la hidrataci�n, firmeza, elasticidad, luminosidad y 
                   suavidad de las manos y fortalece la queratinizaci�n de las u�as. Su tecnolog�a natural de hidrataci�n combina 
                    un potente complejo de plantas xer�fitas y �cido hialur�nico vegano que mejoran la retenci�n de agua en la piel, 
                    hidratando y reparando las manos secas y agrietadas. Adem�s, incorpora un concentrado de extracto de arroz que 
                    incrementa la formaci�n de queratina y promueve el crecimiento de las u�as. Su formulaci�n aporta una elevada 
                    hidrataci�n con aceites vegetales nutritivos como la manteca de karit�, la manteca de algod�n y el aceite de aguacate.
                    �Su perfume a melocot�n y manzana har� que la quieras llevar contigo a todos lados!";
             $pro_repair_manos->price = 14.00;
            $pro_repair_manos->guia_uso = "Pontelo en las manos.";
            $pro_repair_manos->funcion = array (114,0);
            $pro_repair_manos->stars = 4;
            $pro_repair_manos->imagen = "resources/tratamiento-crema-manos-natural.jpg";
            $pro_repair_manos->enlace_freshly = "https://www.freshlycosmetics.com/es/productos/tratamiento-crema-manos-natural";
            
              $gel_ducha_detox = new Product();
            $gel_ducha_detox->name = "Gel De Ducha Nutritivo Detox";
            $gel_ducha_detox->descr_sort = "El gel de ducha natural que limpiar� tu piel de forma suave respetando la barrera d�rmica.";
             $gel_ducha_detox->description = "El gel de ducha natural que limpiar� tu piel de forma suave respetando la barrera d�rmica. El Gel de Ducha Nutritivo contiene s�lo tensioactivos naturales suaves derivados del coco que generan una espuma cremosa . Esta f�rmula saludable restablecer� las funciones de la piel mediante la acci�n nutritiva e hidratante del aceite de almendras y el aceite de aguacate. Adem�s, incorpora una concentraci�n excepcional de aloe vera y avena que act�an reduciendo las irritaciones y calmando la piel. �Su perfume c�trico energizante ser� un imprescindible en cada ducha!";
             $gel_ducha_detox->price = 12.00;
           $gel_ducha_detox->guia_uso = "Pontelo en el cuerpo.";
           $gel_ducha_detox->funcion = array (113,0);
            $gel_ducha_detox->stars = 4;
           $gel_ducha_detox->imagen = "resources/gel-ducha-natural-detox.jpg";
            $gel_ducha_detox->enlace_freshly = "https://www.freshlycosmetics.com/es/productos/gel-ducha-natural-detox";

            $body_flame_firming = new Product();
           $body_flame_firming->name = "Body Flame Firming Cream";
            $body_flame_firming->descr_sort = "Reafirma, tonifica e hidrata tu piel con la Body Flame Firming Cream.";
            $body_flame_firming->description = "Reafirma, tonifica e hidrata tu piel con la Body Flame Firming Cream. Esta innovadora crema corporal reafirmante de r�pida absorci�n, combina el potente activo dragon's eye y un concentrado de cafe�na natural, ingredientes naturales clave para lograr un notable efecto reductor en la piel. Incluye una elevada concentraci�n de los activos naturales m�s potentes para estimular la combusti�n de grasa y aumentar la tersura de la piel, reafirmando los tejidos. Su innovadora f�rmula incorpora un complejo de 7 plantas de alto poder hidratante y anti celul�tico, como es la hiedra, el naranjo y la centella asi�tica, que junto a los extractos de jengibre, pepino y alga fucus estimulan la eliminaci�n de toxinas. Sumando a esta crema corporal reafirmante un importante poder antioxidante y detox. ";
            $body_flame_firming->price = 26.00;
           $body_flame_firming->guia_uso = "Pontelo en el cuerpo.";
           $body_flame_firming->funcion = array (111,0,112,0);
            $body_flame_firming->stars = 4;
           $body_flame_firming->imagen = "resources/crema-reafirmante-natural-detox.jpg";
            $body_flame_firming->enlace_freshly = "https://www.freshlycosmetics.com/es/productos/crema-reafirmante-natural-detox";
            
           
            $lista = array ($agua_micelar_green, $blue_radiance_enzymatic_serum, $pro_repair_manos,$gel_ducha_detox,$body_flame_firming);
    

            $prior = 0;
            while ($prior < 5) {
                foreach ($lista as $prod){
                    if (in_array($q, $prod->funcion)) {
                        $pos = array_search($q, $prod->funcion)+1;
                        if ($prod->funcion[$pos] == $prior) {
                            echo "<div class=\"product-view\">
                                    <img src={$prod->imagen} />
                                <div class=\"description-label\">
                                    <h3>{$prod->name}</h3>";
                            echo "       <p>{$prod->descr_sort}</p>
                                        <p>MODO DE EMPLEO: {$prod->guia_uso}</p>";
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
                $prior = $prior + 1;
            }



            echo "<a href=\"/QA.php?q={$q}\"><img src = \"resources/back-icon.png\"
                alt=\"Index\"> </a>";

            
            ?>
        </div>
    </body>
</html>
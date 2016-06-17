<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
            // Variáveis
            $ola = "Hello";
            $mundo = "world";
            const nome = "Ingrid";
            $frase = "<p>$ola, $mundo! My name is " . nome . ".</p>";

            $comprimento = "<p>" . strlen($frase) . "</p>";
            $posicao = "<p>" . strpos($frase, "Ingrid") . "</p>";

            echo $frase;
            echo $comprimento;
            echo $posicao;

            $cores[0] = "preto";
            $cores[1] = "branco";
            $cores[2] = "azul";
            $cores[3] = "verde";
            $cores[4] = "vermelho";

            sort($cores);

            foreach($cores as $indice=>$cor) {
                echo "<p>Cor $indice: $cor</p>";
            }

            $bebidas["Cerveja"] = 3;
            $bebidas["vinho"] = 10;
            $bebidas['refri'] = 2;
            asort($bebidas);

            $marcas = array("Apple"=>"iphone", "Google"=>"android", "Microsoft"=>"WP");
            $tamanho = count($marcas);
            echo "<p>$tamanho</p>";

            // print_r($_SERVER);
        ?>
    </body>
</html>

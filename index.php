<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP - OO</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta("BIC", "AZUL", 0.7);
            $c2 = new Caneta("COMPACTOR", "PRETA", 0.5);
            $c1->cor = "Azul";
           // $c1->modelo = "Compactor";
            $c1->setModelo("BIC");
            $c1->setPonta(0.7);
            //$c1->ponta = 0.5;
            //$c1->tampada = true;
            //$c1->destampar();

            $c1->rabiscar();
            echo '<br><br>';

            var_dump($c1);
            echo '<br><br>';

            print_r($c1);
            echo '<br><br>';

            print "I have a Pencil {$c1->getModelo()} of tip {$c1->getPonta()}";
            echo '<br><br>';
            print "Now I have a Pencil {$c2->getModelo()} of tip {$c2->getPonta()}";
            echo '<br><br>';
        ?>
        </pre>
    </body>

</html>
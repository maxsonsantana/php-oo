<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP - OO</title>
    </head>
    <body>
        <?php
            require_once 'Caneta.php';
            $c1 = new Caneta;
            $c1->cor = "Azul";
            //$c1->ponta = 0.5;
            //$c1->tampada = true;
            //$c1->destampar();

            $c1->rabiscar();
            echo '<br><br>';

            var_dump($c1);
            echo '<br><br>';

            print_r($c1);
            echo '<br><br>';
        ?>
    </body>

</html>
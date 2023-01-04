<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP - OO</title>
    </head>
    <body>
        <pre>
        <?php
            require_once 'Caneta.php';
            require_once 'ContaBanco.php';
            require_once 'ControleRemoto.php';
            require_once 'Uec.php';
                        
            $c1 = new Caneta("BIC", "AZUL", 0.7);
            $c2 = new Caneta("COMPACTOR", "PRETA", 0.5);
            $c1->cor = "Azul";
            $c1->setModelo("BIC");
            $c1->setPonta(0.7);
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

            echo '<br>-------------------------------------------CONTA BANCARIA-------------------------------------------<br>';

            $p1 = new ContaBanco();//Tião
            $p2 = new ContaBanco();//Bizantina

            $p1->abrirConta("CC");           
            $p1->setDono("Tião");
            $p1->setNumConta(111);
            $p1->depositar(300);
            $p1->sacar(1000);
            $p1->pagarMensalidade();
            // $p1->sacar(338);
            //$p1->fecharConta();

            $p2->abrirConta("CP");
            $p2->setDono("Bizantina");
            $p2->setNumConta(222);
            $p2->depositar(500);
            $p2->sacar(120);
            $p2->pagarMensalidade();
            //$p2->sacar(510);
            //$p2->fecharConta();

            print_r($p1);
            print_r($p2);

            echo '<br>-------------------------------------------INTERFACE-------------------------------------------<br>';
            echo'<h1>Controle Remoto</h1><br>';
            $c = new ControleRemoto();
            $c->ligar();
            $c->abrirMenu();
            $c->menosVolume();
            $c->menosVolume();
            $c->menosVolume();
            $c->abrirMenu();

            echo '<br>-------------------------------------------RELACIONAMENTO DE CLASSES-------------------------------------------<br>';
            echo'<h1>UEC</h1><br>';
            
            
            $l = array();
            $l[0] = new Uec('Anderson Silva', 'Brasil', 31, 1.75, 68.5, 11, 7, 3);
            $l[0]->status();
            $l[1] = new Uec('Seu Madruga', 'México', 32, 1.75, 40, 4, 15, 1);
            $l[1]->status();
            $l[1]->apresentar();
            $l[1]->ganharLuta();
            $l[1]->status();
            $l[2] = new Uec('Popó', 'Brasil', 30, 1.60, 20, 2, 20, 2);
            $l[2]->status();
            $l[2]->apresentar();
            $l[2]->ganharLuta();

            echo '<br>-------------------------------------------Luta-------------------------------------------<br>';
            echo'<h1>Luta</h1><br>';
            require_once 'Luta.php';
            $UEC01 = new Luta();
            
            $UEC01->marcarLuta($l[1], $l[2]);
            $UEC01->lutar();
        ?>
        </pre>
    </body>

</html>
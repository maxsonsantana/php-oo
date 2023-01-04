<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Pessoa.php';
                require_once 'Aluno.php';
                require_once 'Professor.php';
                require_once 'Funcionario.php';

                $p1 = new Pessoa();
                $p2 = new Aluno();
                $p3 = new Professor();
                $p4 = new Funcionario();

                $p1->setNome("Cleosvaldo Nascimento");
                $p2->setNome("Ibirajara Kaetano");
                $p3->setNome("Tyão de Alburqueque");
                $p4->setNome("Bizantina Silva");

                print_r($p1);
                print_r($p2);
                print_r($p3);
                print_r($p4);

            ?>
        </pre>
    </body>
</html>

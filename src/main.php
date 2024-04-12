
<?php 

    include("./../vendor/autoload.php");
    use app\model\Sistemausuario;
    use app\persistemce\conectionfact;


    $conn = conectionfact::getconectio();
    echo print_r($conn, true);

    ?>
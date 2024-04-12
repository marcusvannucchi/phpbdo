
<?php 

    include("./../vendor/autoload.php");
    use app\model\Sistemausuario;
    use app\persistence\conectionfact;

    if($conn = conectionfact::getconectio()){

        try{

            $sql = "select * from Tbalunos";

            $statement = $conn->prepare($sql);

            $statement->execute();

            $rs = $statement->fetchAll(PDO::FETCH_ASSOC);
 
            foreach($rs as $registro){

                echo print_r($registro['nome'] ." ". $registro['ra'] . " " . $registro ["cpf"] ."<br>", true);

            }

        } catch(Exception $e){

            echo print_r($e, true);

        }

    }else{

        echo "Não Funcionou!";

    }

    ?>
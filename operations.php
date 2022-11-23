<?php 
require_once ("PDO.php");

$q = $_REQUEST["q"];

$pdo = new usePDO();
$pdo->createDB();
$pdo->createTable();

switch ($q) {
    case "readPC":
    	$result = $pdo->select("SELECT * FROM PC");
		print(json_encode($result->fetchAll()));
        break;
    case "update":
    	$id = $_REQUEST["id"];
    	$Gabinete = $_REQUEST["Gabinete"];
    	$Monitor = $_REQUEST["Monitor"];
    	$Perifi = $_REQUEST["Perifi"];
    	$Tipo_do_PC = $_REQUEST["Tipo_do_PC"];
    	$result = $pdo->update("UPDATE PC SET Gabinete='$Gabinete', Monitor='$Monitor', Perifi='$Perifi', Tipo_do_PC='$Tipo_do_PC' WHERE id='$id'");
        echo "Registro id $id atualizado com sucesso";
        break;
    case "insert":
		$Gabinete = $_REQUEST["Gabinete"];
    	$Monitor = $_REQUEST["Monitor"];
    	$Perifi = $_REQUEST["Perifi"];
    	$Tipo_do_PC = $_REQUEST["Tipo_do_PC"];
    	$message = $pdo->insert("INSERT INTO PC (Gabinete, Monitor, Perifi, Tipo_do_PC, endereco, usuario, senha) 
    		VALUES ('$Gabinete', $Monitor, '$Perifi', '$Tipo_do_PC', 'jose_vieira','".sha1(456789)."')");
    		//outros campos são ficticios somente para evitarmos de redesenhar o banco 

        if ($message != NULL) {
            //var_dump($message);
            header("location: inserir.php?mensagem=$message");
        }else{
            header("location: inserir.php?mensagem=Registro inserido com sucesso");
        }
        break;
    case "delete":
    	$id = $_REQUEST["id"];
    	$pdo->delete("DELETE FROM PC WHERE id='$id'");
    	echo "Registro deletado com sucesso";
    	break;
}

?>
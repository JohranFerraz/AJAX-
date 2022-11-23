<?php  

require_once "PDO.php";

$pdo = new usePDO();



$pdo->insert("INSERT INTO PC (Gabinete, Monitor, Perifi, Tipo_do_PC, usuario, senha)
VALUES ('Plichau', 22, 'Mouse + teclado', 'Desmontado', 'cpelegrin','".sha1(123456)."')");

$pdo->insert("INSERT INTO PC (Gabinete, Monitor, Perifi, Tipo_do_PC, usuario, senha)
VALUES ('Redragon', 50, 'Mouse + teclado', 'Montado', 'joao12','".sha1(654321)."')");

$pdo->insert("INSERT INTO PC (Gabinete, Monitor, Perifi, Tipo_do_PC, usuario, senha)
VALUES ('Rise Mode', 35, 'Mouse', 'Desmontado', 'rua B no 02','".sha1(456789)."')");

$pdo->insert("INSERT INTO PC (Gabinete, Monitor, Perifi, Tipo_do_PC, usuario, senha)
VALUES ('BPC-C3147', 40, 'Mouse', 'Montado', 'rua A no 02','".sha1(987654)."')") ;

$pdo->insert("INSERT INTO PC (Gabinete, Monitor, Perifi, Tipo_do_PC, usuario, senha)
VALUES ('Redragon', 20, 'Mouse + teclado', 'Desmontado', 'mila123','".sha1(123789)."')");

$pdo->insert("INSERT INTO PC (Gabinete, Monitor, Perifi, Tipo_do_PC, usuario, senha)
VALUES ('Rise Mode', 30, 'Teclado', 'Montado', 'julinha2016','".sha1(987321)."')");

$pdo->insert("INSERT INTO PC (Gabinete, Monitor, Perifi, Tipo_do_PC, usuario, senha)
VALUES ('Redragon', 80, 'Mouse + teclado', 'Desmontado', 'jonas','".sha1(951357)."')");

$pdo->insert("INSERT INTO PC (Gabinete, Monitor, Perifi, Tipo_do_PC, usuario, senha)
VALUES ('Plichau', 22, 'Teclado', 'Montado', 'ana','".sha1(753159)."')") ;

$pdo->insert("INSERT INTO PC (Gabinete, Monitor, Perifi, Tipo_do_PC, usuario, senha)
VALUES ('Redragon', 30, 'Mouse + teclado', 'Proto', 'sergio','".sha1(357951)."')");

$pdo->insert("INSERT INTO PC (Gabinete, Monitor, Perifi, Tipo_do_PC, usuario, senha)
VALUES ('Plichau', 19, 'Teclado', 'Pronto','cleide','".sha1(159357)."')");

echo "<br>Dados inseridos com sucesso!<br>"

?>
<?php

$string_conexao =

"pgsql:host=localhost; port=5432;

dbname=php; user=postgres; password=postgres";

$conn = new PDO($string_conexao);

if (!$conn) {

echo "Não conectado";

exit;

}$varSQL =



"SELECT id,titulo, descricao FROM cursos";



$select = $conn->query($varSQL);

while ( $linha = $select->fetch() ){

echo "ID: ".$linha['id']."<br>";
echo "Título: ".$linha['titulo']."<br>";
echo "Descrição: ".$linha['descricao']."<br>"."<br>";
}   
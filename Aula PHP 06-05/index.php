<?php

echo "

       <form method='GET' name='form' action='conexao.php'>

       <label for='idprod'>Cod Produto</label>

       <input type='number' name='idprod'><br>

       <label for='descricao'>Descrição</label>

       <input type='text' name='descricao'><br>

       <label for='anoprod'>Ano Lancamento</label>

       <input type='text' name = 'anoprod'><br>

       <button type='submit'>Enviar dados</button>

       </form>";

       if( $_GET)

       {

           $idprod = $_GET['idprod'];

           $descricao = $_GET['descricao'];

           $anoprod = $_GET['anoprod'];

           echo "Cod Produto: $idprod <br>";

           echo "Descrição: $descricao <br>";

           echo "Ano Lancamento: $anoprod <br>";

       }

       else

       {

           echo "Nenhum dado foi enviado.";

       }

?>
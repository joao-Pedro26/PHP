<?php 
        function conecta ($params = "")
        {
            if ($params == "") 
            {
                $params = "pgsql:host=localhost; port=5432; dbname=php; user=postgres; password=postgres";
            }

            try 
            {
                $conn = new PDO($params);
                return $conn;
            } 
            catch (PDOException $e) 
            {
                echo "Não foi possivel conectar  ";
            }
        
        }


?>
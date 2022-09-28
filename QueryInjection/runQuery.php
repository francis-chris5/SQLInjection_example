<?php
    require_once("connectionDetails.php");

    $query = $_REQUEST['query'];

    try{
        $conn = new PDO("mysql:host=$DBHost;dbname=$DBName", $DBUsername, $DBPassword);
        $select = $conn->prepare($query);
        $select->execute();
        $data = $select->fetchAll(PDO::FETCH_ASSOC);

       echo "<table border='1'>";
        echo "<tr class='tableHeaders'>";
        for($i = 0; $i < $select->columnCount(); $i++){
            echo "<td>".$select->getColumnMeta($i)['name']."</td>";
        }
        echo "</tr>";

       foreach($data as $row){
            echo "<tr>";
            foreach($row as $item){
                echo "<td>".$item."</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
		
        $conn = null;
    }
    catch(PDOException $e){
        echo "could not query database: ".$e->getMessage();
    }
?>
<?php
    require("./connection.php");  
    $sql = " select * from computer";

    $rs = $con->query($sql);
    if($rs==false){
        die("sql error".$con->error."<br/>".$sql);
    }

    $vet=array();
    
        while($record = $rs->fetch_assoc()){
            array_push($vet, $record);  //fifo gestisce un vettore

    }

    $json = json_encode($vet);
    
?>

<html>
    <head>
            
	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="Lepre">
		
		<title>Tabella Bootstrap delle persone </title>
		<link href="..vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="..css/custom.css" rel="stylesheet">
		<script href="vendor/bootstrap/js/bootstrap.js"></script>
		<script type="application/javascript" src="js/script.js"></script>
		<script type="application/javascript" src="vendor/jquery/jquery-3.4.1.js"></script>
	
    </head>
    <body>
            
            <div class="container-fluid">
                
                <div class="row">
                    
                    <div class="col-sm-8 pink">
                        <table class="table table-hover" id="tabellaPersone" >
                            
                            <thead> <center>Computer</center></thead>
                        
                            <tr>
                                
                                <th>id</th>
                                <th>marcaTatiera</th>
                                <th>marcaMonitor</th>
                                <th>marcaCase</th>
                            
                            </tr>

                            <?php

                            foreach($vet as $key=>$value){
                                echo "<tr>";
                                foreach($value as $chiave=>$valore){
                                    echo "<td>$valore</td>";
                                }
                                echo "</tr>";
                            }
    
                            ?>

                         
                        
                        </table>
                    </div>    
    
                    
                </div>
                
                
            </div>
    </body>
    
    
</html>


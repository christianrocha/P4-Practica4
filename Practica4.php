<html>
    <head>
	<title>Practica 4 PHP</title>
	</head>
    <body>
	    <h1>10 paises con 5 ciudades cada uno</h1>          		
        <?php
		    $pais = array();
            $pais["M&eacute;xico"] = array("Guadalajara","Monterrey","Michoacan","Zacatecas","Colima");	
            $pais["Espa&ntilde;a"] = array("Madrid","Barcelona","Bilbao","Alicante","Valencia");
			$pais["Italia"] = array("Roma","Venecia","Florencia","Milan","Pisa");
			$pais["Jap&oacute;n"] = array("Kioto","Tokio","Osaka","Hiroshima","Sapporo");
			$pais["Brasil"] = array("Rio de Janeiro","Fortaleza","Puerto Alegre","San Vicente","Sao Paulo");
			$pais["Australia"] = array("Sydney","Melbourne","Tasmania","Queensland","Adelaide");
			$pais["Inglaterra"] = array("Cambridge","Londres","Hampshire","Buckingham","Manchester");
			$pais["Estados Unidos"] = array("Arizona","California","Washington","Texas","Nueva York");
			$pais["Argentina"] = array("Buenos Aires","C&oacute;rdoba","La Pampa","Santa Fe","La Rioja");
			$pais["Francia"] = array("Alsacia","C&oacute;rcega","Lemos&iacute;n","Borgo&ntilde;a","Provenza");
                echo "<ul>";
                foreach($pais as $nombre => $ciudades){
				    echo "<h3><li>".$nombre."</h3><ul>";
					foreach($ciudades as $ciudad){
					echo "<li>".$ciudad."</li>";
					}					
                echo "</ul></li>";				
				}
        ?>          	
    </body>	
</html>
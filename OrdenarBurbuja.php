<!DOCTYPE html>
<html>
<head>
	<title>Ordenamiento Burbuja</title>
</head>
<body>
<?php
function imprime($vector){
		for($i=0;$i<count($vector);$i++){
		echo $vector[$i]."<br/>";
		}}
	$vector = array(5,7,3,2,1,4,6);
	imprime($vector);
	echo "Ordenadar Ascendente<br/>	";
	burbujaAsc($vector);
	echo "Ordenadar Descendente<br/>	";
	burbujaDesc($vector);
	//Este solo es un comentario
	function burbujaAsc($vector){
		$temp=0;
		$n=count($vector);
		for($i=0;$i<$n;$i++){
			for($j=0;$j<$n-1;$j++){
				//if($j+1!=$n){
					if($vector[$j]>$vector[$j+1]){
						$temp=$vector[$j];
						$vector[$j]=$vector[$j+1];
						$vector[$j+1]=$temp;
					}
				//}
				
			}
			
		}
		
		

		imprime ($vector);
	}
	function burbujaDesc($vector){
		$temp=0;
		$n=count($vector);
		for($i=0;$i<$n;$i++){
			for($j=0;$j<$n-1;$j++){
				if($j+1!=$n){
					if($vector[$j]<$vector[$j+1]){
						$temp=$vector[$j];
						$vector[$j]=$vector[$j+1];
						$vector[$j+1]=$temp;
					}
				}
				
			}
			
		}
	}
	imprime($vector);

?>
</body>
</html>
<?php

$dominios = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
//$dominios = array('a', 'd','e', 'h','i' ,'l','m','n','o','p','q','r','s','t','u','v','w');

echo "<pre><br />DOMINIOS DO ARQUIVO dominios.txt<br />"; print_r($dominios); echo "</pre>";


$cont = 0;
$size = count($dominios);
for($i=0;$i<$size;$i++){

	for($j=0;$j<$size;$j++){

		echo $dominios[$i].' '.$dominios[$j].' &nbsp; &nbsp; ';
		$cont++;
	}

	echo '<br />';
}

echo '<br /><br />'.$cont.'<br /><br />';


//-----------------------------------------------------------------


$cont = 0;
for($i=0;$i<$size;$i++){

	for($j=0;$j<$size;$j++){
	
		for($k=0;$k<$size;$k++){

			//if($dominios[$i]=='r' && $dominios[$j]=='c' ){
			echo $dominios[$i].' '.$dominios[$j].' '.$dominios[$k].' &nbsp; &nbsp; ';
			$cont++;
			//}
		}
		echo '<br />';
	}
		echo '<br /><br />';
}
echo '<br /><br />'.$cont.'<br /><br />';

?>
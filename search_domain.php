<?php
/*
 * OBS : O servidor aceita 300 pesquisas por vez, e por minuto
	mas depois de consultar umas 1000 pesquisas ele me bloqueou por algumas horas
*/


//RegistrosBR--------------------------------------------------------
	require "php/Avail.php";
	function check_domain_availability($fqdn, $parameters) {
		$client = new AvailClient();
		$client->setParam($parameters);
		$response = $client->send_query($fqdn);
		return $response;
	}
	$atrib = array(
		"lang"        => 1, # EN = 0 (PT = 1)
		"server"      => SERVER_ADDR,
		"port"        => SERVER_PORT,
		"cookie_file" => COOKIE_FILE,
		"ip"          => "",
		"suggest"     => 0, # Zero is No domain suggestions
	);
//RegistrosBR--------------------------------------------------------
	

	$ponteiro = fopen ('./domain.txt',"r");
	$dominios = array();//cria array

	while (!feof ($ponteiro)) {
		$linha = fgets($ponteiro, 4096);
		if(strlen($linha)>3){
		array_push($dominios, $linha);//add array
		
//RegistrosBR--------------------------------------------------------
		$fqdn = $linha;		//$fqdn = "www.woq.com.br";
		$domain_info = check_domain_availability($fqdn, $atrib);

		echo "------------------------------------------ <br />";
		echo nl2br($domain_info);
		
//RegistrosBR--------------------------------------------------------

		}
	}

	echo "<br /><br /><br /><pre>DOMINIOS DO ARQUIVO dominios.txt<br />"; print_r($dominios); echo "</pre>";
	fclose ($ponteiro);
	
	
	
?>
<?php
	$pos = $_POST['pos'];

	if(strtoupper($pos) == 'Ponta de Lança'){
		$nome = array("Purovic","Klose","Macheda","Betinho","Di Natale");
	}

	if(strtoupper($pos) == 'Extremo'){
		$nome = array("Ronaldinho","Pizzaro","Reyes","Mauri","Simão");
	}

	if(strtoupper($pos) == 'Medio'){
		$nome = array("Muntari","Carlos","Molina","Allef","Osman");
	}

	if(strtoupper($pos) == 'Defesa Lateral'){
		$nome = array("Maicon","Melgarejo","Augusto","Joãozinho","Lion");
	}
    if(strtoupper($pos) == 'Defesa Central'){
		$nome = array("Cáceres","Poyet","Carvalho","Coulibaly","Oscar");
	}

	echo json_encode($nome);
?>
<?php 
	$idioma = '';
		//echo "<script>alert(".is_null($idioma).")</script>";
		if(!array_key_exists('lang',$_GET))
			$idioma = 'ES';
		else $idioma = $_GET["lang"];
	
	switch ($idioma) {
						
		case 'ES':
			define('boton_ver_mas', 'Ver más');
			define('boton_busqueda_principal', 'Buscar');
			define('label_bienvenido', 'Bienvenido a nuestra agencia!');
			break;
						
		case 'EN':
			define('boton_ver_mas', 'View');
			define('boton_busqueda_principal', 'Search');
			define('label_bienvenido', 'Welcome to our travel agency!');

			break;
					}

 ?>
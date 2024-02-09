<?php 

$page = '';
if(isset($_GET['page'])){
	$page = $_GET['page'];
}

switch ($page) {



	// Link Pasiente 
	case 'pasiente':
	$title = 'DADUS PASIENTE';
	$page = "include 'database/master/pasiente/index.php';";
	break;
	case 'hamosPasiente':
	$title = 'HAMOS DADUS PASIENTE';
	$page = "include 'database/master/pasiente/hamos.php';";
	break;
	case 'hadiaPasiente':
	$title = 'HADIA DADUS PASIENTE';
	$page = "include 'database/master/pasiente/hadia.php';";
	break;
	case 'aumentaPasiente':
	$title = 'AUMETA DADUS PASIENTE';
	$page = "include 'database/master/pasiente/aumenta.php';";
	break;
		// Akhir Link Pasiente

	// Link Moras 
	case 'moras':
	$title = 'DADUS MORAS';
	$page = "include 'database/master/moras/index.php';";
	break;
	case 'hamosMoras':
	$title = 'HAMOS DADUS MORAS';
	$page = "include 'database/master/moras/hamos.php';";
	break;
	case 'hadiaMoras':
	$title = 'HADIA DADUS MORAS';
	$page = "include 'database/master/moras/hadia.php';";
	break;
	case 'aumentaMoras':
	$title = 'AUMETA DADUS MORAS';
	$page = "include 'database/master/moras/aumenta.php';";
	break;
		// Akhir Link Moras

	// Link Klasifikasaun 
	case 'klasifikasaun':
	$title = 'DADUS KLASIFIKASAUN';
	$page = "include 'database/master/klasifikasaun/index.php';";
	break;
	case 'hamosKlasifikasaun':
	$title = 'HAMOS DADUS KLASIFIKASAUN';
	$page = "include 'database/master/klasifikasaun/hamos.php';";
	break;
	case 'hadiaKlasifikasaun':
	$title = 'HADIA DADUS KLASIFIKASAUN';
	$page = "include 'database/master/klasifikasaun/hadia.php';";
	break;
	case 'aumentaKlasifikasaun':
	$title = 'AUMETA DADUS KLASIFIKASAUN';
	$page = "include 'database/master/klasifikasaun/aumenta.php';";
	break;
		// Akhir Link Klasifikasaun

	// Link Doutor 
	case 'doutor':
	$title = 'DADUS DOUTOR';
	$page = "include 'database/master/doutor/index.php';";
	break;
	case 'hamosDoutor':
	$title = 'HAMOS DADUS DOUTOR';
	$page = "include 'database/master/doutor/hamos.php';";
	break;
	case 'hadiaDoutor':
	$title = 'HADIA DADUS DOUTOR';
	$page = "include 'database/master/doutor/hadia.php';";
	break;
	case 'aumentaDoutor':
	$title = 'AUMETA DADUS DOUTOR';
	$page = "include 'database/master/doutor/aumenta.php';";
	break;
		// Akhir Link Doutor

	// Link TPasiente 
	case 'tpasiente':
	$title = 'DADUS TIPU PASIENTE';
	$page = "include 'database/master/tpasiente/index.php';";
	break;
	case 'hamosTPasiente':
	$title = 'HAMOS DADUS TIPU PASIENTE';
	$page = "include 'database/master/tpasiente/hamos.php';";
	break;
	case 'hadiaTPasiente':
	$title = 'HADIA DADUS TIPU PASIENTE';
	$page = "include 'database/master/tpasiente/hadia.php';";
	break;
	case 'aumentaTPasiente':
	$title = 'AUMETA DADUS TIPU PASIENTE';
	$page = "include 'database/master/tpasiente/aumenta.php';";
	break;
		// Akhir Link TPasiente

	// Link RegistuPasiente 
	case 'registupasiente':
	$title = 'DADUS REGISTU PASIENTE';
	$page = "include 'database/prosesu/registupasiente/index.php';";
	break;
	case 'hamosRegistuPasiente':
	$title = 'HAMOS DADUS REGISTU PASIENTE';
	$page = "include 'database/prosesu/registupasiente/hamos.php';";
	break;
	case 'hadiaRegistuPasiente':
	$title = 'HADIA DADUS REGISTU PASIENTE';
	$page = "include 'database/prosesu/registupasiente/hadia.php';";
	break;
	case 'aumentaRegistuPasiente':
	$title = 'AUMETA DADUS REGISTU PASIENTE';
	$page = "include 'database/prosesu/registupasiente/aumenta.php';";
	break;
		// Akhir Link RegistuPasiente

	// Link Admin 
	case 'admin':
	$title = 'DADUS REGISTU ADMIN';
	$page = "include 'database/master/admin/index.php';";
	break;
	case 'hamosAdmin':
	$title = 'HAMOS DADUS ADMIN';
	$page = "include 'database/master/admin/hamos.php';";
	break;
	case 'hadiaAdmin':
	$title = 'HADIA DADUS ADMIN';
	$page = "include 'database/master/admin/hadia.php';";
	break;
	case 'aumentaAdmin':
	$title = 'AUMETA DADUS ADMIN';
	$page = "include 'database/master/admin/aumenta.php';";
	break;
		// Akhir Link Admin

	case 'logout':
	$title = 'LOGOUT';
	$page = "include 'logs/logout.php';";
	break;

	case 'relatorio':
	$title = 'RELATORIO GERAL';
	$page = "include 'database/output/relatorio.php';";
	break;

	case 'relperiodo':
	$title = 'RELATORIO KADA PERIODO';
	$page = "include 'rel/relperiodo.php';";
	break;

	default:
	$title = 'DASHBOARD';
	$page = "include 'template/content.php';";
	break;
}

$CONTENT['main'] = $page;

?>
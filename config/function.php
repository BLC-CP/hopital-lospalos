<?php 

function uniqueId($idU, $table){
    global $conn;

    return $uniqueId = "$idU" . (date('Y') . 0 . 0 + mysqli_num_rows(mysqli_query($conn, "SELECT * FROM $table")) + 1);
}

function mq($sql){
	global $conn;

	return $mq = mysqli_query($conn, $sql);
}

function hamos($tbName, $idTable){
	global $conn;
	$id = $_GET['id'];
	return $hamos = mysqli_query($conn, "DELETE FROM $tbName WHERE $idTable = $id");

}

function mfa($qName){
	global $conn;

	return $mfa = mysqli_fetch_array($qName);
}

function mnr($mnr){
	global $conn;

	return $mnr = mysqli_num_rows($mnr);
}

function mfa_mq($tName, $idT){
	global $conn;
	$id = $_GET['id'];
	return $mfa_mq = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM $tName WHERE $idT = '$id'"));
}


function alert($alertName, $losLocation, $salaLocation){
	global $conn;

	if(mysqli_affected_rows($conn) > 0){
		echo "
		<script>
		alert('Dadus $alertName ho susesu');
		document.location.href='?page=$losLocation';
		</script>
		";
	}else{
		echo "
		<script>
		alert('Dadus $alertName ladiak');
		document.location.href='?page=$salaLocation';
		</script>
		";exit;
	}

}

// upload imagen estudante
function uploadFotos(){
	global $conn;

	$fileName = $_FILES['foto']['name'];
	$tmpName = $_FILES['foto']['tmp_name'];
	$fileExtensi = explode('.', $fileName);
	$fileExtensi = strtolower(end($fileExtensi));
	$nrnFoun = uniqid();
	$nrnFoun .='';
	$nrnFoun .=$fileExtensi;


	move_uploaded_file($tmpName, 'imgTua/' . $nrnFoun);
	return $nrnFoun;
}
// end upload imagen estudante

// upload imagen estudante
function uploadFoto(){
	global $conn;

	$fileName = $_FILES['foto']['name'];
	$tmpName = $_FILES['foto']['tmp_name'];
	$fileExtensiValidu = array('jpg', 'png', 'jpeg', 'gif');
	$fileExtensi = explode('.', $fileName);
	$fileExtensi = strtolower(end($fileExtensi));

	// if($fileExtensi != $fileExtensiValidu){
	// 	echo "
	// 		<script>
	// 			alert('File Nebe Ita Boot Upload Laos Foto Favor Upload Fila Fali');
	// 			document.location.href='?page=estudante';
	// 		</script>
	// 		";exit;
	// }

	$nrnFoun = uniqid();
	$nrnFoun .='';
	$nrnFoun .=$fileExtensi;


	move_uploaded_file($tmpName, 'imgAdmin/' . $nrnFoun);
	return $nrnFoun;
}
// end upload imagen estudante

?>
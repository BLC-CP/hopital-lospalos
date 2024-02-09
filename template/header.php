<?php 
include 'pages/page.php';

$idAdmin = $_SESSION['id_admin'];
$queryAdmin = mq("SELECT * FROM tb_admin WHERE id_admin='$idAdmin' ");
$dataAdmin = mfa($queryAdmin);



$d_registu = date("koko");
// $d_registu = date("m-d-Y");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hospital</title>

    <link href="bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
    <script src="jquery.min.js"></script>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

    <!-- Data tables -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="select2/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="select2-bootstrap4-theme/select2-bootstrap4.min.css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style type="text/css">
        *{
            font-family: MV Boli;
            font-weight: bold;
        }

        tbody tr td .hamos{
            color: red;
        }

        tbody tr td .hadia{
            color: blue;
        }
    </style>


    <link rel="stylesheet" href="tinan/jquery-ui.css">
    <script src="tinan/jquery-1.9.1.js"></script>
    <script src="tinan/jquery-ui.js"></script>

</head>

<body id="page-top">
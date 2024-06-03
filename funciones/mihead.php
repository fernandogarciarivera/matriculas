<?php
	$current_pageSession = trim(basename($_SERVER['PHP_SELF']));

    if($current_pageSession !== 'login.php') session_start();

    header('Content-Type: text/html; charset=utf-8');
    mb_internal_encoding('UTF-8');
    ini_set("default_charset", "UTF-8");
?>

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Proyecto TPW</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
	
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>

</head>
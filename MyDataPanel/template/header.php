<?php
	require_once ($_SERVER['DOCUMENT_ROOT'].'/config.php');
	$query = "SELECT * FROM `sites`";
?>
<!DOCTYPE HTML>
<html>
  <head>
    <meta name="generator"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no" />
    <title>Index</title>
    <!-- CSS  -->
    <link href="/template/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
<body>
  <nav class="cyan">
    <div class="container nav-wrapper">
      <a href="/" class="brand-logo">Панелька</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a class="waves-effect waves-light" href="add/">
      <i class="material-icons mdi-action-note-add"></i>
            </a></li>
      </ul>
    </div>
  </nav>
        
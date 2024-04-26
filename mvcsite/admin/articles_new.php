<?php
	require_once("../database.php");
	require_once ("../models/articles.php");
	$link = db_connect();
	$article = articles_new($title, $content);
?>
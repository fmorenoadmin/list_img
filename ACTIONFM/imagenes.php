<?php
	$ru='../';
	$db='database';
	$cl1='imagenes';
	$di1='imagenes/';

	function index($rut){
		global $db, $cl1;
		require($rut.DIRMOR.$db.'.php');
		require($rut.DIRMOR.$cl1.'.php');
		$_db = new $db();
		$_cl1 = new $cl1();

		$inf = $_cl1->categ($_db->conect01());
		$_SESSION['inf2'] = $_cl1->cuerpo($_db->conect01());

		return $inf;
	}
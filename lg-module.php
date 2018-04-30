<?php
session_start();
// verificamos la sesion creada
$default="es";
if(isset($_SESSION['lang'])){
	if($_SESSION['lang']=='es' or $_SESSION['lang']=='en'){
		$lang = $_SESSION["lang"];
		require "lang/".$lang.".php";
	}else{
		$_SESSION["lang"]=$default;
		$lang = $_SESSION["lang"];
		require "lang/".$lang.".php";	
		}
	}else{
	$_SESSION["lang"]=$default;
	$lang = $_SESSION["lang"];
    require "lang/".$lang.".php";
}
?>
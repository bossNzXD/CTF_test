<?php 
use AltoRouter as Router;
require_once 'controller/body/header.php';
require_once 'vendor/autoload.php';
$router = new Router();
require 'controller/system/system.class.php';
function loadpage($page){
	$class = new system;
	require_once 'view/'.$page.'.php';
}
function loadpageadmin($page){
	$class = new system;
	require_once 'view/admin/'.$page.'.php';
}
function loadpagelevel($idlevel){
	$class = new system;
	$id = $idlevel;
	require_once 'view/level.php';
}


// ===================SET ROUTER=====================

$router->map( "GET", "/", function() { loadpage('home'); });

$router->map( "GET", "/home", function() { loadpage('home'); });

$router->map( "GET", "/admin", function() { loadpageadmin('login'); });

$router->map( "GET", "/login", function() { if (isset($_SESSION['username'])) { loadpage('lobby'); }else{ loadpage('login'); } });

$router->map( "GET", "/register", function() { if (isset($_SESSION['username'])) { loadpage('lobby'); }else{ loadpage('register'); } });

$router->map( "GET", "/lobby", function() { if (isset($_SESSION['username'])) { loadpage('lobby'); }else{ loadpage('login'); } });

$router->map( "GET", "/userinfo", function() { if (isset($_SESSION['username'])) { loadpage('userinfo'); }else{ loadpage('login'); } });

$router->map( "GET", "/level/[i:id]", function( $id ) { if (isset($_SESSION['username'])) { loadpagelevel($id); }else{ loadpage('login'); } });

if (isset($_SESSION['admin'])) {

	$router->map( "GET", "/admin/add", function() { loadpage('home'); });
		
}

// ===================SET ROUTER=====================


$match = $router->match();
if( is_array($match) && is_callable( $match['target'] ) ) {
	call_user_func_array( $match['target'], $match['params'] );
} else {
	require 'view/404.php';
}

?>
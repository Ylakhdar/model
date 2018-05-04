<?php
/**
 * permet de forcer l'affichage des erreurs a basculer en false en mode production
 **/
error_reporting(E_ALL);
ini_set('display_errors', true);


/**
 *permet d'eviter les attaques XSS
 **/ 
$name=htmlentities($_GET['name']);
if (preg_match('/script/', $name)){
	header('HTTP/1.1 400 Forbidden');
	die();
}


/**
 *Comment utiliser la clé RSA pour l'authentification ssh pour accéder à votre serveur avec plus de sécurité
 **/
//https://www.phpclasses.org/blog/post/679-How-to-Use-RSA-Key-for-ssh-Authentication-to-Access-Your-Server-with-Greater-Security.html
https://www.phpclasses.org/blog/post/665-PHP-Security-Tutorial-Web-Site-Monitoring-3-Essential-Tools-for-Every-Website-Owner.html


// require dirname(__FILE__) . DIRECTORY_SEPARATOR.'include/view/pages/home.php';
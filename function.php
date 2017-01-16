<?php

function connect(){
 $db = new PDO("mysql:host=localhost;dbname=eyeseatea","root","",
 array(
   PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
   PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => TRUE,
   //PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
   PDO::MYSQL_ATTR_LOCAL_INFILE => TRUE,
   PDO::MYSQL_ATTR_USE_BUFFERED_QUERY));
 return $db;
}

function getvisitors(){
	$db = connect();
	$sth = $db->prepare("SELECT * From visitor ORDER BY ID desc");
	$sth->execute();
	$results = $sth->fetchAll(PDO::FETCH_OBJ);
	return $results;
}

function getClientIP(){

     if (array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER)){
            return  $_SERVER["HTTP_X_FORWARDED_FOR"];
        }else if (array_key_exists('REMOTE_ADDR', $_SERVER)) {
            return $_SERVER["REMOTE_ADDR"];
        }else if (array_key_exists('HTTP_CLIENT_IP', $_SERVER)) {
            return $_SERVER["HTTP_CLIENT_IP"];
        }

        return '';

    }


 ?>

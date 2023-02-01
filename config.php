<?php
require 'environment.php';

global $config;
$config = array();
if(ENVIRONMENT == 'development') {
	$config['dbname'] = 'loja';
	$config['host'] = 'localhost:3309';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	$config['dbname'] = 'loja';
	$config['host'] = 'localhost:3309';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}

$config['status_pgto'] = array(
	'1' => 'Aguardando Pgto.',
	'2' => 'Aprovado',
	'3' => 'Cancelado'
);

?>
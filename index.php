<?php
require_once 'classi/Dipendente.php';
require_once 'classi/Ruolo.php';


$dipendente1 = new dipendenti('Mario','Rossi',1234567);
var_dump($dipendente1);

$dipendente2 = new ruolo('Paolo','Bianchi',654321,'Web Developer','IT','Stagista');
var_dump($dipendente2);

 ?>

<?php
require_once 'classi/Dipendente.php';
require_once 'classi/Ruolo.php';


try {
    $dipendente1 = new dipendenti('Mario','Rossi',123456);
    var_dump($dipendente1);
} catch (\Exception $e) {
    echo 'Eccezione: ' .$e->getMessage();
}


try {
    $dipendente2 = new ruolo('Paolo','Bianchi',654321,'Web Developer','IT','Manager');
    var_dump($dipendente2);
} catch (\Exception $e) {
    echo 'Eccezione: ' .$e->getMessage();
}




 ?>

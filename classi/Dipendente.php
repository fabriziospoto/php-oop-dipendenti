<?php
require_once __DIR__ ."/../traits/Contratto.php";

class dipendenti {
    protected $nome;
    protected $cognome;
    protected $numero_tesserino;

    public function __construct($_nome,$_cognome,$_numero_tesserino){
        if (empty($_nome)) {
            die('Il nome non è stato indicato');
        }
        $this->nome = $_nome;
        if (empty($_cognome)) {
            die('Il cognome non è stato indicato');
        }
        $this->cognome = $_cognome;
        $numstring = strval($this->numero_tesserino);
        $numlength = strlen($numstring);
        if(is_nan($_numero_tesserino) && $numlength<>6){
            die('Non hai inserito un numero valido');
        }
        $this->numero_tesserino = $_numero_tesserino;
    }
}

 ?>

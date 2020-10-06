<?php
require_once __DIR__ ."/../traits/Contratto.php";

class dipendenti {
    protected $nome;
    protected $cognome;
    protected $numero_tesserino;

    public function __construct($_nome,$_cognome,$_numero_tesserino){
        if (!empty($_nome)) {
            $this->nome = $_nome;
        } else {
            throw new Exception('Il nome non è stato indicato');
        }
        
        if (!empty($_cognome)) {
            $this->cognome = $_cognome;
        } else {
            throw new Exception('Il cognome non è stato indicato');
        }

        $numstring = strval($_numero_tesserino);
        $numlength = strlen($numstring);
        if(is_int($_numero_tesserino)){
            $this->numero_tesserino = $_numero_tesserino;
        } else {
            throw new Exception('Non hai inserito un numero valido');
        }
        if($numlength==6){
            $this->numero_tesserino = $_numero_tesserino;
        } else {
            throw new Exception('No valido');
        }
    }
}

 ?>

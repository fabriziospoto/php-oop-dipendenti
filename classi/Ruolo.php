<?php
require_once 'Dipendente.php';
require_once __DIR__ ."/../traits/Contratto.php";

class ruolo extends dipendenti {
    public $ruolo;
    public $reparto;
    use Contratti;

    public function __construct($_nome,$_cognome,$_numero_tesserino,$_ruolo,$_reparto,$_tipoContratto){
        parent::__construct($_nome,$_cognome,$_numero_tesserino);

        if (!empty($_ruolo)) {
            $this->ruolo = $_ruolo;
        } else {
            throw new Exception('Il ruolo non è stato indicato');
        }

        if (!empty($_reparto)) {
            $this->reparto = $_reparto;
        } else {
            throw new Exception('Il reparto non è stato indicato');
        }

        if (!empty($_tipoContratto)){
            // $this->tipoContratto = $this->type($_tipoContratto);
            $this->tipoContratto = $_tipoContratto;
            $this->type($_tipoContratto);
        } 
    }

}

 ?>

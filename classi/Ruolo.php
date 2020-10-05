<?php
require_once 'Dipendente.php';
require_once __DIR__ ."/../traits/Contratto.php";

class ruolo extends dipendenti {
    public $ruolo;
    public $reparto;
    use Contratti;

    public function __construct($_nome,$_cognome,$_numero_tesserino,$_ruolo,$_reparto,$_tipoContratto){
        parent::__construct($_nome,$_cognome,$_numero_tesserino);


        if (empty($_ruolo)) {
            die('Il ruolo non è stato indicato');
        }
        $this->ruolo = $_ruolo;

        if (empty($_reparto)) {
            die('Il reparto non è stato indicato');
        }
        $this->reparto = $_reparto;

        if (!empty($_tipoContratto)){
            $this->type($_tipoContratto);
        }
        $this->tipoContratto = $_tipoContratto;
    }

}

 ?>

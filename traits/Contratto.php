<?php

trait Contratti {
    public $tipoContratto;

    public function type($_stringa){
        if(!($_stringa=='Stagista' || $_stringa=='Dipendente' || $_stringa=='Manager')){
            throw new Exception('Il tipo di contratto indicato non è valido');
        }
    }
}
 ?>

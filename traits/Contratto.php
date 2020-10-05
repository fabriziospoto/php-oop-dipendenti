<?php

trait Contratti {
    public $tipoContratto;

    public function type($_stringa){
        if(!($_stringa=='Stagista' || $_stringa=='Dipendente' || $_stringa=='Manager')){
            die("No");
        }
    }
}
 ?>

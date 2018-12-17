<?php
namespace App\Observer;

use App\pessoa;
use App\table_log;

class PessoaObserver
{
    public function creating(pessoa $pessoa)
    {
        $pessoa->nome = strtoupper($pessoa->nome);
        $log = new table_log();
        $log->nome = $pessoa->nome;
        $log->save();
    }
}
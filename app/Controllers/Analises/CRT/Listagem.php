<?php

namespace App\Controllers\Analises\CRT;

class Listagem extends \App\Controllers\BaseController
{
    private $dados;

    public function __construct()
    {
        $this->dados = array();
    }

    public function index()
    {
        return view('analises/crt/listagem', $this->dados);
    }
}

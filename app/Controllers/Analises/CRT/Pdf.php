<?php

namespace App\Controllers\Analises\CRT;

class Pdf extends \App\Controllers\BaseController
{
    private $dados;

    public function __construct()
    {
        $this->dados = array();
    }

    public function index()
    {
        return view('analises/crt/pdf', $this->dados);
    }
}

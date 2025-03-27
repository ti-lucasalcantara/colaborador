<?php

namespace App\Controllers\Analises\BaixaRT;

use App\Models\TbBaixaRt;

class Listagem extends \App\Controllers\BaseController
{
    private $dados;

    public function __construct()
    {
        $this->dados = array();
    }

    public function index()
    {
        $TbBaixaRt = new TbBaixaRt();
        $this->dados['lista'] = $TbBaixaRt->findAll();
        return view('analises/baixa_rt/listagem', $this->dados);
    }
}

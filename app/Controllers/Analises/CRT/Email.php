<?php

namespace App\Controllers\Analises\CRT;

use App\Models\TbBaixaRt;

class Email extends \App\Controllers\BaseController
{

    private $dados;

    public function __construct()
    {
        $this->dados = array();
    }

    public function index($id_baixa_rt=null)
    {
        $baixa_rt = (new TbBaixaRt())->find($id_baixa_rt);

        $this->dados['baixa_rt'] = $baixa_rt;
        return view('analises/crt/email', $this->dados);
    }
    
}

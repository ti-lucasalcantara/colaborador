<?=$this->extend('_template/principal.php')?>


<?= $this->section('conteudo') ?>
<!--Page header-->
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title mb-0 text-primary">Analisar - Certidão de Responsabilidade Técnica (CRT)</h4>
    </div>
    <div class="page-rightheader">
        <div class="btn-list">
            <a href="<?=url_to('baixart.listagem.inclusao')?>" class="btn btn-outline-danger">
                <i class="fe fe-chevron-left me-2"></i>
                Voltar para listagem
            </a>
        </div>
    </div>
</div>
<!--End Page header-->
<!-- Row -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div style="display: flex; justify-content: space-between;">
                    <div class="">
                        <h4 class="text-danger">PJ: 2548 - Empresa XYZ</h4>
                    </div>
                    <div>
                        <span class="badge bg-blue fs-5 p-3">Protocolo: 123456789</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"><h4 class="card-title"><i class="fa fa-chevron-down"></i> Histórico da Solicitação</h4></div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Dados da Solicitação</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <form class="form-horizontal">
                            <div class="form-row">
                                <div class="form-group col-md-1 mb-0">
                                    <div class="form-group">
                                        <label class="form-label">Data da Solicitação</label>
                                        <input type="text" class="form-control" value="25/05/2025" readonly>
                                    </div>
                                </div>
                                <div class="form-group col-md-1 mb-0">
                                    <div class="form-group">
                                        <label class="form-label">Registro</label>
                                        <input type="text" class="form-control" readonly>
                                    </div>
                                </div>

                                <div class="form-group col-md-4 mb-0">
                                    <div class="form-group">
                                        <label class="form-label">Empresa</label>
                                        <input type="text" class="form-control" readonly>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-row border p-4 mb-2 border-success ">
                                <div class="form-group col-3 mb-0">
                                    <label for="#" class="form-label">Houve mudança de endereço?</label>
                                    <input type="text" class="form-control" readonly value="Não">
                                </div>

                                <div class="form-group col-3 mb-0">
                                    <label for="#" class="form-label">Houve mudança no horário de funcionamento?</label>
                                    <input type="text" class="form-control" readonly value="Não">
                                </div>

                                <div class="form-group col-3 mb-0">
                                    <label for="#" class="form-label">Houve mudança de sócios?</label>
                                    <input type="text" class="form-control" readonly value="Não">
                                </div>

                                <div class="form-group col-3 mb-0">
                                    <label for="#" class="form-label">Houve mudança de RTs ou Horário de Assistência?</label>
                                    <input type="text" class="form-control" readonly value="Não">
                                </div>
                            </div>

                            <div class="form-row border p-4 mb-2">
                                
                                <div class="form-group col-4 mb-0 border-end">
                                    <label for="#" class="form-label border-bottom fs-6">Horário de Funcionamento</label>
                                    <table class="table table-hover card-table table-vcenter text-nowrap">
                                        <thead>
                                            <tr>
                                                <th style="font-weight: bold;">DIA</th>
                                                <th style="font-weight: bold;">HORÁRIO</th>
                                                <th style="font-weight: bold;">INTERVALO</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row">SEG</th>
                                                <td>08:00 - 18:00</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">TER</th>
                                                <td>08:00 - 18:00</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">QUA</th>
                                                <td>08:00 - 18:00</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">QUI</th>
                                                <td>08:00 - 18:00</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">SEX</th>
                                                <td>08:00 - 18:00</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">SÁB</th>
                                                <td>08:00 - 18:00</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <th scope="row">DOM</th>
                                                <td>08:00 - 18:00</td>
                                                <td></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                                <div class="form-group col-8 mb-0 border-end">
                                    <label for="#" class="form-label border-bottom fs-6">Horário de Assistência</label>

                                    <div class="box_rt" style="max-height: 400px; overflow-y: auto;">
                                        <?php
                                        for ($i=1; $i < 5 ; $i++) { 
                                        ?>
                                        <div class="rt border-dark border-wd-2 mb-4 me-2 " >
                                            
                                            <div class="p-4">
                                                <span class="text-danger me-4"><?=$i?>/4</span>
                                                <span class="fs-6">45478 | João da Silva Sauro</span>
                                                <span class="text-success border-success border-wd-2 px-2">SEM MUDANÇAS</span>
                                                <span class="text-info border-info border-wd-2 px-2">HOUVE MUDANÇAS</span>
                                                <span class="text-danger border-danger border-wd-2 px-2">INCLUSÃO</span>
                                                <span class="text-info border-info border-wd-2 px-2">PROPRIETÁRIO</span>
                                                <span class="text-warning border-warning border-wd-2 px-2">12x36</span>
                                            </div>

                                            <div class="p-4">
                                                <input type="text" class="form-control" value="Seg. a sexta 08h às 20h">
                                            </div>


                                            <div class="p-4 d-flex justify-content-space-between">
                                                <div class="col-6">
                                                    <ul class="list-group">
                                                        <li class="list-group-item">
                                                            Vínculo Empregatício de: <b>João da Silva Sauro</b>
                                                            <select name="" id="" class="form-control"></select>
                                                        </li>
                                                        <li class="list-group-item">
                                                            Vínculo Empregatício de: <b>João da Silva Sauro</b>
                                                            <select name="" id="" class="form-control"></select>
                                                        </li>
                                                        <li class="list-group-item">
                                                            Vínculo Empregatício de: <b>João da Silva Sauro</b>
                                                            <select name="" id="" class="form-control"></select>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-6">
                                                    <table class="table table-hover card-table table-vcenter text-nowrap">
                                                        <thead>
                                                            <tr>
                                                                <th style="font-weight: bold;">DIA</th>
                                                                <th style="font-weight: bold;">HORÁRIO</th>
                                                                <th style="font-weight: bold;">INTERVALO 1</th>
                                                                <th style="font-weight: bold;">INTERVALO 2</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">SEG</th>
                                                                <td>08:00 - 18:00</td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">TER</th>
                                                                <td>08:00 - 18:00</td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">QUA</th>
                                                                <td>08:00 - 18:00</td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">QUI</th>
                                                                <td>08:00 - 18:00</td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">SEX</th>
                                                                <td>08:00 - 18:00</td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">SÁB</th>
                                                                <td>08:00 - 18:00</td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">DOM</th>
                                                                <td>08:00 - 18:00</td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        }
                                        ?>
                                    </div>

                                </div>

                            </div>

                            <div class="form-row border p-4 mb-2">
                                <div class="col-6 border-wd-2 border-end">
                                    <label for="#" class="form-label border-bottom fs-6">Anexos do Estabelecimento</label>

                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            Vínculo Empregatício de: <b>João da Silva Sauro</b>
                                            <select name="" id="" class="form-control"></select>
                                        </li>
                                        <li class="list-group-item">
                                            Vínculo Empregatício de: <b>João da Silva Sauro</b>
                                            <select name="" id="" class="form-control"></select>
                                        </li>
                                        <li class="list-group-item">
                                            Vínculo Empregatício de: <b>João da Silva Sauro</b>
                                            <select name="" id="" class="form-control"></select>
                                        </li>
                                    </ul>
                                </div>

                                <div class="col-6 border-star">
                                    <label for="#" class="form-label border-bottom fs-6">Anexos do(s) Farmacêutico(s)</label>

                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            Vínculo Empregatício de: <b>João da Silva Sauro</b>
                                            <select name="" id="" class="form-control"></select>
                                        </li>
                                        <li class="list-group-item">
                                            Vínculo Empregatício de: <b>João da Silva Sauro</b>
                                            <select name="" id="" class="form-control"></select>
                                        </li>
                                        <li class="list-group-item">
                                            Vínculo Empregatício de: <b>João da Silva Sauro</b>
                                            <select name="" id="" class="form-control"></select>
                                        </li>
                                    </ul>
                                </div>
                            </div>




                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <?php
                for ($i=0; $i < 6;  $i++) { 
                ?>
                <div class="border p-4 mb-4">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                        <span class="custom-control-label fs-5">Criar Anotação</span>
                    </label>
                    <input name="" id="" class="form-control">
                    <small class="text-info">Função executada anteriormente em: 01/01/2025 às 08h52 - lucas.pereira</small>
                </div>
                <?php
                }
                ?>

                <a href="#" class="btn btn-primary btn-lg col-12 mb-4"><i class="fa fa-check"></i> Executar funções no SYS</a>

                <a href="#" class="btn btn-blue btn-lg col-12 mb-4"><i class="fa fa-file-pdf-o"></i> PDF da Solicitação</a>

                <a href="#" class="btn btn-info btn-lg col-12 mb-4"><i class="fa fa-envelope"></i> Ir para disparo de e-mails</a>
            </div>
        </div>
    </div>
</div>

<!-- End Row -->
<?= $this->endSection() ?>

<?= $this->section('css') ?>
<style>
  /* Aumenta a largura da barra de rolagem */
  .box_rt::-webkit-scrollbar {
    width: 12px;
  }
  /* Estiliza o fundo da trilha da barra de rolagem com um cinza escuro */
  .box_rt::-webkit-scrollbar-track {
    background: #eee;
  }
  /* Estiliza o polegar (thumb) da barra de rolagem */
  .box_rt::-webkit-scrollbar-thumb {
    background-color: #555;
  }
</style>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<?= $this->endSection() ?>

<?=$this->extend('_template/principal.php')?>


<?= $this->section('conteudo') ?>
<!--Page header-->
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title mb-0 text-primary">Analisar - Baixa de Responsabilidade Técnica</h4>
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
                        <h4 class="text-danger">PF: 123456 - João da Silva Nascimento</h4>
                        <h4>PJ: 2548 - Empresa XYZ</h4>
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
            <div class="card-header">
                CRT ATUAL
            </div>
            <div class="card-body">
                Something text type here.....
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Dados da Solicitação</h4>
            </div>
            <div class="card-body" style="min-height: 650px;">
                <div class="row">
                    <div class="col">
                        <form class="form-horizontal">
                            <?php
                            #d($baixa_rt);
                            ?>
                            <div class="form-group row">
                                <label class="col-2 form-label">Data da Solicitação</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-2 form-label">Profissional<br>(PF)</label>
                                <div class="col-3">
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <div class="col-7">
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-2 form-label">Empresa<br>(PJ)</label>
                                <div class="col-3">
                                    <input type="text" class="form-control" readonly>
                                </div>
                                <div class="col-7">
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-2 form-label">Data da Saída</label>
                                <div class="col-10">
                                    <input type="text" class="form-control" readonly>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-2 form-label">Motivo da Saída</label>
                                <div class="col-10">
                                    <textarea type="text" class="form-control" style="resize: vertical;" rows="8" readonly></textarea>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="card">
            <div class="card-body" style="min-height: 650px;">
                <iframe src="https://eppg.fgv.br/sites/default/files/teste.pdf" frameborder="0" width="100%" height="650px"></iframe>
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

                <a href="#" class="btn btn-info btn-lg col-12 mb-4"><i class="fa fa-envelope"></i> Ir para disparo de e-mails</a>
            </div>
        </div>
    </div>
</div>

<!-- End Row -->
<?= $this->endSection() ?>

<?= $this->section('css') ?>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<?= $this->endSection() ?>

<?=$this->extend('_template/principal.php')?>


<?= $this->section('conteudo') ?>
<!--Page header-->
<div class="page-header">
    <div class="page-leftheader">
        <h4 class="page-title mb-0 text-primary">Enviar e-mail - Baixa de Responsabilidade Técnica</h4>
    </div>
    <div class="page-rightheader">
        <div class="btn-list">
            <a href="<?=url_to('baixart.listagem.inclusao')?>" class="btn btn-outline-danger">
                <i class="fe fe-chevron-left me-2"></i>
                Voltar para análise
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

<!-- Row -->
<div class="row">
    <div class="col-md-12">
        <div class="card border-info">
            <div class="card-header"><h4 class="card-title">E-mail para o(a) farmacêutico(a)</h4></div>
            <div class="card-body">
                <div class="border p-4 mb-2">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" >
                        <span class="custom-control-label fs-6">Cópia Oculta para:</span>
                    </label>
                    <input name="" id="" class="form-control">
                </div>
                <?php
                for ($i=0; $i < 2;  $i++) { 
                ?>
                <div class="border p-4 mb-2">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                        <span class="custom-control-label fs-6">E-mail de: PF 123456 - João da Silva Nascimento</span>
                    </label>
                    <input name="" id="" class="form-control">
                </div>
                <?php
                }
                ?>
                <div class="border p-4">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores sunt quidem expedita explicabo alias ad? At placeat nam perferendis, totam nihil accusamus odio laborum dicta consequuntur, in reprehenderit quasi repudiandae!
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="card border-info">
            <div class="card-header"><h4 class="card-title">E-mail para o estabelecimento</h4></div>
            <div class="card-body">
                <div class="border p-4 mb-2">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" >
                        <span class="custom-control-label fs-6">Cópia Oculta para:</span>
                    </label>
                    <input name="" id="" class="form-control">
                </div>
                <?php
                for ($i=0; $i < 2;  $i++) { 
                ?>
                <div class="border p-4 mb-2">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                        <span class="custom-control-label fs-6">E-mail de: PJ 2548 - Empresa XYZ</span>
                    </label>
                    <input name="" id="" class="form-control">
                </div>
                <?php
                }
                ?>
                <div class="border p-4">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Maiores sunt quidem expedita explicabo alias ad? At placeat nam perferendis, totam nihil accusamus odio laborum dicta consequuntur, in reprehenderit quasi repudiandae!
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Row -->


<div class="row col">
    <a href="#" class="btn btn-primary btn-lg col-12"><i class="fa fa-send"></i> Disparar e-mails</a>
</div>

<?= $this->endSection() ?>

<?= $this->section('css') ?>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<?= $this->endSection() ?>

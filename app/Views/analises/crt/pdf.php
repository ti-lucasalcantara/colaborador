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

<!-- Row -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <!-- Input para digitar o número da página (enumeração) -->
                <div class="mb-3">
                    <label for="pageNumber" class="form-label">Digite o número da página para enumeração:</label>
                    <div class="input-group">
                        <input type="number" class="form-control col-1" id="pageNumber" placeholder="Ex.: 5">
                        <span class="input-group-text bg-green" onclick="minhaFuncao()" style="cursor: pointer;">
                            <i class="fa fa-check"></i>
                        </span>
                    </div>
                </div>

                <!-- Iframe para exibição do PDF -->
                <div class="mb-3">
                    <iframe class="pdf-iframe" src="https://eppg.fgv.br/sites/default/files/teste.pdf"></iframe>
                </div>

                <!-- Botões para incluir e excluir páginas -->
                <div class="mb-3 text-center col-12" style="margin: 0 auto;">
                    <div class="">
                        <button type="button" class="btn btn-primary col-2 mb-2"><i class="fa fa-plus"></i> Incluir Página(s)</button>
                    </div>
                    <div class="">
                        <button type="button" class="btn btn-danger col-2 mb-2 disabled"><i class="fa fa-trash"></i> Excluir Página(s)</button>
                    </div>
                </div>

                <!-- Lista com drag and drop para reordenar as páginas -->
                <div class="mb-5 text-center col-2" style="margin: 0 auto;">
                    <label class="form-label">Organize as páginas:</label>
                    <ul class="drag-list list-group">
                        <?php
                        for ($i=1; $i <= 20; $i++) { 
                        ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center" draggable="true">
                            Página <?=$i?>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="checkPage1">
                            </div>
                        </li>
                        <?php
                        }
                        ?>
                       
                    </ul>
                </div>

                <div class="mb-3 text-center col-12" style="margin: 0 auto;">
                    <div class="">
                        <button type="button" class="btn btn-success col-2 mb-2"><i class="fa fa-check"></i> Salvar Modificações</button>
                    </div>
                </div>
              

            </div>
        </div>

        <!-- Botões finais -->
        <div class="mt-5">
            <a href="#" class="btn btn-primary btn-lg col-12 mb-4"><i class="fa fa-check"></i> Executar funções no SYS</a>
            <a href="#" class="btn btn-info btn-lg col-12 mb-4"><i class="fa fa-envelope"></i> Ir para disparo de e-mails</a>
        </div>
    </div>
</div>
<!-- End Row -->
<?= $this->endSection() ?>

<?= $this->section('css') ?>
<style>
/* Estilização do iframe do PDF */
.pdf-iframe {
    width: 100%;
    height: 600px;
    border: 1px solid #ddd;
}
/* Estilização da lista com drag and drop */
.drag-list {
    list-style: none;
    padding: 0;
}
.drag-list li {
    padding: 10px;
    margin-bottom: 5px;
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    cursor: move;
}
</style>
<?= $this->endSection() ?>

<?= $this->section('js') ?>
<?= $this->endSection() ?>

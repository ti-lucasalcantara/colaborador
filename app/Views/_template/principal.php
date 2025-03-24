<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
	<head>

		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="Azea - Admin Panel HTML template" name="description">
		<meta content="Spruko Private Limited" name="author">
		<meta name="keywords" content="admin, admin template, dashboard, admin dashboard, responsive, bootstrap, bootstrap 5, admin theme, admin themes, bootstrap admin template, scss, ui, crm, modern, flat">

		<!-- Title -->
		<title>Acesso Restrito - <?=$titulo_pagina ?? 'CRF/MG'?> </title>

		<!--Favicon -->
		<link rel="icon" href="/colaborador/favicon.ico" type="image/x-icon"/>

		<!--Bootstrap css -->
		<link id="style" href="/colaborador/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- Style css -->
		<link href="/colaborador/assets/css/style.css" rel="stylesheet" />
		<link href="/colaborador/assets/css/dark.css" rel="stylesheet" />
		<link href="/colaborador/assets/css/skin-modes.css" rel="stylesheet" />

		<!-- Animate css -->
		<link href="/colaborador/assets/css/animated.css" rel="stylesheet" />

		<!-- P-scroll bar css-->
		<link href="/colaborador/assets/plugins/p-scrollbar/p-scrollbar.css" rel="stylesheet" />

		<!---Icons css-->
		<link href="/colaborador/assets/css/icons.css" rel="stylesheet" />

	    <!-- Color Skin css -->
		<link id="theme" href="/colaborador/assets/colors/color1.css" rel="stylesheet" type="text/css"/>

		<!-- sweetalert2 -->
		<link href="/colaborador/assets/plugins/sweetalert/css/sweetalert2.min.css" rel="stylesheet"> 

		<!-- toast -->
		<link href="/colaborador/assets/plugins/toast/css/jquery.growl.css" rel="stylesheet" type="text/css" />

		<?= $this->renderSection('css') ?>

	</head>

	<body class="app sidebar-mini">

		<!---Global-loader-->
		<!-- <div id="global-loader" >
			<img src="/colaborador/assets/images/svgs/loader.svg" alt="loader">
		</div> -->
		<!--- End Global-loader-->

		<!-- Page -->
		<div class="page">
			<div class="page-main">

				<?= $this->include('_template/menu_esquerda') ?>

				<!-- App-Content -->
				<div class="app-content main-content">
					<div class="side-app">

					    <?= $this->include('_template/menu_superior') ?>
						
						<?= $this->renderSection('conteudo') ?>

					</div>
				</div><!-- right app-content-->
			</div>

			<!--Footer-->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 text-center">
							Copyright © 2021 <a href="javascript:void(0);">azea</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);"> Spruko </a> All rights reserved
						</div>
					</div>
				</div>
			</footer>
			<!-- End Footer-->

		</div>
		<!-- End Page -->

		<!-- Back to top -->
		<a href="#top" id="back-to-top"><i class="fe fe-chevron-up"></i></a>

		<!-- Jquery js-->
		<script src="/colaborador/assets/js/jquery.min.js"></script>

		<!-- Bootstrap5 js-->
		<script src="/colaborador/assets/plugins/bootstrap/popper.min.js"></script>
		<script src="/colaborador/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!--Othercharts js-->
		<script src="/colaborador/assets/plugins/othercharts/jquery.sparkline.min.js"></script>

		<!-- Circle-progress js-->
		<script src="/colaborador/assets/js/circle-progress.min.js"></script>

		<!-- Jquery-rating js-->
		<script src="/colaborador/assets/plugins/rating/jquery.rating-stars.js"></script>

		<!--Sidemenu js-->
		<script src="/colaborador/assets/plugins/sidemenu/sidemenu.js"></script>

		<!-- P-scroll js-->
		<!-- 
		<script src="/colaborador/assets/plugins/p-scrollbar/p-scrollbar.js"></script>
		<script src="/colaborador/assets/plugins/p-scrollbar/p-scroll1.js"></script>
		<script src="/colaborador/assets/plugins/p-scrollbar/p-scroll.js"></script>
 		-->

		<!-- Custom js-->
		<script src="/colaborador/assets/js/custom.js"></script>

		<!-- toast -->
		<script src="/colaborador/assets/plugins/toast/js/jquery.growl.js" type="text/javascript"></script>
		
		<!-- sweetalert2 -->
		<script src="/colaborador/assets/plugins/sweetalert/js/sweetalert2.all.min.js"></script>

		<!-- inputmask -->
		<script src="/colaborador/assets/plugins/inputmask/jquery.inputmask.min.js" type="text/javascript"></script>

		<script>

			$.fn.loading = function(disabled=true, text='') {
				return this.each(function() {
					const displayText = text || '<i class="fa fa-spinner fa-spin"></i> Aguarde...';
					$(this).html(displayText).prop('disabled', disabled);
				});
			};

			$.fn.resetLoading = function(text='Ok') {
				return this.each(function() {
					$(this).html(`${text}`).prop('disabled', false);
				});
			};

			$.fn.retorno = function(type='',title='',text='') {
				return this.each(function() {
					$(this).empty().html(`<div class='alert alert-${type}'><b>${title}</b><br>${text}</div>`);
				});
			};

			
			function showToast(title = 'Atenção!', text = '-', type = 'default') {
				if (type === 'danger') type = 'error';
				if (type === 'success') type = 'notice';

				$.growl({
					title: title,
					message: text,
					style: type,
				});
			}

			async function executarAjax(url, data, method='POST', debug=false) {
				try {
					
					if ( url === null || data === null ){
						throw 'Parameter is not found!';
					}

					const result = await $.ajax({
						type: method,
						method: method,
						url: url,
						data: data,
						dataType: 'json',
						enctype:"multipart/form-data",
						contentType: false,
						processData: false,
						beforeSend: function(){
							// console.log('beforeSend');
						},
						success: function(res){
							// console.log('success', res);
						}
					}).done(function( res ) {
						// console.log('done',res);

					}).fail(function(jqXHR, textStatus, errorThrown) {

						console.error('Erro HTTP:', jqXHR.status); 
						console.error('Retorno:', jqXHR);

						if(jqXHR.status != 200){
							if (jqXHR.responseJSON && jqXHR.responseJSON.show_toast === true) {
								showToast(jqXHR.responseJSON.title, jqXHR.responseJSON.text, jqXHR.responseJSON.type);
							}
						}

					}).always(function( res, textStatus, jqXHR ) {
						if(debug){
							console.log('always',res);
						}
						return res;
					}); 
					
					return result;

				} catch (error) {
					console.error('Catch error:', error);
					if (error.responseJSON && error.responseJSON.show_toast === true) {
						showToast(error.responseJSON.title, error.responseJSON.text, error.responseJSON.type);
					}
					throw error;
					return false;
				}
			}
		</script>


		<?= $this->include('_componentes/toast') ?>
		<?= $this->include('_componentes/sweet-alert') ?>
		<?= $this->include('_componentes/modal-excluir') ?>

		<?= $this->renderSection('js') ?>

	</body>
</html>
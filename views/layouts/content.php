<?php
use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;
use yii\helpers\Url;

$numEventos =1 ;
$numDocumentos =2;
$numMemos =3;
$numSeguimientos =4;
?>


<div class="content-wrapper">
		<div class="row" style="padding-top: 20px;">
         <!-- Small boxes (Stat box)  -->
			<div class="row" style="padding-left: 30px; padding-right: 30px;">		
					<div class="col-xs-3">
					  <!-- small box -->
					  <div class="small-box bg-yellow">
						<div class="inner">
						  <h3><?= $numEventos ?></h3>
						  <p>Eventos en Agenda</p>
						</div>
						<div class="icon">
						  <i class="fa fa-calendar"></i>
						</div>
						<a href="<?= Url::toRoute('agenda/index')?>" class="small-box-footer">Ir a la Agenda <i class="fa fa-arrow-circle-right"></i></a>
					  </div>
					</div><!-- ./col -->
					
					<div class="col-xs-3" >
					  <!-- small box -->
					  <div class="small-box bg-aqua">
						<div class="inner">
						  <h3><?= $numDocumentos ?></h3>
						  <p>Facturación </p>
						</div>
						<div class="icon">
						  <i class="fa fa-file-text-o"></i>
						</div>
						<a href="#" class="small-box-footer">Ir a Facturación <i class="fa fa-arrow-circle-right"></i></a>
					  </div>
					</div><!-- ./col -->

					<div class="col-xs-3">
					  <!-- small box -->
					  <div class="small-box bg-red">
						<div class="inner">
						  <h3><?= $numSeguimientos ?></h3>
						  <p>Cartera de Cheques</p>
						</div>
						<div class="icon">
						  <i class="fa fa fa-exclamation-triangle"></i>   
						</div>
						<a href="<?= Url::toRoute('cheques/terceros')?>" class="small-box-footer">Ir a Cheques <i class="fa fa-arrow-circle-right"></i></a>
					  </div>
					</div><!-- ./col -->
					
					<div class="col-xs-3 ">
					  <!-- small box -->
					  <div class="small-box bg-green">
						<div class="inner">
						  <h3><?= $numMemos ?></h3>
						  <p>Viajes</p>
						</div>
						<div class="icon">
						  <i class="fa fa fa-map-signs"></i>
						</div>
						<a href="#" class="small-box-footer">Ir a Viajes <i class="fa fa-arrow-circle-right"></i></a>
					  </div>
					</div><!-- ./col -->
					
			</div><!-- /.row -->
		</div><!--col-md3 -->
	<section class="row" style="padding: 20px;">
        <?= Alert::widget() ?> 
        <?php echo $content ?>
    </section>
</div>




<footer class="main-footer">
	<div class="pull-right hidden-xs">
			<b>Version</b> 1.0
	</div>
	<strong>Copyright &copy; 2015 <a href="mailto:carlosbdf@yahoo.es">Ing. Carlos Beyersdorf</a>.</strong> Todos los derechos
		reservados.
</footer>


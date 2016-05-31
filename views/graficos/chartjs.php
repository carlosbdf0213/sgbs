<?php
use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;
use yii\helpers\Url;
use dosamigos\chartjs\ChartJs;

$numEventos =1 ;
$numDocumentos =2;
$numMemos =3;
$numSeguimientos =4;
?>

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Gráficos
            <small>Vista para análisis global</small>
          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-6">
              <!-- AREA CHART -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Cheques de Terceros en Cartera vs. Propios</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="chart">
					<?php echo ChartJs::widget([
						'type' => 'Radar',
						'options' => [
							'height' => 150,
							'width' => 150
						],
						'data' => [
							'labels' => ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio"],
							'datasets' => [
								[
									'label'=> "My First dataset",
									'fillColor'=> "rgba(220,220,220,0.2)",
									'strokeColor'=> "rgba(220,220,220,1)",
									'pointColor'=> "rgba(220,220,220,1)",
									'pointStrokeColor'=> "#fff",
									'pointHighlightFill'=> "#fff",
									'pointHighlightStroke'=> "rgba(220,220,220,1)",
									'data' => [65, 59, 90, 81, 56, 55, 40]
								],
								[
									'label'=> "My Second dataset",
									'fillColor'=> "rgba(151,187,205,0.2)",
									'strokeColor'=> "rgba(151,187,205,1)",
									'pointColor'=> "rgba(151,187,205,1)",
									'pointStrokeColor'=> "#fff",
									'pointHighlightFill'=> "#fff",
									'pointHighlightStroke'=> "rgba(151,187,205,1)",
									'data' => [28, 48, 40, 19, 96, 27, 100]
								]
							]
						]
					]);
					?>
                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- DONUT CHART -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">IVA Compras vs. IVA Ventas</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body" >
					<?php echo ChartJs::widget([
						'type' => 'Bar',
						'options' => [
							'height' => 400,
							'width' => 400
						],
						'data' => [
							'labels' => ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio"],
							'datasets' => [
								[
									'fillColor' => "rgba(220,220,220,0.5)",
									'strokeColor' => "rgba(220,220,220,1)",
									'pointColor' => "rgba(220,220,220,1)",
									'pointStrokeColor' => "#fff",
									'data' => [65, 59, 90, 81, 56, 55, 40]
								],
								[
									'fillColor' => "rgba(151,187,205,0.5)",
									'strokeColor' => "rgba(151,187,205,1)",
									'pointColor' => "rgba(151,187,205,1)",
									'pointStrokeColor' => "#fff",
									'data' => [28, 48, 40, 19, 96, 27, 100]
								]
							]
						]
					]);
					?>					
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col (LEFT) -->
            <div class="col-md-6">
              <!-- LINE CHART -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Totales: Compras vs Ventas</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="chart" >
					<?php echo ChartJs::widget([
						'type' => 'Line',
						'options' => [
							'height' => 400,
							'width' => 400
						],
						'data' => [
							'labels' => ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio"],
							'datasets' => [
								[
									'fillColor' => "rgba(220,220,220,0.5)",
									'strokeColor' => "rgba(220,220,220,1)",
									'pointColor' => "rgba(220,220,220,1)",
									'pointStrokeColor' => "#fff",
									'data' => [65, 59, 90, 81, 56, 55, 40]
								],
								[
									'fillColor' => "rgba(151,187,205,0.5)",
									'strokeColor' => "rgba(151,187,205,1)",
									'pointColor' => "rgba(151,187,205,1)",
									'pointStrokeColor' => "#fff",
									'data' => [28, 48, 40, 19, 96, 27, 100]
								]
							]
						]
					]);
					?>					

                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

              <!-- BAR CHART -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Destinos de las Compras</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body">
                  <div class="chart" >
					<?php echo ChartJs::widget([
						'type' => 'Pie',
						'options' => [
							'height' => 400,
							'width' => 400
						],
						
									'data' => [
											[
												'value'=> 300,
												'color'=>"#F7464A",
												'highlight'=> "#FF5A5E",
												'label'=> "Bienes de Uso"
											],
											[
												'value'=> 50,
												'color'=> "#46BFBD",
												'highlight'=> "#5AD3D1",
												'label'=> "Bienes de Cambio"
											],
											[
												'value'=> 100,
												'color'=> "#FDB45C",
												'highlight'=> "#FFC870",
												'label'=> "Servicios"
											],
											[
												'value'=> 90,
												'color'=> "#949FB1",
												'highlight'=> "#A8B3C5",
												'label'=> "Locaciones"
											],
											[
												'value'=> 100,
												'color'=> "#013ADF",
												'highlight'=> "#0080FF",
												'label'=> "Gastos"
											],
									]

					]);
					?>

                  </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col (RIGHT) -->
          </div><!-- /.row -->

        </section><!-- /.content -->
 


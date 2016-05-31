<?php
use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;
use yii\helpers\Url;
use dosamigos\chartjs\ChartJs;


?>
 
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Combustibles
            <small>Vista para análisis global</small>
          </h1>

        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-sm-6">

              <!-- DONUT CHART -->
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Consumo de Combustible Lts/Km</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <div class="box-body" >
					<div class="chart" >
						<?php echo ChartJs::widget([
							'type' => 'Bar',
							'options' => [
								'height' => 400,
								'width' => 400
							],
							'data' => [
								'labels' => $etiq_l,
								'datasets' => [
									[
										'fillColor' => "rgba(151,187,205,0.5)",
										'strokeColor' => "rgba(151,187,205,1)",
										'pointColor' => "rgba(151,187,205,1)",
										'pointStrokeColor' => "#fff",
										'data' => $datos_l,
									]
								]
							]
						]);
						?>		
					</div>  <!-- /.chart -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col (LEFT) -->
            <div class="col-sm-6">
              <!-- LINE CHART -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Rendimiento $/Kms</h3>
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
							'labels' => $etiq_r,
							'datasets' => [
								[
									'fillColor' => "rgba(220,220,220,0.5)",
									'strokeColor' => "rgba(220,220,220,1)",
									'pointColor' => "rgba(220,220,220,1)",
									'pointStrokeColor' => "#fff",
									'data' => $datos_r
								],
							]
						]
					]);
					?>					

                  </div> <!-- /.chart -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            </div><!-- /.col (RIGHT) -->
          </div><!-- /.row -->

        </section><!-- /.content -->
 

 
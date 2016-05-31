<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\searchmodels\AgendaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Agenda';
$this->params['breadcrumbs'][] = $this->title;
?>


	<div class="content" style="padding-right: 20px;">
	
		<div class="box box-primary">
		
            <div class="box-header">
			
                  <i class="fa fa-calendar"></i>
				  
                  <h3 class="box-title"><?= Html::encode($this->title) ?></h3>
				  
                  <div class="pull-right box-tools">
         
                    <?= Html::a('', ['create'], ['class' => 'btn btn-primary btn-sm fa fa-magic','title' => 'Nuevo']) ?>
                        
                    <button class="btn btn-primary btn-sm" data-widget="remove" title="Cerrar"><i class="fa fa-times"></i></button>
					
                  </div><!-- /. tools -->
				  
            </div><!-- /.box-header -->
				
			<div class="box-body">
			
				<?= \yii2fullcalendar\yii2fullcalendar::widget(array(
					  'events'=> $eventos,
				  ));
				?>
				
			</div><!-- /.box-body -->
			
			<div class="box-footer">
		
				<small><b><i>Tabla de <?= Html::encode($this->title) ?></i></b> </small>
				
			</div><!-- /.box-footer -->

			
		</div><!-- /.box -->
		
	</div>

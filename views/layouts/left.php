
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
		<img src="<?= Yii::getAlias('@web') . '/images/logo.png'?>." height="142" width="142"  class="img-circle" alt="Sistema"/>
        </div>


        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => [

                    ['label' => 'Menu Lateral', 'options' => ['class' => 'header']],
                    ['label' => 'Reportes', 'icon' => 'fa fa-print', 
							'url' => ['#'],
							'options'=>['class'=>'dropdown'],
							'template' => '<a href="{url}" target="_blank" class="href_class">{icon}{label}</a>',
							'items' => [
								['label' => 'IVA Compras', 'icon' => 'fa fa-line-chart', 'url' => ['../../reports/ivacompras.php'], 'template' => '<a href="{url}" target="_blank" class="href_class">{icon}{label}</a>',],
								['label' => 'IVA Ventas',  'icon' => 'fa fa-area-chart', 'url' => ['../../reports/ivaventas.php'], 'template' => '<a href="{url}" target="_blank" class="href_class">{icon}{label}</a>',],
								['label' => 'Cheques',  'icon' => 'fa fa-area-chart', 'url' => ['../../reports/cheques.php'], 'template' => '<a href="{url}" target="_blank" class="href_class">{icon}{label}</a>',],
							]
					],					
['label' => 'Gráficos', 'icon' => 'fa fa-pie-chart',
							'url' => ['#'],
							'options'=>['class'=>'dropdown'],
							'template' => '<a href="{url}" class="href_class">{icon}{label}</a>',
							'items' => [
								['label' => 'Muestras', 'icon' => 'fa fa-line-chart', 'url' => ['/graficos/chartjs']],
								['label' => 'Cheques',  'icon' => 'fa fa-area-chart', 'url' => ['/graficos/cheques']],
								['label' => 'Combustibles',  'icon' => 'fa  fa-bar-chart', 'url' => ['/graficos/combustibles']],
							]
					],
					
				],
            ]
        ) ?>

    </section>

</aside>

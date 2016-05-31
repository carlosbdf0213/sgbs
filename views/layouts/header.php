<?php
use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

    <?= Html::a('<span class="logo-mini">SGI</span><span class="logo-lg">' . 'GESTION INTEGRAL' . '</span>', Yii::$app->homeUrl, ['class' => 'logo']) ?>

    <nav class="navbar navbar-static-top" role="navigation">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">

            <ul class="nav navbar-nav">
                <li class="dropdown notifications-menu">
                    <a href="<?= Url::to(["/"]); ?>" >
                        <i class="fa fa-home"> Inicio</i>
                    </a>
				</li>
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-file-o"> Archivos</i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?= Url::to(["/parametros/update?id=1"]); ?>">
                                <i class="fa fa-gears text-orange"></i> Parámetros
                            </a>
                        </li>
						<li class="divider"></li>
                        <li>
                            <a href="<?= Url::to(["/camiones/index/"]); ?>">
                                <i class="fa fa-truck text-aqua"></i> Camiones
                            </a>
                        </li>
                        <li>
                            <a href="<?= Url::to(["/choferes/index/"]); ?>">
                                <i class="fa fa-chrome text-red"></i> Choferes
                            </a>
                        </li>
						<li>
                            <a href="<?= Url::to(["/multas/index/"]); ?>">
                                <i class="fa fa-maxcdn text-red"></i> Multas
                            </a>
                        </li>  
						<li>
                            <a href="<?= Url::to(["/polizas/index/"]); ?>">
                                <i class="fa fa-pinterest-square text-blue"></i> Pólizas
                            </a>
                        </li>						<li class="divider"></li>
                        <li>
                            <a href="<?= Url::to(["/proveedores/index/"]); ?>">
                                <i class="fa fa-industry text-green"></i> Proveedores
                            </a>
                        </li>
                        <li>
                            <a href="<?= Url::to(["/clientes/index/"]); ?>">
                                <i class="fa fa-users text-red"></i> Clientes
                            </a>
                        </li>
						<li class="divider"></li>
	                   <li>
                            <a href="<?= Url::to(["/cajas/index/"]); ?>">
                                <i class="fa fa-exclamation-triangle text-red"></i> Cajas
                            </a>
                        </li>
                    </ul>
                </li>
				
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-contao"> Compras</i>
                    </a>
                    <ul class="dropdown-menu">
                         <li>
                            <a href="<?= Url::to(["/compras/index/"]); ?>">
                                <i class="fa fa-creative-commons text-aqua"></i> Comprobates de Compra
                            </a>
                        </li>
                       
                    </ul>
                </li>
				
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-vimeo"> Ventas</i>
                    </a>
                    <ul class="dropdown-menu">
                         <li>
                            <a href="#">
                                <i class="fa fa-columns text-aqua"></i> Comprobantes de Venta
                            </a>
                        </li>
                       
                    </ul>
                </li>	
				
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bank"> Bancos</i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?= Url::to(["/bancos/index/"]); ?>">
                                <i class="fa fa-bank"></i> Bancos
                            </a>
                        </li>
                        <li>
                            <a href="<?= Url::to(["/cuentas/index/"]); ?>">
                                <i class="fa fa-list-alt text-aqua"></i> Cuentas Bancarias
                            </a>
                        </li>
                        <li>
                            <a href="<?= Url::to(["/tipoctabancaria/index/"]); ?>">
                                <i class="fa fa-navicon text-aqua"></i> Tipos de Cuenta
                            </a>
                        </li>
                        <li>
                            <a href="<?= Url::to(["/operacionesbancarias/index/"]); ?>">
                                <i class="fa fa-tag text-aqua"></i> Operaciones Bancarias
                            </a>
                        </li>
						<li class="divider"></li>
                        <li>
                            <a href="<?= Url::to(["/movbancos/todos/"]); ?>">
                                <i class="fa fa-retweet text-aqua"></i> Movimientos Bancarios
                            </a>
                        </li>    
						<li>
                            <a href="<?= Url::to(["/movbancos/depositos/"]); ?>">
                                <i class="fa fa-plus-square text-green"></i> Depósitos
                            </a>
                        </li>                      
                        <li>
                            <a href="<?= Url::to(["/movbancos/transferencias/"]); ?>">
                                <i class="fa fa-exchange text-aqua"></i> Transferencias
                            </a>
                        </li>                      
                        <li>
                            <a href="<?= Url::to(["/movbancos/extracciones/"]); ?>">
                                <i class="fa fa-minus-square text-red"></i> Extracciones
                            </a>
                        </li>                      
					</ul>
                </li>
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-exclamation-triangle"> Cheques</i>
                    </a>
                    <ul class="dropdown-menu">
                         <li>
                            <a href="<?= Url::to(["/cheques/propios"]); ?>">
                                <i class="fa fa-exclamation-triangle text-orange"></i> Cheques Propios
                            </a>
                        </li>
                         <li>
                            <a href="<?= Url::to(["/cheques/terceros"]); ?>">
                                <i class="fa fa-exclamation-circle text-green"></i> Cheques de Terceros
                            </a>
                        </li>                     
                    </ul>
                </li>
								
				<li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-map-signs"> Viajes</i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?= Url::to(["/viajes/index"]); ?>">
                                <i class="fa fa-map-signs text-aqua"></i> Registro de Viaje
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-check-square-o text-red"></i> Imputación de Gastos
                            </a>
                        </li>
                         <li>
                            <a href="<?= Url::to(["/combustibles/index"]); ?>">
                                <i class="glyphicon glyphicon-tint text-blue"></i> Combustibles
                            </a>
                        </li>                   </ul>
                </li>
			
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-print"> Reportes</i>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#">
                                <i class="fa  fa-file-text-o text-red"></i> Libro IVA Compras
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa  fa-file-text text-blue"></i> Libro IVA Ventas
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-book text-green"></i> Libro Bancos
                            </a>
                        </li>
                    </ul>
                </li>



            </ul>
        </div>
    </nav>
</header>

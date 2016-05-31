<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;

use app\models\Cheques;
use app\models\Combustibles;

class GraficosController extends Controller
{
	public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    public function actionIndex(){

        return $this->render('chartjs');
    }
	
    public function actionChartjs(){

        return $this->render('chartjs');
    }

    public function actionCombustibles(){
		
		$ultimos = 6;
        $combustiblesModel = new Combustibles();
        $combustibles = $combustiblesModel->find()			
			->limit(6)
			->orderBy('id DESC')
			->where(['=', 'id_camion', 1])
			->all();
			
		$e_l_uno = ''; $e_l_dos = ''; $e_l_tres = ''; $e_l_cuatro = ''; $e_l_cinco = ''; $e_l_seis = '';  // etiqueta_litros_(pos)
		$e_r_uno = ''; $e_r_dos = ''; $e_r_tres = ''; $e_r_cuatro = ''; $e_r_cinco = ''; $e_r_seis = '';;  // etiqueta_rendimiento_(pos)
		$d_l_uno = 0; $d_l_dos = 0; $d_l_tres = 0; $d_l_cuatro = 0; $d_l_cinco = 0;  $d_l_seis = 0;   // datos_litros_(pos)
		$d_r_uno = 0; $d_r_dos = 0; $d_r_tres = 0; $d_r_cuatro = 0; $d_r_cinco = 0;  $d_r_seis = 0;   // datos_rendimiento_(pos)
		
        foreach($combustibles as $combustible) {
            switch($ultimos) {
                case 1:
					$e_l_uno = $combustible->km_bitacora;
                    $d_l_uno = $combustible->litros;
                    break;
                case 2:
					$e_l_dos = $combustible->km_bitacora;
                    $d_l_dos = $combustible->litros;
                    break;
                case 3:
					$e_l_tres = $combustible->km_bitacora;
                    $d_l_tres = $combustible->litros;
                    break;
                case 4:
					$e_l_cuatro = $combustible->km_bitacora;
                    $d_l_cuatro = $combustible->litros;
                    break;
                case 5:
					$e_l_cinco = $combustible->km_bitacora;
                    $d_l_cinco = $combustible->litros;
                    break;
                case 6:
					$e_l_seis = $combustible->km_bitacora;
                    $d_l_seis = $combustible->litros;
                    break;
			}
			$ultimos = $ultimos - 1;
		}
		$ultimos = 6;

        $combustiblesModel = new Combustibles();
        $rendimientos = $combustiblesModel->find()			
			->limit(6)
			->orderBy('id DESC')
			->where(['=', 'id_camion', 1])
			->all();
		
        foreach($rendimientos as $rendimiento) {
            switch($ultimos) {
                case 1:
					$e_r_uno = '6to';//round($combustible->importe / $combustible->litros,2);
                    $d_r_uno = round($rendimiento->rendimiento,2);
                    break;
                case 2:
					$e_r_dos = '5to';//round($combustible->importe / $combustible->litros,2);
                    $d_r_dos = round($rendimiento->rendimiento,2);
                    break;
                case 3:
					$e_r_tres = '4to';//round($combustible->importe / $combustible->litros,2);
                    $d_r_tres = round($rendimiento->rendimiento,2);
                    break;
                case 4:
					$e_r_cuatro = '3ro';//round($combustible->importe / $combustible->litros,2);
                    $d_r_cuatro = round($rendimiento->rendimiento,2);
                    break;
                case 5:
					$e_r_cinco = '2do';//round($combustible->importe / $combustible->litros,2);
                    $d_r_cinco = round($rendimiento->rendimiento,2);
                    break;
                case 6:
					$e_r_seis = 'Ultimo';//round($combustible->importe / $combustible->litros,2);
                    $d_r_seis = round($rendimiento->rendimiento,2);
                    break;
			}
			$ultimos = $ultimos - 1;
		}

		$etiq_l = [$e_l_uno, $e_l_dos, $e_l_tres, $e_l_cuatro, $e_l_cinco, $e_l_seis];
		$etiq_r = [$e_r_uno, $e_r_dos, $e_r_tres, $e_r_cuatro, $e_r_cinco, $e_r_seis];
		$datos_l = [$d_l_uno, $d_l_dos, $d_l_tres, $d_l_cuatro, $d_l_cinco, $d_l_seis];
		$datos_r = [$d_r_uno, $d_r_dos, $d_r_tres, $d_r_cuatro, $d_r_cinco, $d_r_seis];
		
        return $this->render('combustibles' , ['etiq_l'=>$etiq_l, 'etiq_r'=>$etiq_r, 'datos_l'=>$datos_l, 'datos_r'=>$datos_r]);
    }
	
    public function actionCheques(){
		
		$hoy = date('Y-m-d');
		$sgte = date('Y-m-d', strtotime("+30 day"));
		
		$sumPropios = (new \yii\db\Query())
			->select('*')
			->from('cheques')
			->where(['>=', 'fecha', $hoy])
			->andwhere(['<=', 'fecha', $sgte])
			->where(['>', 'propios', 0])
			->sum('importe');

		$sumTerceros = (new \yii\db\Query())
			->select('*')
			->from('cheques')
			->where(['>=', 'fecha', $hoy])
			->andwhere(['<=', 'fecha', $sgte])
			->where(['not like', 'propios', 1])
			->sum('importe');	
			
        $chequesA = (new \yii\db\Query())
			->select('*')
			->from('cheques')
			->where(['>=', 'fecha', $hoy])
			->andwhere(['<=', 'fecha', $sgte]);
			// ->where(['not like', 'propios', 1])     ->where(['>', 'propios', 0])
			//->sum('importe');

		$ene = 0; $feb = 0; $mar = 0; $abr = 0; $may = 0; $jun = 0; $jul = 0; $ago = 0; $sep = 0; $oct = 0; $nov = 0; $dic = 0;
		$tene = 0; $tfeb = 0; $tmar = 0; $tabr = 0; $tmay = 0; $tjun = 0; $tjul = 0; $tago = 0; $tsep = 0; $toct = 0; $tnov = 0; $tdic = 0;
		
        $chequesModel = new Cheques();
        $cheques = $chequesModel->find()->all();
		
		$propios = 0; $terceros = 0;

		$a30 = date("Y-m-d H:i:s", strtotime ("-30days")); 
		$p30 = date("Y-m-d H:i:s", strtotime ("+30days")); 
		$a365 = date("Y-m-d H:i:s", strtotime ("-365days")); 
		
        foreach($cheques as $cheque) {
			
			if ($cheque->fecha >= $a30 AND $cheque->fecha <= $p30) {
				
				if ($cheque->propios==1) {
					$propios = $propios + $cheque->importe;
				} else {
					$terceros = $terceros + $cheque->importe;
				};
			}	
			if ($cheque->fecha >= $a365) {

				$fecha = explode("-", $cheque->fecha);
				$mes = $fecha[1]; //   fecha[0] dia fecha[2] año
				
				switch($mes) {
						case 1:
							$ene = $ene + $cheque->importe;
							break;
						case 2:
							$feb = $feb + $cheque->importe;
							break;
						case 3:
							$mar = $mar + $cheque->importe;
							break;
						case 4:
							$abr = $abr + $cheque->importe;
							break;
						case 5:
							$may = $may + $cheque->importe;
							break;
						case 6:
							$jun = $jun + $cheque->importe;
							break;
						case 7:
							$jul = $jul + $cheque->importe;
							break;
						case 8:
							$ago = $ago + $cheque->importe;
							break;
						case 9:
							$sep = $sep + $cheque->importe;
							break;
						case 10:
							$oct = $oct + $cheque->importe;
							break;
						case 11:
							$nov = $nov + $cheque->importe;
							break;
						case 12:
							$dic = $dic + $cheque->importe;
							break;					
					}  
			
            }  
          
        }
		$etiquetas = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
		$datos = [$ene, $feb, $mar, $abr, $may, $jun, $jul, $ago, $sep, $oct, $nov, $dic];
		$tdatos = [$tene, $tfeb, $tmar, $tabr, $tmay, $tjun, $tjul, $tago, $tsep, $toct, $tnov, $tdic];
		
        return $this->render('cheques' , [
					'datos'=>$datos, 
					'tdatos'=>$tdatos, 
					'propios'=>$propios, 
					'terceros'=>$terceros, 
					'etiquetas'=>$etiquetas]
			);
    }
}

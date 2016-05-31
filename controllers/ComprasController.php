<?php

namespace app\controllers;

use Yii;
use app\models\Compras;
use app\models\searchmodels\ComprasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ComprasController implements the CRUD actions for Compras model.
 */
 

use app\models\Tipocomprobante;
use app\models\Proveedores;
use app\models\Destinos;

class ComprasController extends Controller
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

    /**
     * Lists all Compras models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ComprasSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

		$tipocomprobanteModel = new Tipocomprobante();
        $tipocomprobante = $tipocomprobanteModel->find()->all();
		
		$proveedoresModel = new Proveedores();
        $proveedores = $proveedoresModel->find()->all();
		
		$destinosModel = new Destinos();
        $destinos = $destinosModel->find()->all();
		
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
			'tipocomprobante' => $tipocomprobante,
			'proveedores' => $proveedores,
			'destinos' => $destinos,
        ]);
    }

    /**
     * Displays a single Compras model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
		
		$tipocomprobanteModel = new Tipocomprobante();
        $tipocomprobante = $tipocomprobanteModel->find()->all();
		
		$proveedoresModel = new Proveedores();
        $proveedores = $proveedoresModel->find()->all();
		
		$destinosModel = new Destinos();
        $destinos = $destinosModel->find()->all();
		
		$model->fecha = $model->formattedFecha;	
		
        return $this->render('view', [
            'model' => $model,
			'tipocomprobante' => $tipocomprobante,
			'proveedores' => $proveedores,
			'destinos' => $destinos,
        ]);
    }

    /**
     * Creates a new Compras model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Compras();

		$tipocomprobanteModel = new Tipocomprobante();
        $tipocomprobante = $tipocomprobanteModel->find()->all();
		
		$proveedoresModel = new Proveedores();
        $proveedores = $proveedoresModel->find()->all();
		
		$destinosModel = new Destinos();
        $destinos = $destinosModel->find()->all();
		
		$model->fecha = $model->formattedFecha;	

		$model->tasa_1_iva = 21;
		$model->tasa_2_iva = 10.5;
		$model->tasa_3_iva = 27;
		$model->tasa_4_iva = 5;
		$model->tasa_5_iva = 2.4;
	
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
				'model' => $model,
				'tipocomprobante' => $tipocomprobante,
				'proveedores' => $proveedores,
				'destinos' => $destinos,
            ]);
        }
    }

    /**
     * Updates an existing Compras model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

		$tipocomprobanteModel = new Tipocomprobante();
        $tipocomprobante = $tipocomprobanteModel->find()->all();
		
		$proveedoresModel = new Proveedores();
        $proveedores = $proveedoresModel->find()->all();
		
		$destinosModel = new Destinos();
        $destinos = $destinosModel->find()->all();
		
		$model->fecha = $model->formattedFecha;	
		
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
				'model' => $model,
				'tipocomprobante' => $tipocomprobante,
				'proveedores' => $proveedores,
				'destinos' => $destinos,
            ]);
        }
    }

    /**
     * Deletes an existing Compras model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Compras model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Compras the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Compras::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

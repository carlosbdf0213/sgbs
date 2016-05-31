<?php

namespace app\controllers;

use Yii;
use app\models\Cheques;
use app\models\searchmodels\ChequesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ChequesController implements the CRUD actions for Cheques model.
 */
use app\models\Cajas;
use app\models\Bancos;
use app\models\Proveedores;
use app\models\Clientes;

class ChequesController extends Controller
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
     * Lists all Cheques models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ChequesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		
		$cajasModel = new Cajas();
        $cajas = $cajasModel->find()->all();
		
		$bancosModel = new Bancos();
        $bancos = $bancosModel->find()->all();
		
		$proveedoresModel = new Proveedores();
        $proveedores = $proveedoresModel->find()->all();
		
		$clientesModel = new Clientes();
        $clientes = $clientesModel->find()->all();	
		
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
			'cajas' => $cajas,
			'bancos' => $bancos,
			'proveedores' => $proveedores,
			'clientes' => $clientes,			
        ]);
    }

    public function actionPropios()
    {
        $searchModel = new ChequesSearch();
		$searchModel->setPropios('1');
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		
		$cajasModel = new Cajas();
        $cajas = $cajasModel->find()->all();
		
		$bancosModel = new Bancos();
        $bancos = $bancosModel->find()->all();
		
		$proveedoresModel = new Proveedores();
        $proveedores = $proveedoresModel->find()->all();
		
		$clientesModel = new Clientes();
        $clientes = $clientesModel->find()->all();	
		
        return $this->render('propios', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
			'cajas' => $cajas,
			'bancos' => $bancos,
			'proveedores' => $proveedores,
			'clientes' => $clientes,
        ]);
    }
    public function actionTerceros()
    {
        $searchModel = new ChequesSearch();
		$searchModel->setPropios('0');
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		
		$cajasModel = new Cajas();
        $cajas = $cajasModel->find()->all();
		
		$bancosModel = new Bancos();
        $bancos = $bancosModel->find()->all();
		
		$proveedoresModel = new Proveedores();
        $proveedores = $proveedoresModel->find()->all();
		
		$clientesModel = new Clientes();
        $clientes = $clientesModel->find()->all();	
		
        return $this->render('terceros', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
			'cajas' => $cajas,
			'bancos' => $bancos,
			'proveedores' => $proveedores,
			'clientes' => $clientes,
        ]);
    }

    /**
     * Displays a single Cheques model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
		$model = $this->findModel($id);
				
		$cajasModel = new Cajas();
        $cajas = $cajasModel->find()->all();
		
		$bancosModel = new Bancos();
        $bancos = $bancosModel->find()->all();
		
		$proveedoresModel = new Proveedores();
        $proveedores = $proveedoresModel->find()->all();
		
		$clientesModel = new Clientes();
        $clientes = $clientesModel->find()->all();	

		$model->fecha = $model->formattedFecha;			
		$model->fecha_venc = $model->formattedFechaVenc;			
		$model->fecha_cobro = $model->formattedFechaCobro;	
		
        return $this->render('view', [
            'model' => $model,
			'cajas' => $cajas,
			'bancos' => $bancos,
			'proveedores' => $proveedores,
			'clientes' => $clientes,
        ]);
    }

    /**
     * Creates a new Cheques model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Cheques();
		
		$cajasModel = new Cajas();
        $cajas = $cajasModel->find()->all();
		
		$bancosModel = new Bancos();
        $bancos = $bancosModel->find()->all();
		
		$proveedoresModel = new Proveedores();
        $proveedores = $proveedoresModel->find()->all();
		
		$clientesModel = new Clientes();
        $clientes = $clientesModel->find()->all();	

		$model->fecha = $model->formattedFecha;			
		$model->fecha_venc = $model->formattedFechaVenc;			
		$model->fecha_cobro = $model->formattedFechaCobro;	
		
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
				'cajas' => $cajas,
				'bancos' => $bancos,
				'proveedores' => $proveedores,
				'clientes' => $clientes,
			]);
        }
    }


    /**
     * Updates an existing Cheques model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
		
		$cajasModel = new Cajas();
        $cajas = $cajasModel->find()->all();
		
		$bancosModel = new Bancos();
        $bancos = $bancosModel->find()->all();
		
		$proveedoresModel = new Proveedores();
        $proveedores = $proveedoresModel->find()->all();
		
		$clientesModel = new Clientes();
        $clientes = $clientesModel->find()->all();	
		
		$model->fecha = $model->formattedFecha;			
		$model->fecha_venc = $model->formattedFechaVenc;			
		$model->fecha_cobro = $model->formattedFechaCobro;	
		
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
				'cajas' => $cajas,
				'bancos' => $bancos,
				'proveedores' => $proveedores,
				'clientes' => $clientes,
				]);
        }
    }

    /**
     * Deletes an existing Cheques model.
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
     * Finds the Cheques model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Cheques the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Cheques::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

<?php

namespace app\controllers;

use Yii;
use app\models\Movbancos;
use app\models\searchmodels\MovbancosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MovbancosController implements the CRUD actions for Movbancos model.
 */
use app\models\Cajas;
use app\models\Bancos;
use app\models\Operacionesbancarias;
use app\models\Cuentas;

class MovbancosController extends Controller
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
     * Lists all Movbancos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MovbancosSearch();
		
		$searchModel->setTipooperacion('Todas');
		
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		
		$cajasModel = new Cajas();
        $cajas = $cajasModel->find()->all();
		
		$bancosModel = new Bancos();
        $bancos = $bancosModel->find()->all();

		$cuentasModel = new Cuentas();
        $cuentas = $cuentasModel->find()->all();

		$operacionesbancariasModel = new Operacionesbancarias();
        $operacionesbancarias = $operacionesbancariasModel->find()->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
			'cajas' => $cajas,
			'bancos' => $bancos,
			'cuentas' => $cuentas,
			'operacionesbancarias' => $operacionesbancarias,
        ]);
    }

    public function actionTodos()
    {
        $searchModel = new MovbancosSearch();

		$searchModel->setTipooperacion('Todas');

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		
		$cajasModel = new Cajas();
        $cajas = $cajasModel->find()->all();
		
		$bancosModel = new Bancos();
        $bancos = $bancosModel->find()->all();

		$cuentasModel = new Cuentas();
        $cuentas = $cuentasModel->find()->all();

		$operacionesbancariasModel = new Operacionesbancarias();
        $operacionesbancarias = $operacionesbancariasModel->find()->all();
		
        return $this->render('todos', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
			'cajas' => $cajas,
			'bancos' => $bancos,
			'cuentas' => $cuentas,
			'operacionesbancarias' => $operacionesbancarias,
        ]);
    }

    public function actionDepositos()
    {
        $searchModel = new MovbancosSearch();

		$searchModel->setTipooperacion('Depositos');
		
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

		$cajasModel = new Cajas();
        $cajas = $cajasModel->find()->all();
		
		$bancosModel = new Bancos();
        $bancos = $bancosModel->find()->all();

		$cuentasModel = new Cuentas();
        $cuentas = $cuentasModel->find()->all();

		$operacionesbancariasModel = new Operacionesbancarias();
        $operacionesbancarias = $operacionesbancariasModel->find()->all();

        return $this->render('depositos', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
			'cajas' => $cajas,
			'bancos' => $bancos,
			'cuentas' => $cuentas,
			'operacionesbancarias' => $operacionesbancarias,
        ]);
    }

    public function actionTransferencias()
    {
        $searchModel = new MovbancosSearch();
		
		$searchModel->setTipooperacion('Transferencias');

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

		$cajasModel = new Cajas();
        $cajas = $cajasModel->find()->all();
		
		$bancosModel = new Bancos();
        $bancos = $bancosModel->find()->all();

		$cuentasModel = new Cuentas();
        $cuentas = $cuentasModel->find()->all();

		$operacionesbancariasModel = new Operacionesbancarias();
        $operacionesbancarias = $operacionesbancariasModel->find()->all();

        return $this->render('transferencias', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
			'cajas' => $cajas,
			'bancos' => $bancos,
			'cuentas' => $cuentas,
			'operacionesbancarias' => $operacionesbancarias,
        ]);
    }

    public function actionExtracciones()
    {
		
        $searchModel = new MovbancosSearch();
		
		$searchModel->setTipooperacion('Extracciones');

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		
		$cajasModel = new Cajas();
        $cajas = $cajasModel->find()->all();
		
		$bancosModel = new Bancos();
        $bancos = $bancosModel->find()->all();

		$cuentasModel = new Cuentas();
        $cuentas = $cuentasModel->find()->all();

		$operacionesbancariasModel = new Operacionesbancarias();
        $operacionesbancarias = $operacionesbancariasModel->find()->all();

        return $this->render('extracciones', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
			'cajas' => $cajas,
			'bancos' => $bancos,
			'cuentas' => $cuentas,
			'operacionesbancarias' => $operacionesbancarias,
        ]);
    }
    /**
     * Displays a single Movbancos model.
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

		$cuentasModel = new Cuentas();
        $cuentas = $cuentasModel->find()->all();

		$operacionesbancariasModel = new Operacionesbancarias();
        $operacionesbancarias = $operacionesbancariasModel->find()->all();
		
		$model->fecha = $model->formattedFecha;		
		
        return $this->render('view', [
            'model' => $model,
 			'cajas' => $cajas,
			'bancos' => $bancos,
			'cuentas' => $cuentas,
			'operacionesbancarias' => $operacionesbancarias,
       ]);
    }

    /**
     * Creates a new Movbancos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Movbancos();
		
		$cajasModel = new Cajas();
        $cajas = $cajasModel->find()->all();
		
		$bancosModel = new Bancos();
        $bancos = $bancosModel->find()->all();

		$cuentasModel = new Cuentas();
        $cuentas = $cuentasModel->find()->all();

		$operacionesbancariasModel = new Operacionesbancarias();
        $operacionesbancarias = $operacionesbancariasModel->find()->all();
		
		$model->fecha = $model->formattedFecha;	
		
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
				'cajas' => $cajas,
				'bancos' => $bancos,
				'cuentas' => $cuentas,
				'operacionesbancarias' => $operacionesbancarias,
            ]);
        }
    }

    /**
     * Updates an existing Movbancos model.
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

		$cuentasModel = new Cuentas();
        $cuentas = $cuentasModel->find()->all();

		$operacionesbancariasModel = new Operacionesbancarias();
        $operacionesbancarias = $operacionesbancariasModel->find()->all();
		
		$model->fecha = $model->formattedFecha;	
		
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
				'cajas' => $cajas,
				'bancos' => $bancos,
				'cuentas' => $cuentas,
				'operacionesbancarias' => $operacionesbancarias,
            ]);
        }
    }

    /**
     * Deletes an existing Movbancos model.
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
     * Finds the Movbancos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Movbancos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Movbancos::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

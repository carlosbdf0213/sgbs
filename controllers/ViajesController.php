<?php

namespace app\controllers;

use Yii;
use app\models\Viajes;
use app\models\searchmodels\ViajesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ViajesController implements the CRUD actions for Viajes model.
 */
use app\models\Choferes;
use app\models\Camiones;

class ViajesController extends Controller
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
     * Lists all Viajes models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ViajesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		
		$choferesModel = new Choferes();
		$choferes = $choferesModel->find()->all();
		
		$camionesModel = new Camiones();
		$camiones = $camionesModel->find()->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
			'choferes' => $choferes,
			'camiones' => $camiones,
        ]);
    }

    /**
     * Displays a single Viajes model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
		
		$choferesModel = new Choferes();
		$choferes = $choferesModel->find()->all();
		
		$camionesModel = new Camiones();
		$camiones = $camionesModel->find()->all();

		$model->fecha_salida = $model->formattedFechaSalida;			
		$model->fecha_llegada = $model->formattedFechaLlegada;			
		
        return $this->render('view', [
                'model' => $model,
				'choferes' => $choferes,
				'camiones' => $camiones,
			]);
    }

    /**
     * Creates a new Viajes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Viajes();
		
		$choferesModel = new Choferes();
		$choferes = $choferesModel->find()->all();
				
		$camionesModel = new Camiones();
		$camiones = $camionesModel->find()->all();

		$model->fecha_salida = $model->formattedFechaSalida;			
		$model->fecha_llegada = $model->formattedFechaLlegada;			

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
				'choferes' => $choferes,
				'camiones' => $camiones,
            ]);
        }
    }

    /**
     * Updates an existing Viajes model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

		$choferesModel = new Choferes();
		$choferes = $choferesModel->find()->all();
				
		$camionesModel = new Camiones();
		$camiones = $camionesModel->find()->all();
		
		$model->fecha_salida = $model->formattedFechaSalida;			
		$model->fecha_llegada = $model->formattedFechaLlegada;			

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
				'choferes' => $choferes,
				'camiones' => $camiones,
            ]);
        }
    }

    /**
     * Deletes an existing Viajes model.
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
     * Finds the Viajes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Viajes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Viajes::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

<?php

namespace app\controllers;

use Yii;
use app\models\Multas;
use app\models\searchmodels\MultasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MultasController implements the CRUD actions for Multas model.
 */
 
use app\models\Choferes;


class MultasController extends Controller
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
     * Lists all Multas models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new MultasSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		
		$choferesModel = new Choferes();
		$choferes = $choferesModel->find()->all();
		
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
			'choferes' => $choferes,
        ]);
    }

    /**
     * Displays a single Multas model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
		
		$choferesModel = new Choferes();
		$choferes = $choferesModel->find()->all();
		
		$model->fecha = $model->formattedFecha;
		$model->fecha_venc = $model->formattedFechaVenc;
		$model->fecha_pago = $model->formattedFechaPago;
		
        return $this->render('view', [
            'model' => $model,
			'choferes' => $choferes,
        ]);
    }

    /**
     * Creates a new Multas model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Multas();
		
		$choferesModel = new Choferes();
		$choferes = $choferesModel->find()->all();
		
		$model->fecha = $model->formattedFecha;
		$model->fecha_venc = $model->formattedFechaVenc;
		$model->fecha_pago = $model->formattedFechaPago;
		
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
				'model' => $model,
				'choferes' => $choferes,
            ]);
        }
    }

    /**
     * Updates an existing Multas model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
		
		$choferesModel = new Choferes();
		$choferes = $choferesModel->find()->all();
		
		$model->fecha = $model->formattedFecha;
		$model->fecha_venc = $model->formattedFechaVenc;
		$model->fecha_pago = $model->formattedFechaPago;
		
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('update', [
                'model' => $model,
				'choferes' => $choferes,
            ]);
        }
    }

    /**
     * Deletes an existing Multas model.
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
     * Finds the Multas model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Multas the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Multas::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

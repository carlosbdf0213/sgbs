<?php

namespace app\controllers;

use Yii;
use app\models\Parametros;
use app\models\searchmodels\ParametrosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ParametrosController implements the CRUD actions for Parametros model.
 */
use app\models\Provincias;
use app\models\Tipodocimpositivo;
use app\models\Tiporesponsable;

class ParametrosController extends Controller
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
     * Lists all Parametros models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ParametrosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

		$provinciasModel = new Provincias();
        $provincias = $provinciasModel->find()->all();
		
		$tipodocimpositivoModel = new Tipodocimpositivo();
        $tipodocimpositivo = $tipodocimpositivoModel->find()->all();	

		$tiporesponsableModel = new Tiporesponsable();
        $tiporesponsable = $tiporesponsableModel->find()->all();
		
        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
			'provincias' => $provincias,
        ]);
    }

    /**
     * Displays a single Parametros model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
		$provinciasModel = new Provincias();
        $provincias = $provinciasModel->find()->all();
		
		$tipodocimpositivoModel = new Tipodocimpositivo();
        $tipodocimpositivo = $tipodocimpositivoModel->find()->all();	

		$tiporesponsableModel = new Tiporesponsable();
        $tiporesponsable = $tiporesponsableModel->find()->all();
		
        return $this->render('view', [
            'model' => $this->findModel($id),
			'provincias' => $provincias,
        ]);
    }

    /**
     * Creates a new Parametros model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Parametros();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Parametros model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

		$provinciasModel = new Provincias();
        $provincias = $provinciasModel->find()->all();
		
		$tipodocimpositivoModel = new Tipodocimpositivo();
        $tipodocimpositivo = $tipodocimpositivoModel->find()->all();	

		$tiporesponsableModel = new Tiporesponsable();
        $tiporesponsable = $tiporesponsableModel->find()->all();
		
		$model->fecha_inicio = $model->formattedFechaInicio;			
		$model->fecha_desde = $model->formattedFechaDesde;			
		$model->fecha_hasta = $model->formattedFechaHasta;		
		
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->goHome();
        } else {
            return $this->render('update', [
                'model' => $model,
       			'provincias' => $provincias,				
				'tipodocimpositivo' => $tipodocimpositivo,
				'tiporesponsable' => $tiporesponsable,
			]);
        }
    }

    /**
     * Deletes an existing Parametros model.
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
     * Finds the Parametros model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Parametros the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Parametros::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

<?php

namespace app\controllers;

use Yii;
use app\models\Choferes;
use app\models\searchmodels\ChoferesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ChoferesController implements the CRUD actions for Choferes model.
 */
use app\models\Provincias;
use app\models\Tipodocimpositivo;
use app\models\Tiporesponsable;
 
class ChoferesController extends Controller
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
     * Lists all Choferes models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ChoferesSearch();
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
           	'tipodocimpositivo' => $tipodocimpositivo,
           	'tiporesponsable' => $tiporesponsable,
		]);
    }

    /**
     * Displays a single Choferes model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
		
		$provinciasModel = new Provincias();
        $provincias = $provinciasModel->find()->all();
		
		$tipodocimpositivoModel = new Tipodocimpositivo();
        $tipodocimpositivo = $tipodocimpositivoModel->find()->all();	

		$tiporesponsableModel = new Tiporesponsable();
        $tiporesponsable = $tiporesponsableModel->find()->all();
		
		$model->fecha_ing = $model->formattedFechaIng;			
		$model->fecha_baja = $model->formattedFechaBaja;
		
		return $this->render('view', [
            'model' => $model,
           	'provincias' => $provincias,
           	'tipodocimpositivo' => $tipodocimpositivo,
           	'tiporesponsable' => $tiporesponsable,
        ]);
    }

    /**
     * Creates a new Choferes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Choferes();
		
		
		$provinciasModel = new Provincias();
        $provincias = $provinciasModel->find()->all();
		
		$tipodocimpositivoModel = new Tipodocimpositivo();
        $tipodocimpositivo = $tipodocimpositivoModel->find()->all();	

		$tiporesponsableModel = new Tiporesponsable();
        $tiporesponsable = $tiporesponsableModel->find()->all();
		
		$model->fecha_ing = $model->formattedFechaIng;			
		$model->fecha_baja = $model->formattedFechaBaja;
		
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        } else {
            return $this->render('create', [
                'model' => $model,
				'provincias' => $provincias,
				'tipodocimpositivo' => $tipodocimpositivo,
				'tiporesponsable' => $tiporesponsable,
            ]);
        }
    }

    /**
     * Updates an existing Choferes model.
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
		
		$model->fecha_ing = $model->formattedFechaIng;			
		$model->fecha_baja = $model->formattedFechaBaja;
		
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
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
     * Deletes an existing Choferes model.
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
     * Finds the Choferes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Choferes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Choferes::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

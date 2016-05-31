<?php

namespace app\controllers;

use Yii;
use app\models\Proveedores;
use app\models\searchmodels\ProveedoresSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProveedoresController implements the CRUD actions for Proveedores model.
 */
 
use app\models\Provincias;
use app\models\Tipodocimpositivo;
use app\models\Tiporesponsable;

class ProveedoresController extends Controller
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
     * Lists all Proveedores models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProveedoresSearch();
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
     * Displays a single Proveedores model.
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
           	'tipodocimpositivo' => $tipodocimpositivo,
           	'tiporesponsable' => $tiporesponsable,
        ]);
    }

    /**
     * Creates a new Proveedores model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Proveedores();
		
		$provinciasModel = new Provincias();
        $provincias = $provinciasModel->find()->all();
		
		$tipodocimpositivoModel = new Tipodocimpositivo();
        $tipodocimpositivo = $tipodocimpositivoModel->find()->all();	

		$tiporesponsableModel = new Tiporesponsable();
        $tiporesponsable = $tiporesponsableModel->find()->all();
		
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
     * Updates an existing Proveedores model.
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
     * Deletes an existing Proveedores model.
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
     * Finds the Proveedores model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Proveedores the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Proveedores::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function getProveedorDenominacion()
    {
        return $this->hasOne(Proveedores::className(), ['id' => 'id_proveedor'])->denominacion;
    }
}

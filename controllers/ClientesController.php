<?php

namespace app\controllers;

use Yii;
use app\models\Clientes;
use app\models\searchmodels\ClientesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ClientesController implements the CRUD actions for Clientes model.
 */
use app\models\Provincias;
use app\models\Tipodocimpositivo;
use app\models\Tiporesponsable;

class ClientesController extends Controller
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
     * Lists all Clientes models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ClientesSearch();
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
     * Displays a single Clientes model.
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
		
        return $this->render('view', [
            'model' => $model,
			'provincias' => $provincias,
           	'tipodocimpositivo' => $tipodocimpositivo,
           	'tiporesponsable' => $tiporesponsable,
        ]);
    }

    /**
     * Creates a new Clientes model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Clientes();
		
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
     * Updates an existing Clientes model.
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
     * Deletes an existing Clientes model.
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
     * Finds the Clientes model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Clientes the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Clientes::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}

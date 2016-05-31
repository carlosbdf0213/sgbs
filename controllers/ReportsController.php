<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;


class ReportsController extends Controller
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

        return $this->render('index');
    }
    public function actionIvaventas(){

        return $this->render('ivaventas');
    }
    public function actionIvacompras(){

        return $this->render('ivacompras');
    }
	public function actionCheques(){

        return $this->render('cheques');
    }
}

?>

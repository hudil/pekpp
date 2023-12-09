<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class EvaluasiController extends Controller
{
    public $layout = '@app/views/layouts/table';
    public function actionIndex()
    {
        Yii::$app->view->title = "Data Evaluasi";
        return $this->render('index');
    }

    public function actionCreate()
    {
        return $this->render('create');
    }
}

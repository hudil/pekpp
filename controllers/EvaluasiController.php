<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class EvaluasiController extends Controller
{
    public $layout = '@app/views/layouts/app';
    public function actionIndex()
    {
        Yii::$app->view->title = "Data Evaluasi";
        return $this->render('index');
    }

    public function actionCreate()
    {
        Yii::$app->view->title = "Create Evaluasi";
        return $this->render('create');
    }

    public function actionKebijakan()
    {
        $post = Yii::$app->request->post();
        echo json_encode($post);
    }
}

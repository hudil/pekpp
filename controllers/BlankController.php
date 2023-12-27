<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class BlankController extends Controller
{
    public $layout = '@app/views/layouts/app';
    public function actionIndex()
    {
        Yii::$app->view->title = "Test Form Wizard";
        return $this->render('index');
    }
}

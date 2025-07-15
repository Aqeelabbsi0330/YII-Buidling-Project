<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\User; // ✅ This is the important line

class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionUser()
    {
        $model = new User();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            // optionally redirect or flash message
        }

        return $this->render('user', ['model' => $model]);
    }
}

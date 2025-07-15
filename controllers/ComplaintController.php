<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Complaint;

class ComplaintController extends Controller
{
    public function actionCreate()
    {
        $model = new Complaint();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            // Optionally, set a success flash message
            Yii::$app->session->setFlash('success', 'Complaint submitted successfully.');
            return $this->redirect(['create']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }
}

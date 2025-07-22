<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Utility_bill;

class UtilityController extends Controller
{
    public function actionIndex()
    {
        return $this->render('utility_bill');
    }
    public function actionCreate()
    {
        if (Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();
            // Assuming you have a model to handle the utility bill creation
            $model = new Utility_bill();
            $model->load($post);
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Utility bill created successfully.');
                return $this->redirect(['utility_bill_table']);
            } else {
                $errorMsg = 'Failed to create utility bill: ' . json_encode($model->getErrors());
                return $this->render('utility_bill', [
                    'model' => $model,
                    'error' => $errorMsg,
                ]);
            }
        } else {
            return $this->render('utility_bill');
        }
    }
    public function actionUtility_bill_table()
    {
        return $this->render('utility_bill_table');
    }
}

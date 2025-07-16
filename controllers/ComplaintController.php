<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Complaint;

class ComplaintController extends Controller
{
   public function actionIndex($status = null)
{
    $query = Complaint::find();
    if ($status) {
        $query->where(['status' => $status]);
    }

    $complaints = $query->all();

    return $this->render('index', [
        'complaints' => $complaints,
        'currentStatus' => $status,
    ]);
}

}

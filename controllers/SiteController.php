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
        return $this->render('users/user');
    }
     public function actionUser_table()
    {
        return $this->render('users/user_table');
    }
     public function actionComplaint()
    {
        return $this->render('complaints/complaint');
    }
     public function actionComplaint_table()
    {
        return $this->render('complaints/complaint_table');
    }
      public function actionNotice()
    {
        return $this->render('notices/notice');
    }
      public function actionNotice_table()
    {
        return $this->render('notices/notice_table');
    }
      public function actionProject()
    {
        return $this->render('projects/project');
    }
      public function actionProject_table()
    {
        return $this->render('projects/project_table');
    }
     public function actionUtility_bill()
    {
        return $this->render('utilityBills/utility_bill');
    }
     public function actionUtility_bill_table()
    {
        return $this->render('utilityBills/utility_bill_table');
    }
}

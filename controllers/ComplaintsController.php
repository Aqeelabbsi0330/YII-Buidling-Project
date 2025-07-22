<?php

namespace app\controllers;

use  app\models\Complaint;
use Yii;
use yii\web\Controller;

class ComplaintsController extends Controller
{
    public function actionIndex()
    {
        return $this->render('complaint');
    }
    public function actionComplaint()
    {
        $model = new Complaint();
        if (Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();
            // print_r($post);
            $model->load($post);
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Complaint created successfully.');
                return $this->redirect(['complaints/complaint_table']);
            } else {
                $errorMsg = 'Failed to create complaint: ' . json_encode($model->getErrors());
                return $this->render('complaint', [
                    'model' => $model,
                    'error' => $errorMsg,
                ]);
            }
        } else {
            return $this->render('complaint', [
                'model' => $model
            ]);
        }
    }
    public function actionComplaint_table()
    {
        // $complaints = Complaint::find()->all();
        // if ($complaints) {
        //     return $this->render('complaint_table', [
        //         'complaints' => $complaints
        //     ]);
        // }
        $complaints = Complaint::find();
        $status = Yii::$app->request->get('status');
        $filter = Yii::$app->request->get('filter');
        if ($status) {
            $complaints = $complaints->where(['status' => $status]);
        }
        if (!empty($filter)) {
            switch ($filter) {
                case 'today':
                    $complaints->andWhere(['between', 'createdAt', date('Y-m-d 00:00:00'), date('Y-m-d 23:59:59')]);
                    break;
                case 'this_week':
                    $complaints->andWhere([
                        'between',
                        'createdAt',
                        date('Y-m-d 00:00:00', strtotime('monday this week')),
                        date('Y-m-d 23:59:59', strtotime('sunday this week'))
                    ]);
                    break;
                case 'this_month':
                    $complaints->andWhere([
                        'between',
                        'createdAt',
                        date('Y-m-01 00:00:00'),
                        date('Y-m-t 23:59:59') // t = last day of month
                    ]);
                    break;
                case 'last_3_months':
                    $complaints->andWhere([
                        'between',
                        'createdAt',
                        date('Y-m-d 00:00:00', strtotime('-3 months')),
                        date('Y-m-d 23:59:59')
                    ]);
                    break;
                default:
            }
            $complaints = $complaints->orderBy(['createdAt' => SORT_DESC])->all();
            return $this->render('complaint_table', [
                'complaints' => $complaints,
                'status' => $status,
                'filter' => $filter
            ]);
        } else {
            $complaints = $complaints->all();
            return $this->render('complaint_table', [
                'complaints' => $complaints,
                'status' => $status
            ]);
        }
    }
    // public function actionComplaint_resolved()
    // {
    //     // $complaints = Complaint::find()->where(['status' => 'Resolved'])->all();
    //     // if ($complaints) {
    //     //     return $this->render('complaint_table', [
    //     //         'complaints' =>  $complaints
    //     //     ]);
    //     // } else {
    //     //     $errorMsg = 'No resolved complaints found.';
    //     //     return $this->render('complaint_table', [
    //     //         'error' => $errorMsg,
    //     //         ' $complaints' =>  $complaints
    //     //     ]);
    //     // }

    // }
    //     public function actionComplaint_in_progress()
    //     {
    //         $complaints = Complaint::find()->where(['status' => 'In Progress'])->all();
    //         if ($complaints) {
    //             return $this->render('complaint_table', [
    //                 'complaints' =>  $complaints
    //             ]);
    //         } else {
    //             $errorMsg = 'No in-progress complaints found.';
    //             return $this->render('complaint_table', [
    //                 'error' => $errorMsg,
    //                 ' $complaints' =>  $complaints
    //             ]);
    //         }
    //     }
    //     public function actionComplaint_pending()
    //     {
    //         $complaints = Complaint::find()->where(['status' => 'Pending'])->all();
    //         if ($complaints) {
    //             return $this->render('complaint_table', [
    //                 'complaints' =>  $complaints
    //             ]);
    //         } else {
    //             $errorMsg = 'No pending complaints found.';
    //             return $this->render('complaint_table', [
    //                 'error' => $errorMsg,
    //                 ' $complaints' =>  $complaints
    //             ]);
    //         }
    //     }
    //     public function actionComplaint_close()
    //     {
    //         $complaints = Complaint::find()->where(['status' => 'Closed'])->all();
    //         if ($complaints) {
    //             return $this->render('complaint_table', [
    //                 'complaints' =>  $complaints
    //             ]);
    //         } else {
    //             $errorMsg = 'No closed complaints found.';
    //             return $this->render('complaint_table', [
    //                 'error' => $errorMsg,
    //                 ' $complaints' =>  $complaints
    //             ]);
    //         }
    //     }
}

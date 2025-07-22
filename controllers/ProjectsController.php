<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use \app\models\Project;


class ProjectsController extends Controller
{
    public function actionIndex()
    {
        return $this->render('project');
    }
    public function actionCreate()
    {
        $model = new Project();
        if (Yii::$app->request->isPost) {
            $post = Yii::$app->request->post();
            $model->load($post);
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Project created successfully.');
                return $this->redirect(['project_table']);
            } else {
                $error = 'Failed to create project: ' . json_encode($model->getErrors());
                return $this->render(
                    'project',
                    [
                        'model' => $model,
                        'error' => $error
                    ]
                );
            }
        } else {
            return $this->render('project', ['model' => $model]);
        }
    }
    public function actionProject_table()
    {
        $status = Yii::$app->request->get('status', 'all');
        $filter = Yii::$app->request->get('filter', 'all');
        $projects = Project::find();
        if ($status && $status !== 'all') {
            $projects->where(['status' => $status]);
        }
        if (!empty($filter)) {
            switch ($filter) {
                case 'today':
                    $projects->andWhere(['between', 'createdAt', date('Y-m-d 00:00:00'), date('Y-m-d 23:59:59')]);
                    break;
                case 'this_week':
                    $projects->andWhere([
                        'between',
                        'createdAt',
                        date('Y-m-d', strtotime('monday this week')),
                        date('Y-m-d', strtotime('sunday this week'))
                    ]);
                    break;
                case 'this_month':
                    $projects->andWhere(['between', 'createdAt', date('Y-m-01'), date('Y-m-t')]);
                    break;
                case 'last_three_month':
                    $projects->andWhere(['>=', 'createdAt', date('Y-m-d', strtotime('-3 months'))]);
                    break;
            }
            $projects = $projects->orderBy(['createdAt' => SORT_DESC])->all();
            return $this->render('project_table', [
                'projects' => $projects,
                'status' => $status,
                'filter' => $filter
            ]);
        }
        $projects = $projects->all();
        return $this->render('project_table', [
            'projects' => $projects,
            'status' => $status,
            'filter' => $filter
        ]);
    }
}

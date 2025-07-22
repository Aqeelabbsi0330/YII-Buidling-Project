<?php

namespace app\controllers;

use app\models\User;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use Yii;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
{

    public function actionIndex()
    {
        return $this->render('user');
    }
    public function actionUser()
    {

        $model = new User();
        if (Yii::$app->request->isPost) {

            $post = Yii::$app->request->post();
            $model->load($post);
            if ($model->save()) {
                if (yii::$app->session->get('return to rent', false)) {
                    yii::$app->session->remove('return to rent');
                    yii::$app->session->setFlash('successMsg', 'User added successfully. you can do the Rent Agreement.');
                    yii::$app->session->set('user created for rent', true);
                    return $this->redirect(['rent/index']);
                } else {

                    Yii::$app->session->setFlash('successMsg', 'User added successfully.');

                    return $this->redirect(['user_table']);
                }
            } else {
                if (yii::$app->session->get('return to rent', false)) {
                    yii::$app->session->remove('return to rent');
                    yii::$app->session->setFlash('error', 'Failed to add user: ' . json_encode($model->getErrors()));
                    return $this->redirect(['rent/index']);
                } else {

                    $errorMsg = 'Failed to add user: ' . json_encode($model->getErrors());
                    return $this->render('user', [
                        'model' => $model,
                        'error' => $errorMsg,
                    ]);
                }
                // Yii::$app->session->setFlash('error', 'Failed to add user.' . json_encode($model->getErrors()));
                // return $this->render('//site/users/user', ['model'=> $model]);
            }
        } else {
            return $this->render('user', [
                'model' => $model
            ]);
        }
    }
    public function actionUser_table()
    {
        $users = User::find()->all();

        return $this->render('user_table', [
            'users' => $users
        ]);
    }
}

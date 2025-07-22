<?php

namespace app\controllers;


use Yii;
use yii\web\Controller;
use \app\models\RentAgreement;


class RentController extends Controller
{
    public function actionIndex()
    {
        if (yii::$app->session->has('pre data')) {
            $data = (yii::$app->session->get('pre data'));
            $data = $data['RentAgreement'] ?? [];
            yii::$app->session->remove('pre data');
        }
        return $this->render(
            'rent_agreement',
            ['data' => $data ?? []]
        );
    }

    public function actionRentCreate()
    {

        $model = new RentAgreement();
        if (Yii::$app->request->isPost) {

            $RentAgreement = new RentAgreement();
            if (!yii::$app->session->has('user created for rent')) {
                Yii::$app->session->set('pre data', Yii::$app->request->post());
                if (isset($_POST['RentAgreement']['userType']) && $_POST['RentAgreement']['userType'] == 'Login') {
                    Yii::$app->session->set('return to rent', true);

                    return $this->redirect(['user/index']);
                }
            } else {
                $RentAgreement->load(Yii::$app->request->post());
                if ($RentAgreement->save()) {
                    yii::$app->session->remove('user created for rent');
                    yii::$app->session->setFlash('successMsg', 'Rent Agreement created successfully.');
                    yii::$app->session->remove('return to rent');
                    return $this->redirect(['rent/index']);
                } else {
                    yii::$app->session->setFlash('error', 'Failed to create Rent Agreement: ' . json_encode($RentAgreement->getErrors()));
                    return $this->render('rent_agreement', [
                        'data' => $RentAgreement,
                    ]);
                }
            }
        }
    }
}

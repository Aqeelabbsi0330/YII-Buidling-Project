<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\User $model */

$this->title = $model->CNIC;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'CNIC' => $model->CNIC], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'CNIC' => $model->CNIC], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'CNIC',
            'Email:email',
            'UserPassword',
            'PhoneNumber',
            'Province',
            'District',
            'City',
            'Address',
            'CreatedAt',
            'UpdatedAt',
        ],
    ]) ?>

</div>

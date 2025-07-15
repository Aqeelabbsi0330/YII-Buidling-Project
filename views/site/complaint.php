<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">			    
        <h1 class="app-page-title">Complaint</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            <div class="col-12 col-md-4">
                <h3 class="section-title">Submit Complaint</h3>
                <div class="section-intro">Fill the complaint form below.</div>
            </div>
            <div class="col-12 col-md-8">
                <div class="app-card app-card-settings shadow-sm p-4">
                    <div class="app-card-body">
                        <?php $form = ActiveForm::begin(['options' => ['class' => 'settings-form row']]); ?>

                        <div class="mb-3 col-md-6">
                            <?= $form->field($model, 'ComplaintID')->textInput(['class' => 'form-control', 'placeholder' => 'Auto or manual'])->label('Complaint ID') ?>
                        </div>

                        <div class="mb-3 col-md-6">
                            <?= $form->field($model, 'Titel')->textInput(['class' => 'form-control', 'placeholder' => 'Title']) ?>
                        </div>

                        <div class="mb-3 col-md-12">
                            <?= $form->field($model, 'Description')->textarea(['class' => 'form-control', 'rows' => 4]) ?>
                        </div>

                        <div class="mb-3 col-md-6">
                            <?= $form->field($model, 'Status')->dropDownList([
                                'pending' => 'Pending',
                                'in_progress' => 'In Progress',
                                'resolved' => 'Resolved'
                            ], ['prompt' => 'Select status', 'class' => 'form-select']) ?>
                        </div>

                        <div class="mb-3 col-md-6">
                            <?= $form->field($model, 'UnitID')->textInput(['class' => 'form-control']) ?>
                        </div>

                        <div class="mt-3 col-12">
                            <?= Html::submitButton('Submit Complaint', ['class' => 'btn app-btn-primary']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

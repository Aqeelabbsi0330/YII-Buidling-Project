<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title text-primary fw-bold">Users</h1>
        <hr class="mb-4">
        <div class="row g-4 settings-section">
            
            <div class="col-12 col-md-4">
                <h3 class="section-title text-secondary">User Info</h3>
                <div class="section-intro text-muted small">
                    Fill the user registration form below.<br>
                </div>
            </div>

            <div class="col-12 col-md-8">
                <div class="app-card app-card-settings shadow-sm p-4 border rounded-3 bg-light">
                    <div class="app-card-body">
                        <?php $form = ActiveForm::begin(['options' => ['class' => 'settings-form row g-3']]); ?>

                        <div class="col-12">
                            <?= $form->field($model, 'CNIC')->textInput([
                                'placeholder' => '1234512345671',
                                'class' => 'form-control shadow-sm'
                            ])->label('CNIC <span class="text-danger">*</span>', ['class' => 'form-label fw-semibold']) ?>
                        </div>

                        <div class="col-12">
                            <?= $form->field($model, 'Email')->input('email', [
                                'placeholder' => 'example@email.com',
                                'class' => 'form-control shadow-sm'
                            ])->label('Email <span class="text-danger">*</span>', ['class' => 'form-label fw-semibold']) ?>
                        </div>

                        <div class="col-md-6">
                            <?= $form->field($model, 'PhoneNumber')->textInput([
                                'placeholder' => '03XXXXXXXXX',
                                'class' => 'form-control shadow-sm'
                            ])->label('Phone Number', ['class' => 'form-label fw-semibold']) ?>
                        </div>

                        <div class="col-md-6">
                            <?= $form->field($model, 'UserPassword')->passwordInput([
                                'class' => 'form-control shadow-sm'
                            ])->label('Password', ['class' => 'form-label fw-semibold']) ?>
                        </div>

                        <div class="col-md-6">
                            <?= $form->field($model, 'Province')->textInput([
                                'placeholder' => 'Punjab',
                                'class' => 'form-control shadow-sm'
                            ])->label('Province', ['class' => 'form-label fw-semibold']) ?>
                        </div>

                        <div class="col-md-6">
                            <?= $form->field($model, 'District')->textInput([
                                'placeholder' => 'Lahore',
                                'class' => 'form-control shadow-sm'
                            ])->label('District', ['class' => 'form-label fw-semibold']) ?>
                        </div>

                        <div class="col-md-6">
                            <?= $form->field($model, 'City')->textInput([
                                'placeholder' => 'City',
                                'class' => 'form-control shadow-sm'
                            ])->label('City', ['class' => 'form-label fw-semibold']) ?>
                        </div>

                        <div class="col-md-6">
                            <?= $form->field($model, 'Address')->textInput([
                                'placeholder' => 'Address',
                                'class' => 'form-control shadow-sm'
                            ])->label('Address', ['class' => 'form-label fw-semibold']) ?>
                        </div>

                        <div class="col-12 text-end mt-3">
                            <?= Html::submitButton('Save User', ['class' => 'btn btn-success px-4']) ?>
                        </div>

                        <?php ActiveForm::end(); ?>
                    </div><!-- app-card-body -->
                </div><!-- app-card -->
            </div>
        </div>
    </div>
    <hr class="mb-4">
</div>

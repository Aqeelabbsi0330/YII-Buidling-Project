<?php

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Json;
?>
<?php
if (!isset($model)) {
  $model = new \app\models\User();
}
?>
<div class="app-content pt-10 p-md-3 p-lg-4">
  <div class="container-xl">
    <h1 class="app-page-title">User Form</h1>
    <hr class="mb-4">
    <div class="app-card app-card-settings p-4 border rounded-3 bg-white">
      <div class="app-card-body">
        <form class="row g-3" method="post" action="<?= \yii\helpers\Url::to(['user/user']) ?>">
          <div class="col-12">
            <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->getCsrfToken() ?>">
            <label for="cnic" class="form-label fw-semibold">CNIC <span class="text-danger">*</span></label>
            <input type="text" class="form-control" value="<?= Html::encode($model->cnic) ?>" id="cnic" name="User[cnic]" inputmode="numeric" pattern="[0-9]{13}" maxlength="13" placeholder="cnic without dashes" required>
          </div>

          <div class="col-12">
            <label for="email" class="form-label fw-semibold">Email <span class="text-danger">*</span></label>
            <input type="email" class="form-control" value="<?= Html::encode($model->email) ?>" name="User[email]" id="email" placeholder="example@email.com" required>
          </div>

          <div class="col-md-6">
            <label for="phone" class="form-label fw-semibold">Phone Number</label>
            <input type="text" class="form-control" name="User[phoneNumber]" value="<?= Html::encode($model->phoneNumber) ?>" inputmode="numeric" pattern="[0-9]{11}" maxlength="15" id="phone" placeholder="03XXXXXXXXX" required>
          </div>

          <div class="col-md-6">
            <label for="password" class="form-label fw-semibold">Password</label>
            <input type="password" class="form-control" name="User[userPassword]" value="<?= Html::encode($model->userPassword) ?>" id="password" required>
          </div>

          <div class="col-md-6">
            <label for="province" class="form-label fw-semibold">Province</label>
            <input type="text" class="form-control" name="User[province]" value="<?= Html::encode($model->province) ?>" id="province" placeholder="Punjab">
          </div>

          <div class="col-md-6">
            <label for="district" class="form-label fw-semibold">District</label>
            <input type="text" class="form-control" name="User[district]" value="<?= Html::encode($model->district) ?>" id="district" placeholder="Lahore">
          </div>

          <div class="col-md-6">
            <label for="city" class="form-label fw-semibold">City</label>
            <input type="text" class="form-control" name="User[city]" value="<?= Html::encode($model->city) ?>" id="city" placeholder="City">
          </div>

          <div class="col-md-6">
            <label for="address" class="form-label fw-semibold">Address</label>
            <input type="text" class="form-control" name="User[address]" value="<?= Html::encode($model->address) ?>" id="address" placeholder="Address">
          </div>

          <div class="col-12 text-end mt-3">
            <button type="submit" class="btn btn-primary px-4 text-light">Save</button>
          </div>
        </form>
      </div><!-- app-card-body -->
    </div><!-- app-card -->
  </div>
  <hr class="mb-4">

</div>
<?php if (isset($error)): ?>
  <script>
    alert(<?= Json::encode($error) ?>);
  </script>
<?php endif; ?>
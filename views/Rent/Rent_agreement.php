<?php

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Json;
?>
<?php if (yii::$app->session->hasFlash('successMsg')): ?>
    <script>
        alert("<?= Html::encode(Yii::$app->session->getFlash('successMsg')) ?>");
    </script>

<?php $successMsg = null;
endif; ?>
<?php

if (!isset($model)) {
    $model = new \app\models\User();
}
?>

<div class="app-content pt-10 p-md-3 p-lg-4">
    <div class="container-xl">
        <h1 class="app-page-title">Rent Agreement</h1>
        <hr class="mb-4">
        <div class="app-card app-card-settings p-4 border rounded-3 bg-white">
            <div class="app-card-body">
                <form class="row g-3" method="post" action="<?= \yii\helpers\Url::to(['rent/rent-create']) ?>">
                    <input type="hidden" name="<?= Yii::$app->request->csrfParam ?>" value="<?= Yii::$app->request->getCsrfToken() ?>">
                    <div class="col-6">
                        <label for="rentalType" class="form-label fw-semibold">Rental Type <span class="text-danger">*</span></label>
                        <select id="rentalType" name="RentAgreement[rentalType]" class="form-select" required>
                            <option value="" disabled selected>Select Status</option>
                            <option value="Daily" <?= (isset($data['rentalType']) && $data['rentalType'] === 'Daily') ? 'selected' : '' ?>>Daily</option>
                            <option value="Monthly" <?= (isset($data['rentalType']) && $data['rentalType'] === 'Monthly') ? 'selected' : '' ?>>Monthly</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="rentAmount" class="form-label fw-semibold">Rent Amount</label>
                        <input type="number" step="0.01" class="form-control" id="rentAmount" placeholder="e.g. 1500.00"
                            name="RentAgreement[rentAmount]" value="<?= isset($data) && isset($data['rentAmount']) ? Html::encode($data['rentAmount']) : '' ?>" required>
                    </div>

                    <div class="col-6">
                        <label for="paymentType" class="form-label fw-semibold">Payment Type <span class="text-danger">*</span></label>
                        <select id="paymentType" name="RentAgreement[paymentType]" class="form-select" required>
                            <option value="" <?= !isset($data['paymentType']) ? 'selected' : '' ?> disabled selected>Select Status</option>
                            <option value="One Time" <?= (isset($data['paymentType']) && $data['paymentType'] === 'One Time') ? 'selected' : '' ?>>One Time</option>
                            <option value="Recursive" <?= (isset($data['paymentType']) && $data['paymentType'] === 'Recursive') ? 'selected' : '' ?>>Recursive</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="incrementType" class="form-label fw-semibold">Increment Type <span class="text-danger"></span></label>
                        <select id="incrementType" name="RentAgreement[incrementType]" class="form-select">
                            <option value="" <?= !isset($data['incrementType']) ? 'selected' : '' ?> disabled selected>Select Status</option>
                            <option value="Monthly" <?= (isset($data['incrementType']) && $data['incrementType'] === 'Monthly') ? 'selected' : '' ?>>monthly</option>
                            <option value="Yearly" <?= (isset($data['incrementType']) && $data['incrementType'] === 'Yearly') ? 'selected' : '' ?>>Yearly</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="percentage" class="form-label fw-semibold">Increment Percentage <span class="text-danger">*</span></label>
                        <input type="number" step="0.01" class="form-control" id="percentage" placeholder="e.g. 7%" name="RentAgreement[incrementPercentage]"
                            value="<?= isset($data) && isset($data['incrementPercentage']) ? Html::encode($data['incrementPercentage']) : '' ?>">
                    </div>
                    <div class="col-6">
                        <label for="userType" class="form-label fw-semibold">User Type <span class="text-danger">*</span></label>
                        <select id="userType" name="RentAgreement[userType]" class="form-select">
                            <option value="" <?= !isset($data['userType']) ? 'selected' : '' ?> disabled selected>Select Status</option>
                            <option value="Login" <?= (isset($data['userType']) && $data['userType'] === 'Login') ? 'selected' : '' ?>>Login</option>
                            <option value="Non Login" <?= (isset($data['userType']) && $data['userType'] === 'Non Login') ? 'selected' : '' ?>>Non Login</option>
                        </select>
                    </div>

                    <!-- <div class="col-md-6">
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
                    </div> -->

                    <!-- <div class="col-md-6">
                        <label for="city" class="form-label fw-semibold">City</label>
                        <input type="text" class="form-control" name="User[city]" value="<?= Html::encode($model->city) ?>" id="city" placeholder="City">
                    </div>

                    <div class="col-md-6">
                        <label for="address" class="form-label fw-semibold">Address</label>
                        <input type="text" class="form-control" name="User[address]" value="<?= Html::encode($model->address) ?>" id="address" placeholder="Address">
                    </div> -->

                    <div class="col-12 text-end mt-3">
                        <button type="submit" class="btn btn-primary px-4 text-light">Save</button>
                    </div>
                </form>
            </div><!-- app-card-body -->
        </div><!-- app-card -->
    </div>
    <hr class="mb-4">

</div>
<?php if (Yii::$app->session->hasFlash('error')): ?>
    <script>
        alert("<?= Html::encode(yii::$app->session->getFlash('error')) ?>");
    </script>
<?php endif; ?>
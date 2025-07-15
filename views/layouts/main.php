<?php

/** @var yii\web\View $this */
/** @var string $content */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    
</head>
<body>
<?php $this->beginBody() ?>

<?php include(__DIR__ . '/_scripts.php'); ?>
<?php include(__DIR__ . '/_header.php'); ?>

<div class="app-wrapper">
    <?= $content ?>  
    <?php include(__DIR__ . '/_footer.php'); ?> 
</div>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

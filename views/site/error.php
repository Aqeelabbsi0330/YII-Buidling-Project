<h1>Error</h1>
<p><?= $message ?? 'An error occurred.' ?></p>
<?php

use yii\web\HttpException;

$this->title = 'Error';
?>

<h1><?= $this->title ?></h1>

<?php if (isset($exception) && $exception !== null): ?>
    <p><strong><?= $exception->getMessage() ?></strong></p>
    <?php if (YII_DEBUG): ?>
        <pre><?= (string)$exception ?></pre>
    <?php endif; ?>
<?php else: ?>
    <p><strong>An unknown error occurred.</strong></p>
<?php endif; ?>
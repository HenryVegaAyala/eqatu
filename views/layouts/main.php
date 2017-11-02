<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?= Html::csrfMetaTags() ?>
    <?= Html::cssFile(YII_DEBUG ? '@web/css/eqatu.css' : '@web/css/eqatu.min.css?v=' . filemtime(Yii::getAlias('@webroot/css/eqatu.css'))) ?>
    <?= Html::cssFile('https://fonts.googleapis.com/icon?family=Material+Icons') ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<?= $this->render('header') ?>
<?= $content ?>
<?= $this->render('footer') ?>

<?php $this->endBody() ?>
<?= Html::jsFile('@web/js/all.js?v=' . filemtime(Yii::getAlias('@webroot/js/all.js'))) ?>
</body>
</html>
<?php $this->endPage() ?>

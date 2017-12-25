<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

</head>
<body>
<?php $this->beginBody() ?>

<header>
    <div class="logo">
        <a href="http://yii.local/"><img src="/img/logo.png" title="Magnetic" alt="Magnetic"/></a>
    </div><!-- end logo -->

    <div id="menu_icon"></div>
    <nav>
        <ul>
            <li><a href="http://yii.local/" class="selected">Главная</a></li>
            <li><a href="#">Сообщения</a></li>
            <li><?= Html::a('Добавить фото', ['upload']) ?></a></li>
            <li><a href="#">Профиль</a></li>
            <li><a href="#"><?= Html::a('Выход ' . Yii::$app->user->identity->username, ['site/logout'], ['data' => ['method' => 'post']]) ?></a></li>
        </ul>
    </nav><!-- end navigation menu -->

    <div class="footer clearfix">
        <ul class="social clearfix">
            <li><a href="#" class="fb" data-title="Facebook"></a></li>
            <li><a href="#" class="google" data-title="Google +"></a></li>
            <li><a href="#" class="behance" data-title="Behance"></a></li>
            <!--<li><a href="#" class="twitter" data-title="Twitter"></a></li>
            <li><a href="#" class="dribble" data-title="Dribble"></a></li>-->
            <li><a href="#" class="rss" data-title="RSS"></a></li>
        </ul><!-- end social -->

    </div ><!-- end footer -->
</header><!-- end header -->
<?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
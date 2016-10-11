<?php

/* @var $this \yii\web\View */
/* @var $content string */


use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;



AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>



    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">

</head>
<body>
<?php $this->beginBody() ?>
<?php if(Yii::$app->controller->action->id ==  'index'): ?>
<header role="banner">
    <div class="container-center">
        <div class="navigation wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.7s">
            <div class="contacts">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            Киев, Киевская обл. Украина
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            + 380 73 166 72 72
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            pazorinis@gmail.com
                        </a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-vk" aria-hidden="true"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <a class="logo-holder" href="#">
                <img src="<?=ROOT?>/assets/img/logo.png" alt="logo">
            </a>
            <nav>
                <ul>
                    <li>
                        <a href="/">Главная</a>
                    </li>
                    <li>
                       <a href="<?=ROOT.'/business' ?>">Бизнес с Китаем</a>
                    </li>
                    <li>
                       <a href="<?=ROOT.'/offers' ?>">Онлайн заказ</a>
                    </li>
                    <li>
                        <a href="<?=ROOT.'/contacts'?>">Контакты</a>
                    </li>
                    <li>
                        <a href="#">О нас</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<?php else: ?>
    <header class="layout" role="banner">
        <div class="container-center">
            <div class="navigation wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.7s">
                <div class="contacts">
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                Киев, Киевская обл. Украина
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                + 380 73 166 72 72
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                pazorinis@gmail.com
                            </a>
                        </li>
                    </ul>
                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa fa-vk" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <a class="logo-holder" href="#">
                    <img src="<?=ROOT?>/assets/img/logo.png" alt="logo">
                </a>
                <nav>
                    <ul>
                        <li>
                            <a href="/">Главная</a>
                        </li>
                        <li>
                           <a href="<?=ROOT.'/business' ?>">Бизнес с Китаем</a>
                        </li>
                        <li>
                           <a href="<?=ROOT.'/offers' ?>">Онлайн заказ</a>
                        </li>
                        <li>
                            <a href="<?=ROOT.'/contacts'?>">Контакты</a>
                        </li>
                        <li>
                            <a href="<?=ROOT.'/about'?>">О нас</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
<?php endif; ?>
<main>
    <?= $content ?>
</main>

<footer role="contentinfo">
    <div class="container-center">
        <ul>
            <li>
                <a href="#">
                    <i class="fa fa-copyright" aria-hidden="true"></i>
                    Pazorini
                </a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="#">
                    <i class="fa fa-angle-up" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </div>
</footer>
<?php $this->endBody() ?>
<script>

</script>
</body>
</html>
<?php $this->endPage() ?>

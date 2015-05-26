<?php

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

/* @var $this \yii\web\View */
/* @var $content string */

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
    </head>
    <body>
        <?php Yii::$app->language = 'ru-RU'; ?>
        <?php $this->beginBody() ?>
        <div class="wrap">
            <div class="header">
                <img src="images/logo.png" alt=""/>
                <div class="header-date">
                    <?php echo date('l'); ?>						
                </div>				
                <div class="header-date">
                    <?php echo date('F -d'); ?>							
                </div>	
                        
                <div class="col-sm-2 col-md-2 col-lg-2 navbar-right">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Search!</button>
                        </span>
                    </div>
                </div>
                
                <?php
//                NavBar::begin([
//                    'brandLabel' => 'H&M Co.',
//                    'brandUrl' => Yii::$app->homeUrl,
//                    'options' => [
//                        'class' => 'navbar-inverse nav-bar-sign',
//                    ],
//                ]);                
//                if (Yii::$app->user->isGuest) {
//                    $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
//                    $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
//                } else {
//                    $menuItems[] = [
//                        'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
//                        'url' => ['/site/logout'],
//                        'linkOptions' => ['data-method' => 'post']
//                    ];
//                }
//                echo Nav::widget([
//                    'options' => ['class' => 'navbar-nav navbar-right main-menu-header'],
//                    'items' => $menuItems,
//                ]);
//                NavBar::end();
                ?>
            </div>

            <?php
            NavBar::begin([
                'options' => [
                    'class' => 'navbar-inverse nav-bar-custom',
                ],
            ]);

            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'Politically', 'url' => ['/site/about']],
                ['label' => 'International', 'url' => ['/site/about']],
                ['label' => 'Show Business', 'url' => ['/site/contact']],
                ['label' => 'Sport', 'url' => ['/site/index']],
                ['label' => 'About', 'url' => ['/site/about']],
                ['label' => 'Contact', 'url' => ['/site/contact']],
            ];
            echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right main-menu-nav'],
                'items' => $menuItems,
            ]);

            NavBar::end();
            ?>
            <div class="container main-container">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; My Company <?= date('Y') ?></p>
                <p class="pull-right"><?= Yii::powered() ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>

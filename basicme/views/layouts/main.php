<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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

<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => '银天下QA',
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            echo Nav::widget([
                'items' => [
                    [
                        'label' => 'Home',
                        'url' => ['site/index'],
                    ],
                    [
                        'label' => 'Reports',
                        'items' => [
                             '<li class="dropdown-header">YTX APP</li>',
                             ['label' => 'Android Report', 'url' => '/site/index'],
                             ['label' => 'IOS Report', 'url' => '/site/index'],
                             '<li class="divider"></li>',
                             '<li class="dropdown-header">YTX PC</li>',
                             ['label' => 'PC report', 'url' => '/site/index'],
                        ],
                    ],
                    [
                        'label' => 'Tools',
                        'items' => [
                             ['label' => 'Clear register', 'url' => '/site/about'],
                             ['label' => 'Clear account', 'url' => '/site/about'],
                        ],
                    ],
                    [
                        'label' => 'Tutorial',
                        'items' => [
                             ['label' => 'PC', 'url' => '/site/contact'],
                             ['label' => 'CRM', 'url' => '/site/contact'],
                             ['label' => 'App', 'url' => ['/site/contact']],
                        ],
                    ],
                ],
                'options' => ['class' =>'nav-pills navbar-right'], // set this to nav-tab to get tab-styled navigation
            ]);            
            // echo Nav::widget([
            //     'options' => ['class' => 'navbar-nav navbar-right'],
            //     'items' => [
            //         [
            //         'label' => '报告',
            //         'items' => [
            //                 ['label' => 'Android报告', 'url' => ['/site/index']],
            //                 ['label' => 'IOS报告', 'url' => ['/site/index']],
            //             ],    
            //         ],
            //         [
            //         'label' => '工具', 
            //         'items' => [
            //                 ['label' => '注册清理', 'url' => ['/site/about']],
            //                 ['label' => '开户清理', 'url' => ['/site/about']],
            //             ],                   
            //         ],
            //         [
            //         'label' => '学习', 
            //         'items' => [
            //                 ['label' => '新人', 'url' => ['/site/contact']],
            //             ],                    
            //         ],
            //         Yii::$app->user->isGuest ?
            //             ['label' => 'Login', 'url' => ['/site/login']] :
            //             ['label' => 'Logout (' . Yii::$app->user->identity->username . ')',
            //                 'url' => ['/site/logout'],
            //                 'linkOptions' => ['data-method' => 'post']],
            //     ],
            // ]);
            NavBar::end();
        ?>

        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
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

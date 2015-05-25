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
                        'label' => '主页',
                        'url' => ['site/index'],
                    ],
                    [
                        'label' => '报告',
                        'items' => [
                             '<li class="dropdown-header">银天下APP</li>',
                             ['label' => 'Android报告', 'url' => '/site/index'],
                             ['label' => 'IOS报告', 'url' => '/site/index'],
                             '<li class="divider"></li>',
                             '<li class="dropdown-header">银天下PC</li>',
                             ['label' => 'PC报告', 'url' => '/site/index'],
                        ],
                    ],
                    [
                        'label' => '工具',
                        'items' => [
                             ['label' => '清理注册', 'url' => '/site/about'],
                             ['label' => '清理账户', 'url' => '/site/about'],
                        ],
                    ],
                    [
                        'label' => '教程',
                        'items' => [
                             ['label' => 'PC', 'url' => '/site/contact'],
                             ['label' => 'CRM', 'url' => '/site/contact'],
                             ['label' => 'App', 'url' => ['/site/contact']],
                        ],
                    ],
                ],
                'options' => ['class' =>'nav-pills navbar-right'], // set this to nav-tab to get tab-styled navigation
            ]);            
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
            <p class="pull-left">&copy; 上海银天下科技 <?= date('Y') ?></p>
            <p class="pull-right">质量保障部工具组</p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

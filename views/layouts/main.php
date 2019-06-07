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
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <?php
    NavBar::begin([
        'options' => [
            'class' => 'navbar-fixed-top',
            'id' => 'bardasHeader'
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Inicio', 'url' => ['/site/index']],
            ['label' => 'Premios', 'url' => ['/site/about']],
            ['label' => 'Sponsors', 'url' => ['/site/contact']],
            ['label' => 'Contacto', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>
      <?= Breadcrumbs::widget([
          'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
      ]) ?>
      <?= Alert::widget() ?>
      <?= $content ?>

      <section id="footer">
      		<div class="container">
      			<div class="row text-center text-xs-center text-sm-left text-md-left">
      				<!--<div class="col-xs-12 col-sm-4 col-md-4">

      					<ul class="list-unstyled list-inline quick-links">
      						<li><a href="#"><i class="fa fa-angle-double-right"></i>Home</a></li>
      						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>About</a></li>
      						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
      						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Get Started</a></li>
      						<li><a href="javascript:void();"><i class="fa fa-angle-double-right"></i>Videos</a></li>
      					</ul>
      				</div>-->
      			</div>
      			<div class="row">
      				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
      					<ul class="list-unstyled list-inline social text-center">
      						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
      						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
      						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
      						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus"></i></a></li>

      					</ul>
                                          <br>
                                      </div>
      			</div>
      			<div class="row">
      				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
      					<p><u><a href="https://www.uncoactiva.com/">Unco Activa</a></u> </p>
      				</div>
      			</div>
      		</div>
      	</section>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

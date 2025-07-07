<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header">
    <?php
    NavBar::begin([
        'brandLabel' => '<i class="fas fa-store me-2"></i>BlueMarket',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => ['class' => 'navbar-expand-md navbar-dark fixed-top', 'style' => 'background: linear-gradient(90deg,rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);'],
        'brandOptions' => ['style' => 'color: white; font-weight: bold; font-size: 1.5rem;']
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav ms-auto'],
        'items' => [
            ['label' => '<i class="fas fa-home me-1"></i>Beranda', 'url' => ['/site/index'], 'encode' => false],
            ['label' => '<i class="fas fa-th-large me-1"></i>Kategori', 'url' => ['/site/categories'], 'encode' => false],
            ['label' => '<i class="fas fa-shopping-cart me-1"></i>Keranjang', 'url' => ['/site/cart'], 'encode' => false],
            ['label' => '<i class="fas fa-envelope me-1"></i>Kontak', 'url' => ['/site/contact'], 'encode' => false],
            Yii::$app->user->isGuest
                ? ['label' => '<i class="fas fa-sign-in-alt me-1"></i>Masuk', 'url' => ['/site/login'], 'encode' => false]
                : '<li class="nav-item">'
                    . Html::beginForm(['/site/logout'])
                    . Html::submitButton(
                        'Logout (' . Yii::$app->user->identity->username . ')',
                        ['class' => 'nav-link btn btn-link logout']
                    )
                    . Html::endForm()
                    . '</li>'
        ]
    ]);
    NavBar::end();
    ?>
</header>

<main id="main" class="flex-shrink-0" role="main">
    <div class="container">
        <?php if (!empty($this->params['breadcrumbs'])): ?>
            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
        <?php endif ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<footer id="footer" class="mt-auto py-4" style="background: linear-gradient(90deg,rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%); color: white;">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3">
                <h5><i class="fas fa-store me-2"></i>BlueMarket</h5>
                <p class="mb-0">Marketplace premium dengan kualitas terbaik dan layanan terpercaya untuk semua kebutuhan Anda.</p>
            </div>
            <div class="col-md-4 mb-3">
                <h6>Layanan Pelanggan</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-white-50 text-decoration-none"><i class="fas fa-question-circle me-1"></i>Pusat Bantuan</a></li>
                    <li><a href="#" class="text-white-50 text-decoration-none"><i class="fas fa-shipping-fast me-1"></i>Pengiriman</a></li>
                    <li><a href="#" class="text-white-50 text-decoration-none"><i class="fas fa-undo me-1"></i>Kebijakan Pengembalian</a></li>
                </ul>
            </div>
            <div class="col-md-4 mb-3">
                <h6>Ikuti Kami</h6>
                <div class="d-flex">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f fa-lg"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram fa-lg"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter fa-lg"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-youtube fa-lg"></i></a>
                </div>
            </div>
        </div>
        <hr style="border-color: rgba(255,255,255,0.2);">
        <div class="row">
            <div class="col-md-6 text-center text-md-start">
                <small>&copy; BlueMarket <?= date('Y') ?>. Semua hak dilindungi.</small>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <small>Dibuat dengan <i class="fas fa-heart text-danger"></i> oleh Adam</small>
            </div>
        </div>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

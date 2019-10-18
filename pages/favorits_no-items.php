<?php include '../layouts/header.php'; ?>

<!--== Page Header  -->
<div class="page-header page-header_favorits favorits-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="page-header__inner">
                    <div class="page-header__breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb__item"><a href="/" class="breadcrumb__link link">Главная</a></li>
                                <li class="breadcrumb__item"><a href="/pages/catalog_real-estate.php" class="breadcrumb__link link">Каталог недвижимости</a></li>
                                <li class="breadcrumb__item breadcrumb__item_active" aria-current="page">Избранное</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--== Page Content  -->
<main class="main-content page__content favotits-page">
    <!--== Content Title  -->
    <div class="main-content__title">
        <div class="container">
            <h1 class="content-title">Избранное</h1>
        </div>
    </div>

    <div class="favorits-error">
        <div class="container">
            <div class="favorits-error__body">
                <h3 class="favorits-error__title">в Вашем списке Избранное пока ничего нет</h3>
                <a href="/pages/catalog_real-estate.php" class="button favorits-error__button" title="Перейти в каталог">Перейти в каталог</a>
            </div>
        </div>
    </div>
</main>

<?php include '../layouts/footer.php'; ?>
<?php include '../layouts/modal.php'; ?>
<?php include '../layouts/header.php'; ?>

<main class="page-notfound">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <div class="notfound__inner">
                    <header class="notfound__header">
                        <h1 class="notfound__title">Запрашиваемая страница не найдена</h1>
                        <div class="notfound__subtitle">Возможно был введен некорректный<br> 
                        адрес или страница была удалена</div>
                    </header>

                    <div class="notfound__content">
                        <a href="/" class="button notfound__button button--blue" title="Перейти на главную страницу">Перейти на главную страницу</a>

                        <p class="notfound__text">Для  возврата на предыдущую страницу<br> 
                        нажмите кнопку "Назад" в своем браузере</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include '../layouts/footer.php'; ?>
<?php include '../layouts/modal.php'; ?>
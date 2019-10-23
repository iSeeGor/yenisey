<?php include '../layouts/header.php'; ?>

<!--== Single -->
<main class="main-content main-single single">
   
    <section class="single-header single__header">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-10 offset-xl-1">
                    <div class="single__breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb__item"><a href="/" class="breadcrumb__link link">Главная</a></li>
                                <li class="breadcrumb__item"><a href="/pages/catalog_real-estate.php" class="breadcrumb__link link">Каталог недвижимости</a></li>
                                <li class="breadcrumb__item"><a href="/pages/catalog_villas.php" class="breadcrumb__link link">Виллы</a></li>
                                <li class="breadcrumb__item breadcrumb__item_active" aria-current="page">Yenisey Residence</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-xl-10 offset-xl-1">
                    <div class="single__favorits-counter">
                        <div class="favorits-counter">
                            <a href="/pages/favorits.php" class="link favorits-counter__link">Избранное:</a><span class="favorits-counter__num">2</stron>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="single-title">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1 class="single__title">Yenisey Residence</h1>
                </div>
            </div>
        </div>
    </section> 

    <section class="single-meta single__meta meta">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="row">
                        <div class="col-md-5 col-lg-6 meta__left-col">
                            <div class="meta__price">
                                Цена от <span class="meta__price-num">183 000 €</span>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-6 meta__right-col">
                            <div class="meta__button-block">
                                <button class="button meta__button" 
                                data-fancybox data-src="#openModalMainForm" data-modal="true"
                                data-popup-title="Получить подробную информацию"
                                data-popup-text="Пожалуйста, заполните форму и нажмите кнопку «Отправить». Наш специалист свяжется с Вами, согласует параметры для подбора объектов и предоставит всю необходимую информацию."
                                >Получить подробную информацию</button>
                            </div>     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="single__image-slider image-slider ">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <!--== Main Slider -->
                    <div class="image-slider__container image-slider__main loading">
                        <div class="swiper-wrapper">
                            <div class="image-slider__slide swiper-slide ">
                                <figure class="image-slider__bgimg" style="background-image:url(/assets/images/image-slider/slide_01.jpg)">
                                    <img src="/assets/images/image-slider/slide_01.jpg" class="entity-img" />
                                </figure>
                            </div>
                            <div class="image-slider__slide swiper-slide ">
                                <figure class="image-slider__bgimg" style="background-image:url(/assets/images/image-slider/slide_02.jpg)">
                                    <img src="/assets/images/image-slider/slide_02.jpg" class="entity-img" />
                                </figure>
                            </div>
                            <div class="image-slider__slide swiper-slide ">
                                <figure class="image-slider__bgimg" style="background-image:url(/assets/images/image-slider/slide_06.jpg)">
                                    <img src="/assets/images/image-slider/slide_06.jpg" class="entity-img" />
                                </figure>
                            </div>
                            <div class="image-slider__slide swiper-slide ">
                                <figure class="image-slider__bgimg" style="background-image:url(/assets/images/image-slider/slide_04.jpg)">
                                    <img src="/assets/images/image-slider/slide_04.jpg" class="entity-img" />
                                </figure>
                            </div>
                            <div class="image-slider__slide swiper-slide ">
                                <figure class="image-slider__bgimg" style="background-image:url(/assets/images/image-slider/slide_05.jpg)">
                                    <img src="/assets/images/image-slider/slide_05.jpg" class="entity-img" />
                                </figure>
                            </div>
                        </div>
                    </div>
                        

                    <!--== Thumbnail navigation -->
                    <div class="image-slider__container image-slider__thumb loading">
                        <div class="swiper-wrapper" role="navigation">
                            <div class="image-slider__slide swiper-slide ">
                                <figure class="image-slider__bgimg" style="background-image:url(/assets/images/image-slider/slide_01.jpg)">
                                    <img src="/assets/images/image-slider/slide_01.jpg" class="entity-img" />
                                </figure>
                            </div>
                            <div class="image-slider__slide swiper-slide ">
                                <figure class="image-slider__bgimg" style="background-image:url(/assets/images/image-slider/slide_02.jpg)">
                                    <img src="/assets/images/image-slider/slide_02.jpg" class="entity-img" />
                                </figure>
                            </div>
                            <div class="image-slider__slide swiper-slide ">
                                <figure class="image-slider__bgimg" style="background-image:url(/assets/images/image-slider/slide_06.jpg)">
                                    <img src="/assets/images/image-slider/slide_06.jpg" class="entity-img" />
                                </figure>
                            </div>
                            <div class="image-slider__slide swiper-slide ">
                                <figure class="image-slider__bgimg" style="background-image:url(/assets/images/image-slider/slide_04.jpg)">
                                    <img src="/assets/images/image-slider/slide_04.jpg" class="entity-img" />
                                </figure>
                            </div>
                            <div class="image-slider__slide swiper-slide ">
                                <figure class="image-slider__bgimg" style="background-image:url(/assets/images/image-slider/slide_05.jpg)">
                                    <img src="/assets/images/image-slider/slide_05.jpg" class="entity-img" />
                                </figure>
                            </div>                           
                        </div>
                        <div class="image-slider__button-prev"></div>
                        <div class="image-slider__button-next"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="single-description single__description ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-10 offset-xl-1 ">
                    <h3 class="single-section__title">Описание виллы</h3>

                    <div class="single-description__properties">
                        <div class="row">
                            <div class="col-md-6">
                                <ul class="product__detail-list single-description__detail-list">
                                    <li class="product__detail-list-item">Год постройки:<span class="product__detail-list-num">2019</span></li>
                                    <li class="product__detail-list-item">Общая площадь:<span class="product__detail-list-num">378 м<sup>2</sup></span></li>
                                    <li class="product__detail-list-item">Этажей:<span class="product__detail-list-num">3</span></li>
                                    <li class="product__detail-list-item">Расстояние до центра города:<span class="product__detail-list-num">350 м</span></li>
                                </ul>
                            </div>

                            <div class="col-md-6">
                                <ul class="product__detail-list single-description__detail-list">
                                    <li class="product__detail-list-item">Расстояние до моря:<span class="product__detail-list-num">100 м</span></li>
                                    <li class="product__detail-list-item">Расстояние до магазинов:<span class="product__detail-list-num">100 м</span></li>
                                    <li class="product__detail-list-item">Аэропорт Газипаша:<span class="product__detail-list-num">28 км</span></li>
                                    <li class="product__detail-list-item">Аэропорт Анталии:<span class="product__detail-list-num">125 км</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single__text-area">
                        <p>Вилла, индивидуальная, на заказ! В зависимости от площади участка земли проект может быть 
                            спроектирован в любом стиле, по желанию клиента.</p>
                        <p>Преимущество эксклюзивной виллы заключается в том, что вы, как собственник, можете свободно 
                            выбрать все материалы для отделки и цветовую гамму. <br>Вы можете организовать свой дом исключительно 
                            под свои интересы и пожелания: фитнес, гараж, внутренний бассейн, учебу, библиотеку и т.д.</p>
                        <p>В Алании есть несколько участков земли с великолепным видом на горы и море! Между Кестелем (Аланья) 
                            и Карджикаком прекрасный климат благодаря возвышающимся горам плавно впадающим в море. Это одна из 
                            частей в Турции, где горы Торос входят в море! На холмах Каргыджака вы можете легко осуществить свою 
                            мечту и построить свою виллу у моря!</p>
                        <strong>Политика компании:</strong>
                        <ul>
                            <li>Отличное качество</li>
                            <li>Строительство соответствует европейскому стандарту</li>
                            <li>Внедрение новых концепций</li>
                            <li>Покупка "Всё включено"</li>
                            <li>Наши собственные работники являются гарантией хорошей работы</li>
                            <li>Страсть к строительству</li>
                            <li>Цена соответствует качеству</li>
                            <li>Семейный бизнес многих лет</li>
                            <li>Полный послепродажный сервис</li>
                        </ul>
                    </div> 
                    

                    <div class="player-box single-description__video-box">
                        <div class="player-box__row">
                            <div class="player-box__responsive-block"></div>
                            <iframe class="player-box__iframe" src="https://www.youtube.com/embed/p8jZjfUlTBM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </section>

    <section class="single-propery single__propery ">
        <div class="container">
                
            <div class="row single-propery__row">
                <div class="col-12"><h3 class="single-section__title">Инфраструктура виллы</h3></div>

                <div class="col-lx-10 offset-lg-1">
                    <ul class="single-propery__list">
                        <li class="single-propery__list-item">Огороженная территория</li>
                        <li class="single-propery__list-item">Летний бассейн</li>
                        <li class="single-propery__list-item">Зимний бассейн</li>
                        <li class="single-propery__list-item">Сауна</li>
                        <li class="single-propery__list-item">Огороженная территория</li>
                        <li class="single-propery__list-item">Летний бассейн</li>
                        <li class="single-propery__list-item">Зимний бассейн</li>
                        <li class="single-propery__list-item">Сауна</li>
                        <li class="single-propery__list-item">Огороженная территория</li>
                        <li class="single-propery__list-item">Летний бассейн</li>
                        <li class="single-propery__list-item">Зимний бассейн</li>
                        <li class="single-propery__list-item">Сауна</li>
                    </ul>
                </div>
            </div>
                    
            <div class="row single-propery__row">
                <div class="col-12"><h3 class="single-section__title">Комплектация виллы</h3></div>

                <div class="col-lx-10 offset-lg-1">
                    <ul class="single-propery__list">
                        <li class="single-propery__list-item">Огороженная территория</li>
                        <li class="single-propery__list-item">Летний бассейн</li>
                        <li class="single-propery__list-item">Зимний бассейн</li>
                        <li class="single-propery__list-item">Сауна</li>
                        <li class="single-propery__list-item">Огороженная территория</li>
                        <li class="single-propery__list-item">Летний бассейн</li>
                        <li class="single-propery__list-item">Зимний бассейн</li>
                        <li class="single-propery__list-item">Сауна</li>
                        <li class="single-propery__list-item">Огороженная территория</li>
                        <li class="single-propery__list-item">Летний бассейн</li>
                        <li class="single-propery__list-item">Зимний бассейн</li>
                        <li class="single-propery__list-item">Сауна</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <section class="single-map single__map ">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-10 offset-xl-1">
                    <h3 class="single-section__title">Вилла на карте</h3>

                    <div class="single-map__holder map-holder"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="single-credit single__credit ">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-xl-10 offset-xl-1">
                        <h3 class="single-section__title">Беспроцентная рассрочка от Yenisey</h3>

                        <div class="row single-credit__row">
                        
                            <div class="col-md-6 col-lg-5">
                                <div class="single-credit__image-box">
                                    <img class="single-credit__image" src="../assets/images/pages/gredit_image_01.png" alt="Image Gredit">
                                </div>
                            </div>

                            <div class="col-md-6 col-lg-6 offset-lg-1">
                                <div class="single-credit__text-box">
                                    <img class="single-credit__icon" src="../assets/images/icons/interest.svg" alt="credit icon">
                                    <p> Одним из многих преимуществ покупки недвижимости напрямую у строительной компании 
                                    Yenisey является предоставляемая нами беспроцентная рассрочка. Здесь нет никаких начисляемых 
                                    процентов банками или агентствами, Вы просто оплачиваете стоимость жилья по первоначальной цене 
                                    непосредственно от самого застройщика, то есть от нас.</p>
                                    <p>Мы всегда идём навстречу нашим клиентам и стараемся, чтобы система оплаты была для них 
                                    необременительной и комфортной!</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="single-prodList single__prodList product-list">
        <div class="container">
            <h2 class="product-list__title">Похожие предложения</h2>

            <div class="row">

                <div class="offset-md-1 col-md-10 col-lg-6 offset-lg-0 col-xl-6">
                    <div class="card product-list__card" >

                        <div class="card__image-area">
                                                        <div class="card__image-inner">
                                <a href="#" title="Product Image">
                                    <img src="../assets/images/products/card_image_01.png" class="card__image" alt="Product Image #01">
                                </a>
                            </div>
                            <div class="to-favorits card__to-favorits">
                                <svg class="to-favorits__icon to-favorits__icon_active" width="23" height="23"
                                    viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.2121 9.06129C21.6285 8.65533 21.7756 8.05953 21.5959 7.50641C21.4161 6.95328 20.947 6.55775 20.3714 6.47415L15.3388 5.74286C15.24 5.72853 15.1547 5.6665 15.1104 5.57692L12.8598 1.01668C12.6025 0.495134 12.0813 0.171158 11.4997 0.171158C10.9181 0.171158 10.3969 0.495134 10.1395 1.01668L7.8889 5.57697C7.84465 5.6665 7.7593 5.72853 7.66047 5.74291L2.62796 6.47415C2.05242 6.55775 1.5833 6.95328 1.40353 7.50641C1.22375 8.05953 1.37082 8.65533 1.78734 9.06129L5.42893 12.611C5.5004 12.6807 5.53306 12.7811 5.51617 12.8795L4.6565 17.8917C4.55821 18.465 4.78938 19.0334 5.25989 19.3752C5.7304 19.7172 6.3426 19.7613 6.85731 19.4908L11.3585 17.1243C11.4469 17.0778 11.5525 17.0778 11.6409 17.1243L16.1422 19.4908C16.3661 19.6085 16.6083 19.6666 16.8494 19.6666C17.1625 19.6666 17.4737 19.5685 17.7395 19.3752C18.21 19.0333 18.4412 18.4648 18.3428 17.8917L17.4832 12.8795C17.4663 12.781 17.4989 12.6806 17.5704 12.6109L21.2121 9.06129ZM16.2873 13.0847L17.147 18.097C17.1757 18.2647 17.0722 18.3603 17.0263 18.3936C16.9804 18.4269 16.8574 18.4959 16.7068 18.4167L12.2056 16.0502C11.9846 15.9341 11.7422 15.876 11.4998 15.876C11.2573 15.876 11.0149 15.9341 10.794 16.0502L6.29273 18.4166C6.14207 18.4958 6.01911 18.4268 5.97325 18.3935C5.92738 18.3603 5.82379 18.2646 5.85259 18.0969L6.71226 13.0847C6.79667 12.5926 6.63365 12.0907 6.27602 11.7421L2.63443 8.19245C2.51256 8.07359 2.54014 7.93537 2.5577 7.88146C2.57518 7.82751 2.63416 7.69944 2.80257 7.675L7.83504 6.94372C8.32913 6.87193 8.75612 6.56179 8.97713 6.11396L11.2278 1.55367C11.3031 1.40107 11.4431 1.38459 11.4998 1.38459C11.5565 1.38459 11.6964 1.40103 11.7718 1.55367V1.55372L14.0224 6.11401C14.2434 6.56183 14.6704 6.87197 15.1644 6.94376L20.197 7.67504C20.3654 7.69948 20.4243 7.82755 20.4419 7.8815C20.4594 7.93546 20.487 8.07372 20.3651 8.1925L16.7235 11.7422C16.3659 12.0907 16.2029 12.5926 16.2873 13.0847Z" />
                                    <path
                                        d="M18.5879 1.01635C18.3167 0.819414 17.9374 0.879519 17.7404 1.15058L17.0964 2.03698C16.8994 2.30803 16.9595 2.68749 17.2306 2.88443C17.3384 2.96264 17.4631 3.00033 17.5867 3.00033C17.7744 3.00033 17.9594 2.91358 18.0781 2.75025L18.7221 1.86385C18.919 1.59274 18.859 1.21329 18.5879 1.01635Z" />
                                    <path
                                        d="M5.90081 2.03339L5.25676 1.14699C5.05987 0.87602 4.68046 0.815914 4.40931 1.01276C4.13825 1.2097 4.07814 1.58916 4.27508 1.86021L4.91913 2.74661C5.03785 2.91008 5.22284 2.99678 5.41053 2.99678C5.5342 2.99678 5.65899 2.95909 5.76662 2.88084C6.03768 2.68395 6.09779 2.30449 5.90081 2.03339Z" />
                                    <path
                                        d="M2.22596 13.7833C2.12241 13.4647 1.78016 13.2903 1.46143 13.3938L0.419382 13.7324C0.100661 13.836 -0.073681 14.1783 0.029864 14.497C0.113149 14.7534 0.35101 14.9164 0.606751 14.9164C0.668878 14.9164 0.732083 14.9067 0.794389 14.8865L1.83644 14.5479C2.15512 14.4443 2.3295 14.1021 2.22596 13.7833Z" />
                                    <path
                                        d="M11.5003 20.5197C11.1652 20.5197 10.8936 20.7913 10.8936 21.1264V22.2221C10.8936 22.5572 11.1652 22.8288 11.5003 22.8288C11.8353 22.8288 12.107 22.5572 12.107 22.2221V21.1264C12.107 20.7913 11.8354 20.5197 11.5003 20.5197Z" />
                                    <path
                                        d="M22.5806 13.7333L21.5385 13.3947C21.2199 13.2912 20.8775 13.4655 20.774 13.7842C20.6705 14.1029 20.8448 14.4452 21.1635 14.5488L22.2056 14.8874C22.2679 14.9076 22.331 14.9172 22.3932 14.9172C22.649 14.9172 22.8868 14.7542 22.9701 14.4978C23.0737 14.1791 22.8993 13.8368 22.5806 13.7333Z" />

                                    <path
                                        d="M22.5808 13.7333C22.8993 13.8371 23.0741 14.1792 22.9703 14.4978C22.8872 14.7544 22.6493 14.917 22.3933 14.917C22.3314 14.917 22.2684 14.9073 22.2059 14.8873L21.1641 14.5488C20.845 14.445 20.6708 14.1028 20.7746 13.7843C20.8778 13.4657 21.2206 13.291 21.5391 13.3948L22.5808 13.7333Z" />
                                    <path
                                        d="M21.5965 7.50656C21.7761 8.05928 21.6293 8.65508 21.2125 9.06157L17.5709 12.6109C17.4993 12.6807 17.4672 12.7814 17.4836 12.8797L18.3433 17.8918C18.4416 18.4651 18.2104 19.0336 17.7402 19.3752C17.4744 19.5682 17.1632 19.6664 16.8501 19.6664C16.6087 19.6664 16.3666 19.6082 16.1427 19.4905L11.6414 17.1243C11.5528 17.0776 11.4473 17.0776 11.3593 17.1243L6.85807 19.4905C6.34295 19.7611 5.7308 19.7174 5.26056 19.3752C4.78974 19.0336 4.55857 18.4651 4.65686 17.8918L5.51657 12.8797C5.53355 12.7814 5.5008 12.6807 5.4292 12.6109L1.78766 9.06157C1.37146 8.65508 1.22403 8.05928 1.40421 7.50656C1.5838 6.95321 2.05279 6.55763 2.62855 6.47394L7.66132 5.74284C7.75961 5.72829 7.84514 5.66638 7.88943 5.57659L10.1397 1.01648C10.3977 0.495256 10.9188 0.17128 11.5001 0.17128C12.0819 0.17128 12.6031 0.495256 12.8603 1.01644L15.1113 5.57654C15.1556 5.66634 15.2405 5.72824 15.3394 5.7428L20.3722 6.4739C20.9473 6.55763 21.417 6.95321 21.5965 7.50656ZM20.3655 8.19216C20.4874 8.07383 20.4601 7.93552 20.4425 7.88152C20.4249 7.82753 20.3661 7.6995 20.1974 7.67524L15.1652 6.94356C14.6707 6.87195 14.2436 6.56195 14.0228 6.11416L11.7725 1.55339C11.7349 1.47756 11.6809 1.43507 11.6293 1.41202C11.5778 1.38898 11.5286 1.38471 11.5001 1.38471C11.4437 1.38471 11.3035 1.4011 11.2283 1.55339L8.97735 6.11412C8.75651 6.5619 8.32935 6.87191 7.83548 6.94351L2.80271 7.6752C2.63466 7.69946 2.57581 7.82748 2.5582 7.88148C2.54059 7.93547 2.5127 8.07379 2.63466 8.19211L6.2762 11.7421C6.63418 12.0909 6.79675 12.5927 6.71244 13.0847L5.85272 18.0968C5.8242 18.2643 5.92797 18.3602 5.97347 18.3935C6.01956 18.4269 6.14274 18.4961 6.29322 18.4166L10.7945 16.0504C11.0153 15.9339 11.258 15.8756 11.5001 15.8756C11.7428 15.8756 11.9849 15.9339 12.2063 16.0504L16.7076 18.4166C16.8581 18.4961 16.9812 18.4269 17.0267 18.3935C17.0728 18.3602 17.1766 18.2643 17.1475 18.0968L16.2877 13.0847C16.2034 12.5927 16.3666 12.0909 16.724 11.7421L20.3655 8.19216Z" />
                                    <path class="to-favorits__path-star"
                                        d="M20.4427 7.88149C20.4603 7.93549 20.4876 8.0738 20.3656 8.19212L16.7241 11.7421C16.3667 12.0909 16.2035 12.5927 16.2879 13.0847L17.1476 18.0968C17.1767 18.2643 17.073 18.3602 17.0268 18.3935C16.9813 18.4269 16.8581 18.4961 16.7077 18.4166L12.2064 16.0504C11.985 15.9339 11.7429 15.8756 11.5002 15.8756C11.2582 15.8756 11.0155 15.9339 10.7946 16.0504L6.2933 18.4166C6.14282 18.4961 6.01969 18.427 5.97355 18.3936C5.92805 18.3602 5.82428 18.2644 5.8528 18.0969L6.71251 13.0848C6.79683 12.5928 6.63426 12.091 6.27628 11.7421L2.63474 8.19217C2.51278 8.07385 2.54072 7.93553 2.55828 7.88153C2.57589 7.82754 2.63474 7.69951 2.80279 7.67525L7.83556 6.94357C8.32943 6.87196 8.75655 6.56196 8.97743 6.11418L11.2284 1.5534C11.3037 1.40112 11.4438 1.38472 11.5002 1.38472C11.5288 1.38472 11.5779 1.38899 11.6295 1.41203C11.681 1.43508 11.735 1.47757 11.7726 1.5534L14.023 6.11413C14.2438 6.56191 14.6709 6.87192 15.1654 6.94352L20.1975 7.67521C20.3662 7.69951 20.4251 7.82749 20.4427 7.88149Z" />
                                    <path
                                        d="M18.5875 1.01644C18.8587 1.21302 18.9187 1.59283 18.7222 1.86344L18.0778 2.74988C17.9595 2.91371 17.7745 3.00046 17.5864 3.00046C17.4632 3.00046 17.3382 2.96286 17.2302 2.88456C16.9596 2.68735 16.8996 2.30817 17.0961 2.03697L17.7405 1.15053C17.9371 0.879341 18.3169 0.81928 18.5875 1.01644Z" />
                                    <path
                                        d="M12.1065 21.1262V22.2219C12.1065 22.5575 11.8353 22.8287 11.4998 22.8287C11.1649 22.8287 10.8931 22.5575 10.8931 22.2219V21.1262C10.8931 20.7913 11.1649 20.5195 11.4998 20.5195C11.8353 20.5195 12.1065 20.7913 12.1065 21.1262Z" />
                                    <path
                                        d="M5.90132 2.03333C6.0979 2.30453 6.03784 2.68376 5.76723 2.88092C5.65924 2.95917 5.53426 2.99681 5.41109 2.99681C5.223 2.99681 5.03797 2.91007 4.91964 2.74683L4.27533 1.86038C4.07875 1.58919 4.13881 1.20938 4.40942 1.0128C4.68061 0.815593 5.06043 0.875698 5.25701 1.14689L5.90132 2.03333Z" />
                                    <path
                                        d="M2.22562 13.7831C2.32939 14.1022 2.15523 14.4444 1.8361 14.5481L0.794367 14.8867C0.731881 14.9067 0.668765 14.9164 0.606908 14.9164C0.350854 14.9164 0.113038 14.7532 0.0299326 14.4972C-0.0738367 14.178 0.100909 13.8358 0.419449 13.7321L1.46119 13.3936C1.78027 13.2904 2.12248 13.4645 2.22562 13.7831Z" />
                                </svg>
                            </div>
                        </div>

                        <div class="card__body">

                            <div class="card__title">
                                <a href="#" class="card__link_title link" title="Yenisey Residence ">Yenisey
                                    Residence</a>
                            </div>

                            <ul class="card__property">
                                <li class="card__property-item">Квартира / 2+1 / 65 м2 </li>
                                <li class="card__property-item">Расстояние до моря / 200м</li>
                                <li class="card__property-item">Аланья, Махмутлар</li>
                            </ul>

                            <div class="card__price">132 000 €</div>

                        </div>

                    </div>
                </div>

                <div class="offset-md-1 col-md-10 col-lg-6 offset-lg-0 col-xl-6">
                    <div class="card product-list__card" >

                        <div class="card__image-area">
                            <div class="card__image-inner">
                                <a href="#" title="Product Image">
                                    <img src="../assets/images/products/card_image_02.png" class="card__image" alt="Product Image #02">
                                </a>
                            </div>

                            <div class="to-favorits card__to-favorits">
                                <svg class="to-favorits__icon" width="23" height="23" viewBox="0 0 23 23" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M21.2121 9.06129C21.6285 8.65533 21.7756 8.05953 21.5959 7.50641C21.4161 6.95328 20.947 6.55775 20.3714 6.47415L15.3388 5.74286C15.24 5.72853 15.1547 5.6665 15.1104 5.57692L12.8598 1.01668C12.6025 0.495134 12.0813 0.171158 11.4997 0.171158C10.9181 0.171158 10.3969 0.495134 10.1395 1.01668L7.8889 5.57697C7.84465 5.6665 7.7593 5.72853 7.66047 5.74291L2.62796 6.47415C2.05242 6.55775 1.5833 6.95328 1.40353 7.50641C1.22375 8.05953 1.37082 8.65533 1.78734 9.06129L5.42893 12.611C5.5004 12.6807 5.53306 12.7811 5.51617 12.8795L4.6565 17.8917C4.55821 18.465 4.78938 19.0334 5.25989 19.3752C5.7304 19.7172 6.3426 19.7613 6.85731 19.4908L11.3585 17.1243C11.4469 17.0778 11.5525 17.0778 11.6409 17.1243L16.1422 19.4908C16.3661 19.6085 16.6083 19.6666 16.8494 19.6666C17.1625 19.6666 17.4737 19.5685 17.7395 19.3752C18.21 19.0333 18.4412 18.4648 18.3428 17.8917L17.4832 12.8795C17.4663 12.781 17.4989 12.6806 17.5704 12.6109L21.2121 9.06129ZM16.2873 13.0847L17.147 18.097C17.1757 18.2647 17.0722 18.3603 17.0263 18.3936C16.9804 18.4269 16.8574 18.4959 16.7068 18.4167L12.2056 16.0502C11.9846 15.9341 11.7422 15.876 11.4998 15.876C11.2573 15.876 11.0149 15.9341 10.794 16.0502L6.29273 18.4166C6.14207 18.4958 6.01911 18.4268 5.97325 18.3935C5.92738 18.3603 5.82379 18.2646 5.85259 18.0969L6.71226 13.0847C6.79667 12.5926 6.63365 12.0907 6.27602 11.7421L2.63443 8.19245C2.51256 8.07359 2.54014 7.93537 2.5577 7.88146C2.57518 7.82751 2.63416 7.69944 2.80257 7.675L7.83504 6.94372C8.32913 6.87193 8.75612 6.56179 8.97713 6.11396L11.2278 1.55367C11.3031 1.40107 11.4431 1.38459 11.4998 1.38459C11.5565 1.38459 11.6964 1.40103 11.7718 1.55367V1.55372L14.0224 6.11401C14.2434 6.56183 14.6704 6.87197 15.1644 6.94376L20.197 7.67504C20.3654 7.69948 20.4243 7.82755 20.4419 7.8815C20.4594 7.93546 20.487 8.07372 20.3651 8.1925L16.7235 11.7422C16.3659 12.0907 16.2029 12.5926 16.2873 13.0847Z" />
                                    <path
                                        d="M18.5879 1.01635C18.3167 0.819414 17.9374 0.879519 17.7404 1.15058L17.0964 2.03698C16.8994 2.30803 16.9595 2.68749 17.2306 2.88443C17.3384 2.96264 17.4631 3.00033 17.5867 3.00033C17.7744 3.00033 17.9594 2.91358 18.0781 2.75025L18.7221 1.86385C18.919 1.59274 18.859 1.21329 18.5879 1.01635Z" />
                                    <path
                                        d="M5.90081 2.03339L5.25676 1.14699C5.05987 0.87602 4.68046 0.815914 4.40931 1.01276C4.13825 1.2097 4.07814 1.58916 4.27508 1.86021L4.91913 2.74661C5.03785 2.91008 5.22284 2.99678 5.41053 2.99678C5.5342 2.99678 5.65899 2.95909 5.76662 2.88084C6.03768 2.68395 6.09779 2.30449 5.90081 2.03339Z" />
                                    <path
                                        d="M2.22596 13.7833C2.12241 13.4647 1.78016 13.2903 1.46143 13.3938L0.419382 13.7324C0.100661 13.836 -0.073681 14.1783 0.029864 14.497C0.113149 14.7534 0.35101 14.9164 0.606751 14.9164C0.668878 14.9164 0.732083 14.9067 0.794389 14.8865L1.83644 14.5479C2.15512 14.4443 2.3295 14.1021 2.22596 13.7833Z" />
                                    <path
                                        d="M11.5003 20.5197C11.1652 20.5197 10.8936 20.7913 10.8936 21.1264V22.2221C10.8936 22.5572 11.1652 22.8288 11.5003 22.8288C11.8353 22.8288 12.107 22.5572 12.107 22.2221V21.1264C12.107 20.7913 11.8354 20.5197 11.5003 20.5197Z" />
                                    <path
                                        d="M22.5806 13.7333L21.5385 13.3947C21.2199 13.2912 20.8775 13.4655 20.774 13.7842C20.6705 14.1029 20.8448 14.4452 21.1635 14.5488L22.2056 14.8874C22.2679 14.9076 22.331 14.9172 22.3932 14.9172C22.649 14.9172 22.8868 14.7542 22.9701 14.4978C23.0737 14.1791 22.8993 13.8368 22.5806 13.7333Z" />

                                    <path
                                        d="M22.5808 13.7333C22.8993 13.8371 23.0741 14.1792 22.9703 14.4978C22.8872 14.7544 22.6493 14.917 22.3933 14.917C22.3314 14.917 22.2684 14.9073 22.2059 14.8873L21.1641 14.5488C20.845 14.445 20.6708 14.1028 20.7746 13.7843C20.8778 13.4657 21.2206 13.291 21.5391 13.3948L22.5808 13.7333Z" />
                                    <path
                                        d="M21.5965 7.50656C21.7761 8.05928 21.6293 8.65508 21.2125 9.06157L17.5709 12.6109C17.4993 12.6807 17.4672 12.7814 17.4836 12.8797L18.3433 17.8918C18.4416 18.4651 18.2104 19.0336 17.7402 19.3752C17.4744 19.5682 17.1632 19.6664 16.8501 19.6664C16.6087 19.6664 16.3666 19.6082 16.1427 19.4905L11.6414 17.1243C11.5528 17.0776 11.4473 17.0776 11.3593 17.1243L6.85807 19.4905C6.34295 19.7611 5.7308 19.7174 5.26056 19.3752C4.78974 19.0336 4.55857 18.4651 4.65686 17.8918L5.51657 12.8797C5.53355 12.7814 5.5008 12.6807 5.4292 12.6109L1.78766 9.06157C1.37146 8.65508 1.22403 8.05928 1.40421 7.50656C1.5838 6.95321 2.05279 6.55763 2.62855 6.47394L7.66132 5.74284C7.75961 5.72829 7.84514 5.66638 7.88943 5.57659L10.1397 1.01648C10.3977 0.495256 10.9188 0.17128 11.5001 0.17128C12.0819 0.17128 12.6031 0.495256 12.8603 1.01644L15.1113 5.57654C15.1556 5.66634 15.2405 5.72824 15.3394 5.7428L20.3722 6.4739C20.9473 6.55763 21.417 6.95321 21.5965 7.50656ZM20.3655 8.19216C20.4874 8.07383 20.4601 7.93552 20.4425 7.88152C20.4249 7.82753 20.3661 7.6995 20.1974 7.67524L15.1652 6.94356C14.6707 6.87195 14.2436 6.56195 14.0228 6.11416L11.7725 1.55339C11.7349 1.47756 11.6809 1.43507 11.6293 1.41202C11.5778 1.38898 11.5286 1.38471 11.5001 1.38471C11.4437 1.38471 11.3035 1.4011 11.2283 1.55339L8.97735 6.11412C8.75651 6.5619 8.32935 6.87191 7.83548 6.94351L2.80271 7.6752C2.63466 7.69946 2.57581 7.82748 2.5582 7.88148C2.54059 7.93547 2.5127 8.07379 2.63466 8.19211L6.2762 11.7421C6.63418 12.0909 6.79675 12.5927 6.71244 13.0847L5.85272 18.0968C5.8242 18.2643 5.92797 18.3602 5.97347 18.3935C6.01956 18.4269 6.14274 18.4961 6.29322 18.4166L10.7945 16.0504C11.0153 15.9339 11.258 15.8756 11.5001 15.8756C11.7428 15.8756 11.9849 15.9339 12.2063 16.0504L16.7076 18.4166C16.8581 18.4961 16.9812 18.4269 17.0267 18.3935C17.0728 18.3602 17.1766 18.2643 17.1475 18.0968L16.2877 13.0847C16.2034 12.5927 16.3666 12.0909 16.724 11.7421L20.3655 8.19216Z" />
                                    <path class="to-favorits__path-star"
                                        d="M20.4427 7.88149C20.4603 7.93549 20.4876 8.0738 20.3656 8.19212L16.7241 11.7421C16.3667 12.0909 16.2035 12.5927 16.2879 13.0847L17.1476 18.0968C17.1767 18.2643 17.073 18.3602 17.0268 18.3935C16.9813 18.4269 16.8581 18.4961 16.7077 18.4166L12.2064 16.0504C11.985 15.9339 11.7429 15.8756 11.5002 15.8756C11.2582 15.8756 11.0155 15.9339 10.7946 16.0504L6.2933 18.4166C6.14282 18.4961 6.01969 18.427 5.97355 18.3936C5.92805 18.3602 5.82428 18.2644 5.8528 18.0969L6.71251 13.0848C6.79683 12.5928 6.63426 12.091 6.27628 11.7421L2.63474 8.19217C2.51278 8.07385 2.54072 7.93553 2.55828 7.88153C2.57589 7.82754 2.63474 7.69951 2.80279 7.67525L7.83556 6.94357C8.32943 6.87196 8.75655 6.56196 8.97743 6.11418L11.2284 1.5534C11.3037 1.40112 11.4438 1.38472 11.5002 1.38472C11.5288 1.38472 11.5779 1.38899 11.6295 1.41203C11.681 1.43508 11.735 1.47757 11.7726 1.5534L14.023 6.11413C14.2438 6.56191 14.6709 6.87192 15.1654 6.94352L20.1975 7.67521C20.3662 7.69951 20.4251 7.82749 20.4427 7.88149Z" />
                                    <path
                                        d="M18.5875 1.01644C18.8587 1.21302 18.9187 1.59283 18.7222 1.86344L18.0778 2.74988C17.9595 2.91371 17.7745 3.00046 17.5864 3.00046C17.4632 3.00046 17.3382 2.96286 17.2302 2.88456C16.9596 2.68735 16.8996 2.30817 17.0961 2.03697L17.7405 1.15053C17.9371 0.879341 18.3169 0.81928 18.5875 1.01644Z" />
                                    <path
                                        d="M12.1065 21.1262V22.2219C12.1065 22.5575 11.8353 22.8287 11.4998 22.8287C11.1649 22.8287 10.8931 22.5575 10.8931 22.2219V21.1262C10.8931 20.7913 11.1649 20.5195 11.4998 20.5195C11.8353 20.5195 12.1065 20.7913 12.1065 21.1262Z" />
                                    <path
                                        d="M5.90132 2.03333C6.0979 2.30453 6.03784 2.68376 5.76723 2.88092C5.65924 2.95917 5.53426 2.99681 5.41109 2.99681C5.223 2.99681 5.03797 2.91007 4.91964 2.74683L4.27533 1.86038C4.07875 1.58919 4.13881 1.20938 4.40942 1.0128C4.68061 0.815593 5.06043 0.875698 5.25701 1.14689L5.90132 2.03333Z" />
                                    <path
                                        d="M2.22562 13.7831C2.32939 14.1022 2.15523 14.4444 1.8361 14.5481L0.794367 14.8867C0.731881 14.9067 0.668765 14.9164 0.606908 14.9164C0.350854 14.9164 0.113038 14.7532 0.0299326 14.4972C-0.0738367 14.178 0.100909 13.8358 0.419449 13.7321L1.46119 13.3936C1.78027 13.2904 2.12248 13.4645 2.22562 13.7831Z" />
                                </svg>
                            </div>
                        </div>

                        <div class="card__body">

                            <div class="card__title">
                                <a href="#" class="card__link_title link" title="Yenisey Residence ">Yenisey
                                    Residence</a>
                            </div>

                            <ul class="card__property">
                                <li class="card__property-item">Квартира / 2+1 / 65 м2 </li>
                                <li class="card__property-item">Расстояние до моря / 200м</li>
                                <li class="card__property-item">Аланья, Махмутлар</li>
                            </ul>

                            <div class="card__price">132 000 €</div>

                        </div>

                    </div>
                </div>

            </div>

            <button class="button single-prodList__button">Смотреть все</button>

        </div>
    </section>

    <section class="single-managers single__managers managers">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="single-section__title single-managers__title">Свяжитесь с нами</h3>
                </div>
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                    <div class="manager">
                        <div class="manager__image-box">
                            <img src="../assets/images/pages/manager_01.jpg" alt="Manager Image" class="manager__image">
                        </div>
                        <div class="manager__body">
                            <div class="manager__body-header">
                                <h4 class="manager__name">Татьяна Чуева</h4>
                                <div class="manager__proffesional">Менеджер по продаже недвижимости</div>
                            </div>

                            <ul class="manager__contact-list">
                                <li class="manager__contact-item manager__contact-item_mail"><a class="link" href="mailto:tatiana@yenisey.co">tatiana@yenisey.co</a></li>
                                <li class="manager__contact-item manager__contact-item_phone">
                                    <a class="manager__contact-phone-link link" href="tel:+902425283388">(+90) 242 528 33 88</a>
                                    <a class="manager__contact-phone-link link" href="tel:+902425283388">(+90) 242 528 33 88</a>
                                </li>
                                <li class="manager__contact-item manager__contact-item_massangers">
                                    <a class="manager__massanger-link link" href="tel:+902425283388">
                                        <img src="../assets/images/icons/massanger__viber.svg" alt="Viber Icon">
                                    </a>
                                    <a class="manager__massanger-link link" href="tel:+902425283388">
                                        <img src="../assets/images/icons/massanger__whatsapp.svg" alt="Viber Icon">
                                    </a>
                                    <a class="manager__massanger-link link" href="tel:+902425283388">
                                        <img src="../assets/images/icons/massanger__telegram.svg" alt="Viber Icon">
                                    </a>
                                </li>
                                <li class="manager__contact-item manager__contact-item_language">Russian, Turkish, Ukrainian</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="single-request single__request">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="request">
                        <header class="request__header">
                            <h3 class="request__title">Отправить запрос</h3>
                            <p class="request__text">Пожалуйста, заполните форму и нажмите «Отправить». Наш специалист предоставит Вам всю необходимую информацию</p>
                        </header>

                        <form class="request__form send-form" action="">
                            <div class="send-form__col">
                                <div class="send-form__row">
                                    <span class="send-form__label">Ваше имя*</span>
                                    <input class="input send-form__input" type="text" name="name" placeholder="Имя*">
                                </div>

                                <div class="send-form__row">
                                    <span class="send-form__label">Ваш телефон*</span>
                                    <input class="input send-form__input send-form__input_phone" type="text" name="phone" placeholder="Телефон*">
                                </div>
                            </div>
                            <div class="send-form__col">
                                <div class="send-form__row">
                                    <span class="send-form__label">Сообщение</span>
                                    <textarea class="textarea send-form__textarea request__textarea" name="massege" placeholder="Сообщение"></textarea>
                                </div>
                            </div>

                            <button type="submit" class="button request__submit">Отправить</button>
                        </form>
                    </div>
                </div>    
            </div>
        </div>
    </section>

</main>

<?php include '../layouts/footer.php'; ?>
<?php include '../layouts/modal.php'; ?>
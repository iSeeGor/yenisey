<!--== PopUp Overlay -->
<div class="popup-overlay">

</div>

<!--== Video Modal Window -->
<div class="video-popup__wrap" id="openModalVideo">
    <div class="video-popup">
        <div class="video-popup__content">
            <div class="video-popup__responsive-box"></div>

            <iframe class="video-popup__iframe" src="https://www.youtube.com/embed/4pwXhzedNCI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            

            <button class="popup__close-btn video-popup__close-btn" data-fancybox-close>
                <svg class="popup__close-icon" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23.899 4.10101C21.2534 1.45539 17.7416 0 14 0C10.2584 0 6.74663 1.45539 4.10101 4.10101C1.45539 6.74663 0 10.2584 0 14C0 17.7416 1.45539 21.2534 4.10101 23.899C6.74663 26.5446 10.2584 28 14 28C17.7416 28 21.2534 26.5446 23.899 23.899C26.5446 21.2534 28 17.7416 28 14C28 10.2584 26.5446 6.74663 23.899 4.10101ZM22.7736 22.7736C20.4285 25.1187 17.3114 26.4091 14 26.4091C10.6886 26.4091 7.57155 25.1187 5.22643 22.7736C0.388889 17.936 0.388889 10.064 5.22643 5.22643C7.57155 2.88131 10.6886 1.59091 14 1.59091C17.3114 1.59091 20.4285 2.88131 22.7736 5.22643C27.6111 10.064 27.6111 17.936 22.7736 22.7736Z" fill="#174682"/>
                    <path d="M20.1693 7.83081C19.857 7.51852 19.3562 7.51852 19.0439 7.83081L14.0001 12.8746L8.95632 7.83081C8.64403 7.51852 8.14319 7.51852 7.8309 7.83081C7.51861 8.14309 7.51861 8.64394 7.8309 8.95623L12.8747 14L7.8309 19.0438C7.51861 19.3561 7.51861 19.8569 7.8309 20.1692C7.9841 20.3224 8.19033 20.4049 8.39066 20.4049C8.591 20.4049 8.79723 20.3283 8.95043 20.1692L13.9942 15.1254L19.038 20.1692C19.1912 20.3224 19.3974 20.4049 19.5977 20.4049C19.804 20.4049 20.0043 20.3283 20.1575 20.1692C20.4698 19.8569 20.4698 19.3561 20.1575 19.0438L15.1255 14L20.1693 8.95623C20.4816 8.64394 20.4816 8.14309 20.1693 7.83081Z" fill="#174682"/>
                </svg>
            </button>     
        </div>     
    </div>
</div>


<!--== Send Form Modal Window -->
<div class="page__popup popup" id="openModalMainForm">
    <header class="popup__header">
        <h3 class="popup__title">Перезвоните мне</h3>
        <p class="popup__text">Для получения подробной информации заполните форму и наш менеджер свяжется с Вами в ближайшее время</p>
    </header>

    <form class="popup__form send-form send-form_validate" action="">
        <div class="send-form__row">
            <span class="send-form__label">Ваше имя*</span>
            <input class="input send-form__input" type="text" name="name" placeholder="Имя*">
        </div>

        <div class="send-form__row">
            <span class="send-form__label">Ваш телефон*</span>
            <input class="input send-form__input send-form__input_phone" type="text" name="phone" placeholder="Телефон*">
        </div>

        <div class="send-form__row">
            <span class="send-form__label">Сообщение</span>
            <textarea class="textarea send-form__textarea" name="massege" placeholder="Сообщение"></textarea>
        </div>

        <button type="submit" class="button popup__submit">Отправить</button>
    </form>

    <button class="popup__close-btn" data-fancybox-close>
        <svg class="popup__close-icon" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.899 4.10101C21.2534 1.45539 17.7416 0 14 0C10.2584 0 6.74663 1.45539 4.10101 4.10101C1.45539 6.74663 0 10.2584 0 14C0 17.7416 1.45539 21.2534 4.10101 23.899C6.74663 26.5446 10.2584 28 14 28C17.7416 28 21.2534 26.5446 23.899 23.899C26.5446 21.2534 28 17.7416 28 14C28 10.2584 26.5446 6.74663 23.899 4.10101ZM22.7736 22.7736C20.4285 25.1187 17.3114 26.4091 14 26.4091C10.6886 26.4091 7.57155 25.1187 5.22643 22.7736C0.388889 17.936 0.388889 10.064 5.22643 5.22643C7.57155 2.88131 10.6886 1.59091 14 1.59091C17.3114 1.59091 20.4285 2.88131 22.7736 5.22643C27.6111 10.064 27.6111 17.936 22.7736 22.7736Z" fill="#174682"/>
            <path d="M20.1693 7.83081C19.857 7.51852 19.3562 7.51852 19.0439 7.83081L14.0001 12.8746L8.95632 7.83081C8.64403 7.51852 8.14319 7.51852 7.8309 7.83081C7.51861 8.14309 7.51861 8.64394 7.8309 8.95623L12.8747 14L7.8309 19.0438C7.51861 19.3561 7.51861 19.8569 7.8309 20.1692C7.9841 20.3224 8.19033 20.4049 8.39066 20.4049C8.591 20.4049 8.79723 20.3283 8.95043 20.1692L13.9942 15.1254L19.038 20.1692C19.1912 20.3224 19.3974 20.4049 19.5977 20.4049C19.804 20.4049 20.0043 20.3283 20.1575 20.1692C20.4698 19.8569 20.4698 19.3561 20.1575 19.0438L15.1255 14L20.1693 8.95623C20.4816 8.64394 20.4816 8.14309 20.1693 7.83081Z" fill="#174682"/>
        </svg>
    </button>
</div>

<!--== Success Modal Window -->
<!-- data-fancybox data-src="#openModalSuccess" data-modal="true" -->
<div class="modal-success" id="openModalSuccess">
    <div class="modal-success__content">
        <h3 class="modal-success__title">Спасибо за заявку</h3>
        <div class="modal-success__message">Специалист свяжется с Вами в ближайшее время</div>
        <img class="modal-success__icon-check" src="../assets/images/icons/check.svg" alt="Icon">
    </div>

    <button class="popup__close-btn" data-fancybox-close>
        <svg class="popup__close-icon" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M23.899 4.10101C21.2534 1.45539 17.7416 0 14 0C10.2584 0 6.74663 1.45539 4.10101 4.10101C1.45539 6.74663 0 10.2584 0 14C0 17.7416 1.45539 21.2534 4.10101 23.899C6.74663 26.5446 10.2584 28 14 28C17.7416 28 21.2534 26.5446 23.899 23.899C26.5446 21.2534 28 17.7416 28 14C28 10.2584 26.5446 6.74663 23.899 4.10101ZM22.7736 22.7736C20.4285 25.1187 17.3114 26.4091 14 26.4091C10.6886 26.4091 7.57155 25.1187 5.22643 22.7736C0.388889 17.936 0.388889 10.064 5.22643 5.22643C7.57155 2.88131 10.6886 1.59091 14 1.59091C17.3114 1.59091 20.4285 2.88131 22.7736 5.22643C27.6111 10.064 27.6111 17.936 22.7736 22.7736Z" fill="#174682"/>
            <path d="M20.1693 7.83081C19.857 7.51852 19.3562 7.51852 19.0439 7.83081L14.0001 12.8746L8.95632 7.83081C8.64403 7.51852 8.14319 7.51852 7.8309 7.83081C7.51861 8.14309 7.51861 8.64394 7.8309 8.95623L12.8747 14L7.8309 19.0438C7.51861 19.3561 7.51861 19.8569 7.8309 20.1692C7.9841 20.3224 8.19033 20.4049 8.39066 20.4049C8.591 20.4049 8.79723 20.3283 8.95043 20.1692L13.9942 15.1254L19.038 20.1692C19.1912 20.3224 19.3974 20.4049 19.5977 20.4049C19.804 20.4049 20.0043 20.3283 20.1575 20.1692C20.4698 19.8569 20.4698 19.3561 20.1575 19.0438L15.1255 14L20.1693 8.95623C20.4816 8.64394 20.4816 8.14309 20.1693 7.83081Z" fill="#174682"/>
        </svg>
    </button> 
</div>

<!--== To Top Button -->
<div class="to-top to-top_hide">
    <svg class="to-top__icon" width="26" height="14" viewBox="0 0 26 14" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12.9992 2.41426L2.07302 13.442C1.8043 13.7132 1.37333 13.7132 1.10462 13.442C0.835897 13.1708 0.835897 12.7358 1.10462 12.4646L12.5176 0.945599C12.7863 0.674383 13.2172 0.674383 13.486 0.945598L24.8938 12.4646C25.0256 12.5976 25.0966 12.7768 25.0966 12.9507C25.0966 13.1247 25.0307 13.3038 24.8938 13.4369C24.6251 13.7081 24.1941 13.7081 23.9254 13.4369L12.9992 2.41426Z" fill="white" stroke="white" stroke-width="0.7"/>
    </svg>
</div>
<?php

/* @var $this yii\web\View */

$this->title = 'Pazorini';
?>
<main class="main" role="main">
    <div class="video-wrapper">
        <video src="assets/videos/343015709.mp4" autoplay loop></video>
        <section class="hero-section wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <hgroup>
                <h1>
                    ОДНА ИЗ САМЫХ ПОПУЛЯРНЫХ <br> КУРЬЕРСКИХ ДОСТАВОК В УКРАИНЕ
                </h1>
            </hgroup>
            <div class="btn-group">
                <a href="#" class="btn btn-flat red">Вызов курьера</a>
                <a href="#" class="btn btn-flat blue">Доставка в Европу</a>
            </div>
        </section>
    </div>
    <section class="recommendation-section">
        <div class="container-center">
            <h2 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                Почему именно мы
                <small>
                    Мы знаем, как осуществить невозможное, например, доставить корреспонденцию, документы или малогабаритные посылки в кратчайшие сроки. Будьте уверены: ваш груз окажется в нужном месте именно в нужное время, несмотря на расстояние.
                </small>
            </h2>
            <div class="figure-controller wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.7s">
                <figure>
                    <img src="assets/img/star.png" alt="...">
                    <figcaption>
                        <h3>КАЧЕСТВО</h3>
                        <p>Мы постоянно развиваемся, совершенствуемся и улучшаем сервис предоставления услуг.</p>
                    </figcaption>
                </figure>
                <figure>
                    <img src="assets/img/speed.png" alt="...">
                    <figcaption>
                        <h3>СКОРОСТЬ</h3>
                        <p>Заказывая у нас, вы можете спать спокойно — результат будет вовремя.</p>
                    </figcaption>
                </figure>
                <figure>
                    <img src="assets/img/handshake.png" alt="...">
                    <figcaption>
                        <h3>САМООТДАЧА</h3>
                        <p>Мы любим нашу работу и делаем ее с душой.</p>
                    </figcaption>
                </figure>
            </div>
        </div>
    </section>
    <section class="items-section">
        <div id="js-parallax-window" class="parallax-window">
            <div class="parallax-static-content">
                <div class="container-center">
                    <h2 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                        Услуги
                        <small>
                            Приоритетное направление нашей деятельности – курьерская доставка посылок на <br> територии Украины по фиксированной цене.
                        </small>
                    </h2>
                    <div class="cards wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.3s">

                        <div class="card">
                            <div class="card-image">
                                <img src="assets/img/truck.png" alt="">
                            </div>
                            <div class="card-header">
                                Вызов курьера
                            </div>
                            <div class="card-copy">
                                <p>Цену уточнять у менеджера</p>
                                <a href="#" class="btn btn-flat blue">Заказать</a>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-image">
                                <img src="assets/img/box.png" alt="">
                            </div>
                            <div class="card-header">
                                Доставка в Европу
                            </div>
                            <div class="card-copy">
                                <p>Цену уточнять у менеджера</p>
                                <a href="#" class="btn btn-flat blue">Заказать</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div id="js-parallax-background" class="parallax-background"></div>
        </div>
    </section>
    <section class="contacts-section">
        <div class="container-center">
            <h2 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                Наши Контакты
                <small>
                    Мы хотели бы услышать от вас вопросы и предложения <br> для улучшения качества нашего сервиса
                </small>
            </h2>
            <div class="form-holder wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                <form>
                    <div class="input-group">
                        <input type="text" id="message_name" placeholder="Ваше имя*">
                        <input type="text" id="message_email" placeholder="Ваш Email*">
                        <input type="text" id="message_title" placeholder="Тема*">
                    </div>
                    <textarea id="message_text" placeholder="Ваше сообщение*"></textarea>
                    <button  id="message_submit" class="btn btn-flat red">Отправить</button>
                </form>
            </div>
        </div>
    </section>
</main>

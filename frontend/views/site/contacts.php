<?php
    $this->title = "Наши Контакты";
?>
<section class="base-section">
    <div class="container-center">
        <h2 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
            Наши Контакты
            <small>
                Мы хотели бы услышать от вас вопросы и предложения, для улучшения качества нашего сервиса
            </small>
        </h2>
        <hr>
        <div class="contacts-block">
            <p><span>Позвоните нам по телефону</span> +380112233445</p>
            <p><span>Приходите к нам по адресу</span> Украина,Киев.</p>
            <p><span>Пишите нам по адресу</span> pazorinis@gmail.com</p>
        </div>
        <hr>
        <section class="contacts-section">
            <div class="container-center">
                <div class="form-holder">
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
    </div>
</section>

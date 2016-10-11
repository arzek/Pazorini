<?php
    $this->title = "Онлайн заказ";
?>
<section class="base-section">
    <div class="container-center">
        <h2 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
            Онлайн заказ
        </h2>
        <hr>
        <div class="one-offer">
            <div class="left">
                <img src="<?=$service->getImg(650,650);?>" alt="img">
            </div>
            <div class="right">
                <h3><?=$service->name?></h3>
                <p class="description">
                    <?=$service->text?>
                </p>
                <hr>
                <div class="bottom">

                    <p>
                        <b><?=$service->getPrice();?></b>
                    </p>
                    <button id="<?=$service->id?>" class="btn btn-flat red final-service">Оформление заказа</button>
                </div>
            </div>
        </div>
        <div class="comments">


            <?php foreach ($comment as $value): ?>
                <div class="comment">
                    <div class="comment-image">
                        <img src="<?=ROOT?>/assets/img/user.png">
                    </div>
                    <div class="comment-content">
                        <h1><?=$value->name?></h1>
                        <p>
                            <?=$value->text?>
                            <span class="img-holder">
                                <?php if ($value->img != null): ?>
                                    <img src="<?=$value->getImg(480,720);?>" alt="img">
                                <?php endif; ?>

                            </span>
                        </p>
                        <p class="comment-detail">
                            <time><?=$value->getDate()?></time>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
            <hr>
            <div class="comment-form">
                <h2>
                    Добавить комментарий
                    <small>
                        Ваш e-mail не будет опубликован. Обязательные поля помечены *
                    </small>
                </h2>

                <div class="form-holder">
                    <fieldset>
                        <form>
                            <label>Комментарий *</label>
                            <textarea id="comment_text"></textarea>
                            <div class="input-group">
                                <label>Имя *</label>
                                <input id="comment_name" type="text">
                                <label>E-mail *</label>
                                <input id="comment_email" type="text">
                                <input type="hidden" id="comment_type" value="<?=$service->id?>" >
                                <!-- <label>Сайт</label>
                                 <input type="text">-->
                            </div>
                            <p>Выберите изображение для вашего комментария (GIF, PNG, JPG, JPEG)</p>
                            <input  type="file" id="comment_img">
                            <hr>
                            <button id="comment_submit" class="btn btn-flat red">Отправить комментарий</button>
                            <!-- <label class="checkbox-controller">
                                 <input type="checkbox"> Уведомлять меня о новых записях почтой.
                             </label>-->
                        </form>
                    </fieldset>
                </div>
            </div>

        </div>
    </div>
</section>

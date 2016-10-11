<?php
    $this->title = "Онлайн заказ";
?>

<section class="base-section">
    <div class="container-center">
        <h2 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
            Онлайн заказ
            <small>
                Отображаются все <?=count($services)?> результата
            </small>
        </h2>
        <hr>
        <div class="items-wrapper">

            <?php foreach ($services as $service): ?>

                <article>
                    <img src="<?=$service->getImg(150,150)?>">
                    <hr>
                    <div class="caption">
                        <p>
                            <a href="#">
                                <?=$service->name?>
                            </a>
                        </p>
                        <button id="<?=$service->id?>" class="btn btn-flat red order-service">Заказать</button>
                    </div>
                </article>
            <?php endforeach; ?>


        </div>
    </div>
</section>

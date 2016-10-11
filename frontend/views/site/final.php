<?php
    $this->title = "Оформление заказа";
?>
<section class="base-section">
            <div class="container-center">
                <h2 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    Оформление заказа
                    <small>
                        Детали оплаты
                    </small>
                </h2>
                <hr>
                <form>
                    <div class="form-controller">
                    <div class="line">
                        <div class="group">
                            <label>Имя *</label>
                            <input id="final_first_name" type="text">
                        </div>
                        <div class="group">
                            <label>Фамилия *</label>
                            <input id="final_last_name" type="text">
                        </div>
                    </div>
                    <div class="line">
                        <div class="group">
                            <label>Email-адрес *</label>
                            <input id="final_email" type="text">
                        </div>
                        <div class="group">
                            <label>Телефон *</label>
                            <input id="final_number" type="tel">
                        </div>
                    </div>
                    <div class="line">
                        <label>Область/регион *</label>
                        <select id="region-select">
                            <option id="0"> Выберите область </option>
                            <?php foreach ($region as $item=>$value): ?>

                                <option id="<?=$item?>"><?=$value?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="line" id="city-bloc">
                        <label>Населённый пункт *</label>
                         <select id="city-select">
                            <option>Населённый пункт</option>
                            <option>Населённый пункт</option>
                            <option>Населённый пункт</option>
                        </select>
                    </div>
                    <div class="line">
                        <label>Адрес *</label>
                        <input id="final_address" type="text" placeholder="Улица">
                    </div>
                    <div class="line">
                        <input id="final_more_address" type="text" placeholder="Подъезд, этаж и т.п.">
                    </div>
                    <div class="line">
                        <label>
                            <input id="final_another_address" type="checkbox">
                            Доставка по другому адресу?
                        </label>
                    </div>
                    <div class="line">
                        <label>Примечание к заказу</label>
                        <textarea id="final_comment" placeholder="Примечание к вашему заказу, например, особые пожелания отделу доставки."></textarea>
                    </div>
                    <div class="form-bottom">
                    <h2>Ваш заказ</h2>
                    <table class="table-minimal">
                      <thead>
                        <tr>
                          <th>ТОВАР</th>
                          <th>ИТОГО</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td><?=$service->name?></td>
                          <td><?=$service->getPrice()?></td>

                        </tr>
                      </tbody>
                    </table>
                    <div class="payment">
                        <input type="hidden" id="isset_price" value="<?=$service->issetPrice()?>">
                        <input type="hidden" id="services_id" value="<?=$service->id?>">
                        <?php if ($service->issetPrice() != null): ?>
                        <div class="holder">
                            <label class="tooltip-item">
                                <input type="radio" name="final_type_payment" value="1" checked> Прямой банковский перевод
                                <div class="tooltip">
                                    <p>Произведите платеж непосредственно на наш банковский счет. Пожалуйста, укажите номер вашего заказа в описании перевода. Ваш заказ не будет выполнен до тех пор, пока денежные средства не поступят на наш счет.</p>
                                  </div>
                            </label>
                            <label class="tooltip-item">
                                <input type="radio" name="final_type_payment" value="2"> Чековые платежи
                                <div class="tooltip">
                                    <p>Пожалуйста, отправьте ваш чек, указав данные магазина: название, улицу, город, область/регион, страну, почтовый индекс.</p>
                                  </div>
                            </label>
                            <label class="tooltip-item">
                                <input type="radio" name="final_type_payment" value="3"> Наложенный платеж
                                <div class="tooltip">
                                <p>Оплата наличными при доставке заказа.</p>
                              </div>
                            </label>
                        </div>
                        <?php endif; ?>
                        <button class="btn btn-flat red" id="final_submit">Подтвердить заказ</button>
                    </div>
                    </div>
                    <p>Оплата :</p>
                    <ul>
                        <li>Полная предоплата заказчиком на наши банковские реквизиты;</li>
                        <li>Услуга наложенного платежа ( для курьерской доставки );</li>
                        <li>Оплата по договору , после выполнения доставки ( для доставки в Европу ).</li>
                    </ul>
                    </div>
                </form>
            </div>
        </section>

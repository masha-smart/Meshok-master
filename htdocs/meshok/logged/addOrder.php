<?php
    $query = "";
?>
<div class="parent">
    <div class="block-center-addOrder">
        <form action="" method="post" id="addOrder_form">
            <p class="input_registration">Тип товара:     
                <select name="year">
                    <option value="2000"><?php  ?></option>
                </select></p>
            <p class="input_registration">Колличество:   <input type="text" id="n_pass" name="n_pass" placeholder=""></p>
            <p class="input_registration">Желаемая цена:        <input type="text" name="n_fname" placeholder="Введите свое имя"></p>
            <p class="input_registration">Способ оплаты:
                <select name="year">
                    <option value="WebMoney">Webmoney Transfer</option>
                    <option value="Yandex">Яндекс.Деньги</option>
                    <option value="Visa">Visa, MasterCard</option>
                    <option value="Qiwi">QIWI</option>
                </select></p></p>

            <p><input class="input_reg" type="submit" value="Создать заказ"></p>
        </form>
    </div>
</div>

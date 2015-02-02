<?=View::factory('header');?>
    <div class="area">
        <div class="center-text-full exchange-process">
            <div class="left-block">
                <div class="item">Ввод личных данных<div class="active"></div></div>
                <div class="item">Подтверждение перевода</div>
                <div class="item">Статус операции и бонусы</div>
            </div>
            <div class="right-block">
                <div class="exchange-data">
                    <?=$toPay;?> <?=strtoupper($payCurrency);?> на <?=$toGet;?> <?=strtoupper($getCurrency);?>
                </div>
                <div class="exchange-form">
                    <form class="form pure-form pure-form-stacked" method="post" action="">

                        <?
                        if(isset($message)) :
                            ?>
                            <div class="error">
                                <?
                                foreach($message as $m) :
                                    ?>
                                    <p><?=$m?></p>
                                <?
                                endforeach;
                                ?>
                            </div><br />
                        <?
                        endif;
                        ?>
                  <div class="title">Мои данные</div>

                        <div class="item">
                            <fieldset>
                                <div class="left">Фамилия</div>
                                <div class="right"><input class="pure-input-1" name="surname" type="text" value="<?=$surname?>" required="required"></div>
                            </fieldset>
                        </div>
                        <div class="item">
                            <fieldset>
                                <div class="left">Имя</div>
                                <div class="right"><input class="pure-input-1" name="firstname" type="text" value="<?=$firstname?>"
                                                          required="required"


                                        ></div>
                            </fieldset>
                        </div>
                        <div class="item">
                            <fieldset>
                                <div class="left">Отчество</div>
                                <div class="right"><input class="pure-input-1" name="patronymic" type="text" value="<?=$patronymic?>"  required="required"></div>
                            </fieldset>
                        </div>

                        <div class="title">Перевод средств</div>

                        <div class="item">
                            <fieldset>
                                <div class="left"><?=$payment_details_to_desc?> (для зачисления средств):</div>
                                <div class="right valigntop"><input class="pure-input-1" name="payment_details_to_<?=$payment_details_to?>"
                                                                    type="text" value="<?=$payment_details_to_?>"
                                                                    placeholder="<?=$payment_details_to_ph?>"
                                                                    <?=$payment_details_to_pattern?>
                                        ></div>
                            </fieldset>
                        </div>
                        <div class="item">
                            <fieldset>
                                <div class="left"><?=$payment_details_from_desc?> (для снятия средств):</div>
                                <div class="right valigntop"><input class="pure-input-1" name="payment_details_from_<?=$payment_details_from?>"
                                                                    type="text" value="<?=$payment_details_from_?>"
                                                                    placeholder="<?=$payment_details_from_ph?>"
                                                                    <?=$payment_details_from_pattern?>
                                        ></div>
                            </fieldset>
                        </div>


                        <div class="title">Как нам с Вами связаться</div>

                        <div class="item">
                            <fieldset>
                                <div class="left">Электронная почта:</div>
                                <div class="right"><input class="pure-input-1" name="email" type="text" value="<?=$email?>"  required="required"></div>
                            </fieldset>
                        </div>
                        <div class="item">
                            <fieldset>
                                <div class="left">Телефон:</div>
                                <div class="right"><input class="pure-input-1" name="phone" type="text" value="<?=$phone?>"  required="required"></div>
                            </fieldset>
                        </div>
                        <button name="pay_button" value="true" class="pay-button"></button>
                </div>
                <input type="hidden" name="payAmount" value="<?=$payAmount;?>" />
                <input type="hidden" name="payCurrency" value="<?=$payCurrency;?>" />
                <input type="hidden" name="getCurrency" value="<?=$getCurrency;?>" />
                </form>
            </div>
        </div>
    </div>
<?=View::factory('footer')->set('js', $js);?>
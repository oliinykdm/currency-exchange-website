<?=View::factory('header');?>
<div class="exchange-area">
    <div class="left-side">
        <div class="from js-from">
            <div class="title">Отдаете</div>
            <div class="items">
                <div class="item" data-currency="wmz">
                    <div class="value"><input class="value-data" type="text" value="1" /></div>
                    <div class="name">WMZ</div>
                </div>
                <div class="item" data-currency="wmu">
                    <div class="value"><input class="value-data" type="text" value="1" /></div>
                    <div class="name">WMU</div>
                </div>
                <div class="item" data-currency="wmr">
                    <div class="value"><input class="value-data" type="text" value="1" /></div>
                    <div class="name">WMR</div>
                </div>
                <div class="item" data-currency="wme">
                    <div class="value"><input class="value-data" type="text" value="1" /></div>
                    <div class="name">WME</div>
                </div>
                <div class="item" data-currency="privat24uah">
                    <div class="value"><input class="value-data" type="text" value="1" /></div>
                    <div class="name">PRIVAT24UAH</div>
                </div>
            </div>
        </div>
        <div class="to js-to">
            <div class="title">Получаете</div>
            <div class="items">
                <div class="item" data-currency="" id="i1">
                    <div class="value"></div>
                    <div class="name"></div>
                </div>
                <div class="item" data-currency="" id="i2">
                    <div class="value"></div>
                    <div class="name"></div>
                </div>
                <div class="item" data-currency="" id="i3">
                    <div class="value"></div>
                    <div class="name"></div>
                </div>
                <div class="item" data-currency="" id="i4">
                    <div class="value"></div>
                    <div class="name"></div>
                </div>
            </div>
        </div>
        <div class="text-block">
            <p>Текущий курс: <span class="js-rate-from"></span> = <span class="js-rate-to"></span></p>
            <p>Сумма к оплате <span class="js-checkout-desc"></span>: <span class="js-checkout-sum"></span></p>
        </div>
        <form id="js-submit-form" action="/exchange" method="POST">
            <input type="hidden" name="payAmount" value="" />
            <input type="hidden" name="payCurrency" value="" />
            <input type="hidden" name="getCurrency" value="" />
        </form>
        <div class="exchange-button"></div>
    </div>
    <div class="right-side">
        <div class="reserves-block">
           <div class="title">Резервы валют</div>
            <div class="items">
                <div class="item">
                    <div class="name">WMZ</div>
                    <div class="value"><span>14 500.00</span></div>
                </div>
                <div class="item">
                    <div class="name">WMR</div>
                    <div class="value"><span>20 890.00</span></div>
                </div>
                <div class="item">
                    <div class="name">WMU</div>
                    <div class="value"><span>1000.00</span></div>
                </div>
                <div class="item">
                    <div class="name">WME</div>
                    <div class="value"><span>123 890.00</span></div>
                </div>
                <div class="item">
                    <div class="name">UAH</div>
                    <div class="value"><span>12 000.50</span></div>
                </div>
            </div>
            <a href="#" class="request-button"></a>
        </div>
    </div>
</div>
<div class="pre-footer-blocks">
    <div class="block1">
        <div class="title">Акции</div>
        <div class="content">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            Nemo...
        </div>
        <div class="more"><span>Читать подробнее</span> &raquo;</div>
    </div>
    <div class="block2">
        <div class="content">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
            Nemo. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.
        </div>
    </div>
    <div class="block3">
        <div class="title">Отзывы</div>
        <div class="review-details">
            <div class="author">Илья Симоненко</div>
            <div class="date">15.07.2009</div>
        </div>
        <div class="content">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
            totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et...
        </div>
        <div class="bottom">
            <div class="left">Все отзывы</div>
            <div class="right">Оставить отзыв</div>
        </div>
    </div>
</div>
<div class="pre-footer-text-block">
    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
        sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
        Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?
        Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
        totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
        Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</p>
</div>
<?=View::factory('footer')->set('js', $js);?>
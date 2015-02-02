<?=View::factory('admin/header');?>
<div class="admin-wrapper">
    <script>
        var menuActive = true;
    </script>
    <?=View::factory('admin/topmenu');?>

    <div class="content">
        <table class="pure-table table-fullwidth">
            <thead>
            <tr>
                <th>#</th>
                <th>Транзакция</th>
                <th>Юзер</th>
                <th>Фамилия</th>
                <th>Имя</th>
                <th>Отчество</th>
                <th>Email</th>
                <th>Телефон</th>
                <th>Реквизиты оплаты</th>
                <th>Реквизиты получения</th>
                <th>Сумма оплаты</th>
                <th>Сумма получения</th>
                <th>Дата</th>
                <th>Статус</th>
            </tr>
            </thead>
            <tbody>
            <?if(isset($exchanges_list)): $i = 0;?>
                <?foreach($exchanges_list as $ex): $i++;?>
            <tr <?if($i & 2):  echo 'class="pure-table-odd"';endif;?>>
                <td><?=$ex->getId();?></td>
                <td><?=$ex->getExchangeUniqid();?></td>
                <td><?if($ex->getUserid()): echo $ex->getUserid(); else: echo 'незарег.'; endif;?></td>
                <td><?=$ex->getSurname();?></td>
                <td><?=$ex->getFirstname();?></td>
                <td><?=$ex->getPatronymic();?></td>
                <td><?=$ex->getEmail();?></td>
                <td><?=$ex->getPhone();?></td>
                <td><?=$ex->getPaymentDetailsFrom();?></td>
                <td><?=$ex->getPaymentDetailsTo();?></td>
                <td><?=$ex->getChangeFromAmount();?> <?=strtoupper($ex->getChangeFromCurr());?></td>
                <td><?=$ex->getChangeToAmount();?> <?=strtoupper($ex->getChangeToCurr());?></td>
                <td><?=date('j.m.Y G:i', $ex->getExchangeDate());?></td>
                <td><?=$ex->getExchangeStatus();?></td>
            </tr>
            <?endforeach?>
            <?endif;?>
            </tbody>
        </table>
        <ul class="pure-paginator js-pagination">
            <li><a class="pure-button prev" href="#">&#171;</a></li>
            <li><a class="pure-button" href="#">1</a></li>
            <li><a class="pure-button pure-button-active" href="#">2</a></li>
            <li><a class="pure-button" href="#">3</a></li>
            <li><a class="pure-button" href="#">4</a></li>
            <li><a class="pure-button" href="#">5</a></li>
            <li><a class="pure-button next" href="#">&#187;</a></li>
        </ul>



    </div>

</div>
<?=View::factory('admin/footer');?>

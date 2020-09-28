<?php if(!empty($_SESSION['cart'])): ?>
    <div class="table-responsive">
        <table class="table table-hover table-striped">
            <thead>
                <tr>
                    <th>Фото</th>
                    <th>Наименование</th>
                    <th>Количесво</th>
                    <th>Цена</th>
                    <th><span class="glyphicon glyphicon-remove" aria-hidden="true"></th>
                </tr>
            </thead>
            <tbody>
               <? foreach($_SESSION['cart'] as $id => $item):?>
                    <tr>
                        <td><a href="product/<?=$item['alias']?>"><img src="images/<?=$item['img'];?>" alt="<?=$item['title'];?>"></a></td>
                        <td><a href="product/<?=$item['alias'];?>"><?=$item['title'];?></td>
                        <td><?=$item['gty'];?></td>
                        <td><?=$item['price'];?></td>
                        <td><span data-id="<?=$id;?>" class="glyphicon glyphicon-remove text-danger del-item" aria-hidden="true"></span></td>
                    </tr>
               <? endforeach;?>
                   <tr>
                       <td>Итого:</td>
                       <td colspan="4" class="text-right cart-qty"><?=$_SESSION['cart.gty'];?></td>
                   </tr>
                   <tr>
                       <td>На сумму:</td>
                       <td colspan="4" class="text-right cart-sum"><?= $_SESSION['cart.currency']['symbol_left'] . $_SESSION['cart.sum'] . $_SESSION['cart.currency']['symbol_right'];?></td>
                   </tr>
            </tbody>
        </table>
    </div>
<?php else :?>
    <h3>Корзина пуста</h3>
<?php endif;?>

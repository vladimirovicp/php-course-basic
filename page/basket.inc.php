<div class="container">
    <h1><?php include "inc/title.inc.php";?></h1>
    <div class="py-5 text-center">
        <h2>Оформление заказа</h2>
        <?php
        $numProduct = 3;
        $numProduct_hundred = 5 % 100;
        $numProduct_prefix = NULL;

        if ($numProduct_hundred > 10 && $numProduct_hundred < 15)
            $numProduct__prefix = 'товаров';
        else{
            $numProduct_ten = $numProduct % 10;

            if($numProduct_ten == 1)
                $numProduct__prefix = 'товар';
            elseif($numProduct_ten >=2 && $numProduct_ten<=4)
                $numProduct__prefix = 'товара';
            else
                $numProduct__prefix = 'товаров';
        }
        ?>
        <h3>В корзине <?= "$numProduct $numProduct__prefix"?></h3>
        <p class="lead">Внимательно заполните поля формы, проверьте корректность введённых данных и позиции товаров и их количество.</p>
    </div>

    <div class="row">
        <div class="col-md-6 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Корзина</span>
                <span class="badge badge-secondary badge-pill">2</span>
            </h4>
            <ul class="list-group mb-3">

                <?php
                $summa = 0;
                for($i = 1; $i<4; $i++){
                    //$books[$i];
                    $quantity = rand(1, 4);
                    ?>

                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0"><?=$books[$i]['title']?></h6>
                            <small class="text-muted"><?=$books[$i]['description']?></small>
                        </div>
                        <span class="text-muted"><?=$books[$i]['price']?>руб. * <?=$quantity;?>шт</span>
                        <span class="text-muted"><?=$books[$i]['price'] * $quantity?>руб.</span>
                        <span ><a href="#delete" class="btn btn-success btn-sm ">Удалить</a></span>
                    </li>

                    <?php
                    $summa += $books[$i]['price'] * $quantity;
                }

                ?>


                <li class="list-group-item d-flex justify-content-between">
                    <span>Всего: </span>
                    <strong><?=$summa?>руб.</strong>
                </li>
            </ul>

        </div>
        <div class="col-md-6 order-md-1">
            <h4 class="mb-3">Информация</h4>
            <form class="needs-validation" novalidate>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">Имя</label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Укажите корректное имя
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Фамилия</label>
                        <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                        <div class="invalid-feedback">
                            Укажите корректную фамилию
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="email">Email <span class="text-muted">(опционально)</span></label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com">
                    <div class="invalid-feedback">
                        Укажите корректный email
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Адрес доставки</label>
                    <input type="text" class="form-control" id="address" placeholder="город, улица, дом, квартира" required>
                    <div class="invalid-feedback">
                        Укажите адрес доставки
                    </div>
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Оформить заказ!</button>
            </form>
        </div>
    </div>
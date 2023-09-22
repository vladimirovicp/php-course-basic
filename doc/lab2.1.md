## Практическая №2.1: Управляющие конструкции if и switch
1. Напишите проверку количества элементов в массивах $categories и
   $publisher , если они пусты - выведите "элементов нет".
```
    //$categories = ['Action', 'Another action', 'Something else here'];
    $categories = [];

    if(empty($categories))
        echo 'элементов нет';
```

```
   //$publisher = ['Первое', 'Второе', 'Третье'];
   $publisher = [];
   
       if(empty($publisher))
        echo 'элементов нет';
```
2. При помощи switch, в центральной части index.php, сопоставьте и выведите
   слова (для index - Главная, basket - Корзина, contacts - Контакты, delivery -
   Доставка, login - Вход) в заголовках h1.

```
<?php
    $url = $_SERVER['REQUEST_URI'];
    $namePage = $url==='/' ? 'index' : substr($url, 1, -4);
    $currentPage = NULL;

    //echo $namePage;

    switch ($namePage){
        case 'index': $currentPage = 'Главная'; break;
        case 'basket': $currentPage = 'Корзина'; break;
        case 'contacts': $currentPage = 'Контакты'; break;
        case 'delivery': $currentPage = 'Доставка'; break;
        case 'login': $currentPage = 'Вход'; break;
    }
    echo $currentPage ?? 'Нет такой страницы';

?>
```
или

```
   $name_file =  basename(__FILE__, ".php");
   
   <?php
    switch (basename($name_file, ".php")){
        case 'index': $currentPage = 'Главная'; break;
        case 'basket': $currentPage = 'Корзина'; break;
        case 'contacts': $currentPage = 'Контакты'; break;
        case 'delivery': $currentPage = 'Доставка'; break;
        case 'login': $currentPage = 'Вход'; break;
    }
    echo $currentPage ?? 'Нет такой страницы';

?>
```

3. Если останется время, при помощи if сформируйте корректно фразу "N товаров", для любого целого положительного N.

```
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
```
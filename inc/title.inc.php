<?php
//    $url = $_SERVER['REQUEST_URI'];
//    $namePage = $url==='/' ? 'index' : substr($url, 1, -4);
//    $currentPage = NULL;

    //echo $namePage;
    //echo NAMEFILE = basename(__FILE__, ".php"),;


    switch (basename($name_file, ".php")){
        case 'index': $currentPage = 'Главная'; break;
        case 'basket': $currentPage = 'Корзина'; break;
        case 'contacts': $currentPage = 'Контакты'; break;
        case 'delivery': $currentPage = 'Доставка'; break;
        case 'login': $currentPage = 'Вход'; break;
    }
    echo $currentPage ?? 'Нет такой страницы';

?>

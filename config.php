<?php
    const
        AUTHOR = "Пётр Владимирович",
        YEAR = 2023,

        DBHOST = 'localhost',
        DBLOGIN = 'root',
        DBPASS = '',
        DBNAME = 'first';

        $firstName = 'Пётр';
        $lastName = 'Владимирович'; //не люблю указывать фамилию
        $email = 'vladimirovicp70@gmail.com'; //Почта для обучения
        $address = 'г. Саратов';

        //3.Создайте переменную $successOrder , со строкой, содержащей переменную $firstName.
        $successOrder = $firstName;

        //4. Создайте массив строк $categories с категориями книг и массив $publisher с
        //названиями издательств, выведите содержимое массивов без использовани циклов.
        $categories = ['Action1', 'Another action1', 'Something else here1'];
        $publisher = ['Первое', 'Второе', 'Третье'];

        //5.Создайте ассоциативный массив $book , описывающий отдельную книгу
        //(должен содержать ключи idbook, title,author, price, description).
//        $book = array(
//            "idbook" => 1,
//            "title" => 'PHP',
//            "author" => 'dfgdfg',
//            "price" => 1200,
//            "description" => 'This is a wider card with supporting text below as a natural lead-in to additional content.'
//        );

        $books = [
            [
                "idbook" => 1,
                "title" => 'Создаем динамические веб-сайты с помощью PHP, MySQL, JavaScript, CSS и HTML5.',
                "author" => 'Никсон Робин',
                "price" => 1950,
                "description" => 'Новое издание бестселлера описывает как клиентские, так и серверные аспекты веб-разработки. ...'
            ],
            [
                "idbook" => 2,
                "title" => 'Создаем динамические веб-сайты с помощью PHP, MySQL, JavaScript, CSS и HTML5.',
                "author" => 'Никсон Робин',
                "price" => 1950,
                "description" => 'Новое издание бестселлера описывает как клиентские, так и серверные аспекты веб-разработки. ...'
            ],
            [
                "idbook" => 3,
                "title" => 'Создаем динамические веб-сайты с помощью PHP, MySQL, JavaScript, CSS и HTML5.',
                "author" => 'Никсон Робин',
                "price" => 1950,
                "description" => 'Новое издание бестселлера описывает как клиентские, так и серверные аспекты веб-разработки. ...'
            ],
            [
                "idbook" => 4,
                "title" => 'Создаем динамические веб-сайты с помощью PHP, MySQL, JavaScript, CSS и HTML5.',
                "author" => 'Никсон Робин',
                "price" => 1950,
                "description" => 'Новое издание бестселлера описывает как клиентские, так и серверные аспекты веб-разработки. ...'
            ],
            [
                "idbook" => 5,
                "title" => 'Создаем динамические веб-сайты с помощью PHP, MySQL, JavaScript, CSS и HTML5.',
                "author" => 'Никсон Робин',
                "price" => 1950,
                "description" => 'Новое издание бестселлера описывает как клиентские, так и серверные аспекты веб-разработки. ...'
            ],
            [
                "idbook" => 6,
                "title" => 'Создаем динамические веб-сайты с помощью PHP, MySQL, JavaScript, CSS и HTML5.',
                "author" => 'Никсон Робин',
                "price" => 1950,
                "description" => 'Новое издание бестселлера описывает как клиентские, так и серверные аспекты веб-разработки. ...'
            ]
        ];


        //6. Если будет время, создайте ассоциативный массив для верхнего меню $menu.
        $menu = [ "Доставка" => 'delivery.php', 'Контакты' => 'contacts.php', 'Войти' => 'login.php', 'Корзина'=>'basket.php'];

        //Создайте строковую переменную $page со значением index
        $page = 'index';

        // №1.3 4. При помощи операции конкатенации, соберите строку склеенную из переменных $firstName , $lastName , $email , $address .
        $mainInfo = $firstName . ' ' . $lastName . ' ' . $email . ' ' . $address;


?>
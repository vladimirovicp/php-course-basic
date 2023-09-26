<?php
    function renderCategories($categories){
        if (empty($categories)){
            echo 'элементов нет';
        } else{
            echo "<div class=\"row\">";
            foreach($categories as $value){
                echo "<a class=\"dropdown-item\" href=\"#\">$value</a>";
            }
            echo "</div>";
        }
    }

    function renderPublisher($publisher){
        if (empty($publisher)){
            echo 'элементов нет';
        } else{
            echo "<ul class=\"list-group col-md-12 col-sm-12\">";
            foreach ($publisher as $key => $value){
                $id = ++$key;
                echo "<li class=\"list-group-item\">";
                echo "<input type=\"checkbox\" id=\"exampleCheck{$id}\"> ";
                echo "<label class=\"form-check-label\" for=\"exampleCheck{$id}\">$value</label>";
                echo "</li>";
            }
            echo "<li class=\"list-group-item\"><button type=\"button\" class=\"btn btn-success\">Найти</button></li>";
            echo "</ul>";
        }
    }

    function renderMenu($menu){
        global $page;
        foreach($menu as $key => $value){
            $active = NULL;
            if($page . '.php' === $value)
                $active = ' active';
            echo "<li class=\"nav-item{$active}\">";
            echo "<a class=\"nav-link\" href=\"$value\">$key</a>";
            echo "</li>";
        }
    }

    function saveOrder($firstName , $lastName , $email , $address){

        $str = "$firstName; $lastName; $email; $address";
        file_put_contents(ORDERS,date('d/m/y H:i') . ';' .$str);
        echo $str;

        return true;
    }

    //6. Создайте функцию getBooksByCategories( $category ), которая возвращает тестовый массив типа $books.
    //function getBooksByCategories($category){
    function getBooksByCategories(){
        echo "<div class=\"card-deck\">";

        global $books;
        foreach($books as $key => $book){
            if(++$key % 3 === 1){
                echo '</div>';
                echo '<div class="card-deck">';
            }
            echo "<div class=\"card\">
                <div class=\"card-body\">
                    <img src=\"http://placehold.it/150x220\"  alt=\"...\">
                    <h3 class=\"card-title\">{$book['price']}руб</h3>
                    <p class=\"card-text\"><small class=\"text-muted\">Автор: {$book['author']}</small></p>
                    <p class=\"card-text\">{$book['description']} . Издательство: <a href=\"#\">Полезное</a></p>
                </div>
                <div class=\"card-footer\">
                    <a href=\"?add={$book['idbook']}\" class=\"btn btn-primary\">В корзину</a>
                </div>
            </div>";
        }
        echo "</div>";


    }

    //7. Если будет время, создайте функцию calcAmount( $delta = 0), которая
    //прибавляет к статической переменной аргумент $delta и возвращает подсчёта.

    function calcAmount( $delta = 0){
        static $result;
        $result += $delta;
        return $result;
    }

    //3.2 5. Создайте функции getParam() и postParam() с объявлением обнуляемого типа
    function getParam(){

    }

    function postParam(){

    }
?>
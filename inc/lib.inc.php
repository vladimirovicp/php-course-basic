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
        echo "$firstName $lastName $email $address";
        return true;
    }

    //6. Создайте функцию getBooksByCategories( $category ), которая возвращает тестовый массив типа $books.
    function getBooksByCategories($category){
            //Не понял задания!
    }

    //7. Если будет время, создайте функцию calcAmount( $delta = 0), которая
    //прибавляет к статической переменной аргумент $delta и возвращает подсчёта.

    function calcAmount( $delta = 0){
        static $result;
        $result += $delta;
        return $result;
    }
?>
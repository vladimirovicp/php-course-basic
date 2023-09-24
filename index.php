<?php
    include 'config.php';
    $name_file =  basename(__FILE__, ".php");
    $page = 'index';

    //1. Напишите скрипт, который будет показывать фон на сайте в зависимости от
    //того, четный или нечётный час. Примечание: попробуйте применить тернарный оператор.

    //$hours = strftime('%H');
//    $hours = date('h');
//    $colorBody = NULL;
//    if ($hours % 2 === 0){
//        $colorBody = ' style="background-color: #aad9ab;"';
//    }


    //2. Напишите скрипт, который будет выводить предупреждение, если на скрипт
    //выделяется объем памяти меньший 128Mb

//$memory = memory_get_usage();
//echo ($memory) . ' байт';
//Или memory_get_peak_usage

// memory_get_peak_usage — Возвращает пиковое значение объёма памяти, выделенное PHP
// memory_get_usage — Возвращает количество памяти, выделенное для PHP

//echo memory_get_peak_usage(); //байтах

//    $maxMemory = 128 * 1024 * 1024; // Перевод в байты
//    $warningMemory = memory_get_peak_usage() < $maxMemory;

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <!-- <link href="starter-template.css" rel="stylesheet"> -->

    <title>PHP часть 1. Основы PHP</title>

    <style>
    .card-deck{
      margin-top: 20px      
    }

    .card-body img{
      display: block;
      margin: 0 auto 15px;

    }
    .card-footer{
      background: transparent;
      border: 0;
    }
    </style>
  </head>
  <body<?php echo date('h') % 2 === 0 ? ' style="background-color: #aad9ab;"' : '';?>>


  <?php
    include 'inc/nav.inc.php';
  ?>

<div class="container">

    <?php

    ?>

    <div class="alert alert-primary">
        <?php
            if(memory_get_peak_usage() < (128 * 1024 * 1024)){
                echo '<div>Предупреждение, скрипт выделяется объем памяти меньший 128Mb.</div>';
            }
        ?>
        <?php
            //3. Напишите скрипт, который будет, в зависимости от дня недели, выводить
            //надпись. Например: сегодня среда. Примечание: используйте оператор switch

            $weeks = [
                'Воскресение',
                'Понедельник',
                'Вторник',
                'Среда',
                'Четверг',
                'Пятница',
                'Суббота',
            ];

            $numDay = date("w", mktime(0,0,0,date("m"),date("d"),date("Y")));
            echo $numDay; // День недели возвращается в виде числа (0=Воскресенье, 1=Понедельник и т.д.);
            $currentDay = NULL;

            switch($numDay){
                case 0: $currentDay = 'Воскресение';
                case 1: $currentDay = 'Понедельник';
                case 2: $currentDay = 'Вторник';
                case 3: $currentDay = 'Среда';
                case 4: $currentDay = 'Четверг';
                case 5: $currentDay = 'Пятница';
                case 6: $currentDay = 'Суббота';
            }

            echo "<div>сегодня $currentDay!</div>";



            //Напишите PHP цикл, который выводит числа от 1 до 100.
//            for($i=1; $i <=100; $i++){
//                echo $i . '<br>';
//            }

            //5. Напишите PHP цикл, который выводит числа от 23 до 78.
//            for($i=23; $i <=78; $i++){
//                echo $i . '<br>';
//            }

            //6.Напишите PHP цикл, который выводит ненумерованный список из 10 пунктов.

        echo '<ol>';
        for($i=0; $i <=9; $i++){
            echo "<li>Какой то текст $i</li>";
        }
        echo '</ol>';

        //Создайте массив из 100 случайных чисел.

        $arr = [];
        for ($i=0; $i < 100; $i++){
            array_push($arr, rand(1,100));
        }
        //print_r($arr);

        // или

        $arr = [];
        for ($i=0; $i < 100; $i++){
            $arr[$i] = rand(1,100);
        }
        print_r($arr);


        //8. Вывести массив из предыдущего задания, при помощи цикла while, а потом при помощи foreach.

        $j = 0;
        while(count($arr) > $j){

            echo $arr[$j++],',';
        }

        echo '<br>';
        foreach( $arr as $item) {
            echo $item,',';
        }

        echo '<br>';

        ?>


        <div>
            <?php
                //Создайте массив из 10 строк и выведите их любым циклом внутри HTML-элемента div.
                $arr2 = array();
                for ($i=0; $i < 10; $i++){
                    $arr2[$i] = rand(1,100);
                }

                foreach( $arr2 as $item) {
                    echo $item,',';
                }

            ?>


        </div>







    </div>

<div class="row">
    <?php
        include 'inc/left-aside.inc.php';
    ?>

<div class="col-md-9 col-sm-9 ">
    <h1><?php include "inc/title.inc.php";?></h1>


    <div class="card-deck">
    <?php
    foreach($books as $key => $book){
        if(++$key % 3 === 1){
            echo '</div>';
            echo '<div class="card-deck">';
        }
        ?>
        <div class="card">
            <div class="card-body">
                <img src="http://placehold.it/150x220"  alt="...">
                <h3 class="card-title"><?=$book['price']?>руб</h3>
                <p class="card-text"><small class="text-muted">Автор: <?=$book['author']?></small></p>
                <p class="card-text"><?=$book['description']?>. Издательство: <a href="#">Полезное</a></p>
            </div>
            <div class="card-footer">
<!--                <button type="button" class="btn btn-primary">В корзину</button>-->
                <a href="?add=<?=$book['idbook']?>" class="btn btn-primary">В корзину</a>
            </div>
        </div>
        <?php
    }
    ?>
    </div>


</div>

   
</div>

  
</div>

<div class="container">
     

  </div><!-- /.container -->

      <?php
        include 'inc/footer.inc.php';
      ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
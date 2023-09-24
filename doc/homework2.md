Домашние задания
1. Напишите скрипт, который будет показывать фон на сайте в зависимости от
   того, четный или нечётный час. Примечание: попробуйте применить тернарный
   оператор.
```php
    $hours = date('h');
    $colorBody = NULL;
    if ($hours % 2 === 0){
        $colorBody = ' style="background-color: #aad9ab;"';
    }


    <body<?=$colorBody;?>>
```
или
```php
<body<?php echo date('h') % 2 === 0 ? ' style="background-color: #aad9ab;"' : '';?>>
```
2. Напишите скрипт, который будет выводить предупреждение, если на скрипт
   выделяется объем памяти меньший 128Mb

```php
    <?php
    if(memory_get_peak_usage() < (128 * 1024 * 1024)){
    ?>
    <div class="alert alert-primary">
        Предупреждение, скрипт выделяется объем памяти меньший 128Mb.
    </div>
    <?php
    }
    ?>
```

3. Напишите скрипт, который будет, в зависимости от дня недели, выводить
   надпись. Например: сегодня среда. Примечание: используйте оператор switch
```php
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
```
4. Напишите PHP цикл, который выводит числа от 1 до 100.
```php
            for($i=1; $i <=100; $i++){
                echo $i . '<br>';
            }
```
5. Напишите PHP цикл, который выводит числа от 23 до 78.
```php
            for($i=23; $i <=78; $i++){
                echo $i . '<br>';
            }
```
6. Напишите PHP цикл, который выводит ненумерованный список из 10 пунктов.
```php
        echo '<ol>';
        for($i=0; $i <=9; $i++){
            echo "<li>Какой то текст $i</li>";
        }
        echo '</ol>'
```
7. Создайте массив из 100 случайных чисел.
```php
        $arr = [];
        for ($i=0; $i < 100; $i++){
            array_push($arr, rand(1,100));
        }
        print_r($arr);

        // или

        $arr = [];
        for ($i=0; $i < 100; $i++){
            $arr[$i] = rand(1,100);
        }
        print_r($arr);

        $arr = [];
        for ($i=0; $i < 100; $i++){
        $arr[] = rand(1,100);
        }
        print_r($arr);

```
8. Вывести массив из предыдущего задания, при помощи цикла while, а потом при
   помощи foreach.
```php
        $j = 0;
        while(count($arr) > $j){
            echo $arr[$j++],',';
        }
        //и
        foreach( $arr as $item) {
            echo $item,',';
        }
```
9. Создайте массив из 10 строк и выведите их любым циклом внутри
   HTML-элемента div.
```php
                $arr2 = array();
                for ($i=0; $i < 10; $i++){
                    $arr2[$i] = rand(1,100);
                }

                foreach( $arr2 as $item) {
                    echo $item,',';
                }
```
10. * Создайте массив, каждый элемент которого тоже массив с ключами title,
      description, price. Выведите все элементы этого массива, так, чтобы заголовки
      были в HTML-элементе h2, описания в p, а цена в гиперссылке.
```php
        $arr = [
            [
                'title' => 'Назание 1',
                'description' => 'Описание 1',
                'price' => '1000'
            ],
            [
                'title' => 'Назание 2',
                'description' => 'Описание 2',
                'price' => '1500'
            ],
            [
                'title' => 'Назание 3',
                'description' => 'Описание 3',
                'price' => '2000'
            ],
        ];

        foreach($arr as $item){
            echo "<h2>{$item['title']}</h2>";
            echo "<p>{$item['description']}</p>";
            echo "<a href='#'>{$item['price']}</a>";
        }
```
11. * При выводе элементов из предыдущего задания покрасьте фон элементов
      ниже определенной цены в отличный от других цвет.
```php
        $fixPrice = 1800;
        foreach($arr as $item){
            echo "<h2>{$item['title']}</h2>";
            echo "<p>{$item['description']}</p>";
            $color = $fixPrice>$item['price'] ? " style=\"background-color: green; color: #FFFFFF;\"" : "";
            echo "<a href='#'$color>{$item['price']}</a>";
        }
```
12. Создайте масcив из 50 случайных чисел от 0 до 100. Найти все числа меньшие
    72 и поместить их в отдельный массив
```php
        $arr3=[];
        for($i=0; $i<50; $i++){
            $arr3[]=rand(0,100);
        }

        $arr4 =[];
        foreach ($arr3 as $value){
            if($value < 72){
                $arr4[] = $value;
            }
        }

        print_r($arr3);
        print_r($arr4);
```
13. Создайте цикл, который выводит числа то 0 до 100 в HTML-элементах div;
        окраска HTML-элементов должна чередоваться («зебра»).
```php
        for($i=0; $i<100; $i++){
            $color = $i%2 === 0 ? "#b4c2cf" : "#e1e1e1";
            echo "<div style=\"background-color: $color;\">$i</div>";
        }
```
14. * Создать цикл, которые выводит 20 фрагментов разметки Bootstrap —
      http://getbootstrap.com/components/#thumbnails-custom-content
    *   * **ссылка устарела**
15. * Создать массив с названиями и адресами ссылок. Вывести этот массив в виде
      выпадающего меню Bootstrap http://getbootstrap.com/components/#dropdowns
*   * **ссылка устарела**
16. * Вывести календарь на текущий месяц. Разметку взять тут
      http://htmllab.ru/calendar-html/
17. * Взять текст с Яндекс.Рефератов. Задать ключевое слово и записать в массив
      все расположения этого ключевого слова.
18. * Разметить все найденные слова из предыдущего задания HTML-элементом
      mark
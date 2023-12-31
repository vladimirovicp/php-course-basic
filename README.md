# php1

>* [Практическая №1.1](https://github.com/vladimirovicp/php-course-basic/tree/lab1)
>* [Практическая №1.2](https://github.com/vladimirovicp/php-course-basic/tree/lab1.2)
>* [Практическая №1.3](https://github.com/vladimirovicp/php-course-basic/tree/lab1.3)
>* [Практическая №1.4](https://github.com/vladimirovicp/php-course-basic/tree/lab1.4)
>
> 
>* [Домашние задания](https://github.com/vladimirovicp/php-course-basic/blob/main/doc/homework1.md)

>* Практическая №2.1: Управляющие конструкции if и switch 
>  * [Файлы](https://github.com/vladimirovicp/php-course-basic/tree/lab2.1)
>  * [Отчет](https://github.com/vladimirovicp/php-course-basic/blob/lab2.1/doc/lab2.1.md) 
>* [Практическая №2.2](https://github.com/vladimirovicp/php-course-basic/tree/lab2.2)
>* [Домашние задания](https://github.com/vladimirovicp/php-course-basic/blob/main/doc/homework2.md)

>* [Практическая №3.1: Создание собственных функций](https://github.com/vladimirovicp/php-course-basic/tree/lab3.1)
>* [Практическая №3.2: Использование встроенных функций](https://github.com/vladimirovicp/php-course-basic/tree/lab3.2)


## Example
>* Глобальная переменная в функции
```php
<?php
    $hello = 'Hello';

    function sayHello(){
        global $hello;
        
        return $hello;
    }
?>
```
>* Статические переменные, видны только в функции
```php
    function sayHello(){
        static $count;
        $count++;
        
        return $count;
    }
```
>* typehint
>  * array
>  * string
>  * int
```php
    function average(int $a, int $b):float{
    $c = ($a + $b) / 2.0;
    return c;
    }
```
>* Меняем внешнюю переменную в функции
```php
    function test(int &$a){
    echo "<h2>a = $a</h2>";
    a++;
    echo "<h2>a = $a</h2>";
    }

    $y = 10;
    test($y); //$y станет равным 11
```
>* Использование переменной вместо функции
```php
    function test(int &$a){
        echo "<h2>a = $a</h2>";
        a++;
        echo "<h2>a = $a</h2>";
    }

    $test1 = 'test';
    $test1(10);
```
>* Получение нескольких значений из функции
```php
    function return2Values(){
        return ['first','second'];
    }

    //$fValues = return2Values()[0];

    list($fValues,$sValues) = return2Values();
```
>* Передача неопределеного количества аргументов в функцию
```php
    function average(...$nums){
        $summa =0
        foreach ($nums as $n){
            $summa += $n;
        }
        
        return $summa;
    }

    //$fValues = return2Values()[0];

    $x = average(1,2,3,4);
```
>* Сортировка
```php

    $numbers = [14, 62, 9, 1, 58]
    
    usort($numbers, function ($a, $b) {return $a <=> $b;})
```
```php

    $numbers = [14, 62, 9, 1, 58]
    $mySort = fn($a, $b) =>  $a <=> $b;
    usort($numbers, $mySort)
```
>* Определение метода POST
```php
    if($_SERVER['REQUEST_METHOD'] == 'POST') { ... }
```
>* 
## Функции

>* Преобразует строку из одной кодировки символов в другую
```
mb_convert_encoding($str, "UTF-8", "cp1251");
```
>* Получить имя файла
```
<?php
    $path = "/home/httpd/html/index.php";
    $file = basename($path);              // $file is set to "index.php"
    $file = basename($path, ".php");  // $file is set to "index"
?>
```
>* trim — Удаляет пробелы (или другие символы) из начала и конца строки
>* Преобразует специальные символы в HTML-сущности
```php
    htmlspecialchars($_POST['name']);
```
>* Привести к числу
```php
    (int)$_POST['age'];
    //или
    1 * $_POST['age'];
```
>* 

## Предопределённые константы
>* ``` echo 'Версия PHP: ' . PHP_VERSION, '<hr>';```
>* ``` echo 'Символ конца строки: ' .PHP_EOL, '<hr>';```
>* ``` echo 'Максимальное целое число: ' .PHP_INT_MAX, '<hr>';```
>* ``` echo 'Минимальное целое число: ' .PHP_INT_MIN, '<hr>';```
>* ``` echo 'Максимальное дробное число: ' .PHP_FLOAT_MAX , '<hr>';```
>* ``` echo 'Минимальное дробное число: ' .PHP_FLOAT_MIN , '<hr>';```

## волшебные константы
>* ``` echo 'Номер текущей строки: ' .__LINE__, '<hr>';```
>* ``` echo 'Название текущего файла: ' .__FILE__, '<hr>';```
>* ``` echo 'Название текущей папки: ' .__DIR__, '<hr>';```
>* ``` echo 'Текущее пространство имён: ' .__NAMESPACE__, '<hr>';```
>

## Mysql
>* Создание БД mydb
```sql
    CREATE DATABASE mydb
```
>*  Создание таблицы tb1
```sql
    CREATE TABLE tb1 (
      col1 INT PRIMARY KEY AUTO_INCREMENT,
      col2 VARCHAR(100) NOT NULL DEFAULT '',
      col3 DECIMAL(5,2),
      col4 DATETIME DEFAULT CURRENT_TIMESTAMP
    )
```
>* Самый простой способ работать с БД из PHP
>* Нужно включить в php.ini модуль php_mysqli.dll
>* 
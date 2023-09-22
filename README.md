# php1

>* [Практическая №1.1](https://github.com/vladimirovicp/php-course-basic/tree/lab1)
>* [Практическая №1.2](https://github.com/vladimirovicp/php-course-basic/tree/lab1.2)
>* [Практическая №1.3](https://github.com/vladimirovicp/php-course-basic/tree/lab1.3)
>* [Практическая №1.4](https://github.com/vladimirovicp/php-course-basic/tree/lab1.4)
>
> 
>* [Домашние задания](https://github.com/vladimirovicp/php-course-basic/blob/main/doc/homework1.md)



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
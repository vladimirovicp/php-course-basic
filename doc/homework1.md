# Домашние задания
1. Установите WAMP сборку, если вы работаете под Windows (м.б. вам
   понадобится LAMP или MAMP, если вы используете другую операционную
   систему)
---
   ![WAMP install](./img/homework1/01.png)

---
2. Узнайте каков объем памяти выделяется PHP-скрипту. Примечание: задание
   нужно сделать двумя способами — посмотреть в конфигурационном файле или
   получить параметр из php-функции.

---

   ![WAMP install](./img/homework1/02.png)

   ![WAMP install](./img/homework1/03.png)

---

3. Узнайте какова максимальная длительность выполнения PHP-скрипта.
   Примечание: см. предыдущую задачу.

---
   ![WAMP install](./img/homework1/04.png)
   
   ![WAMP install](./img/homework1/05.png)
---

4. Установите параметры из первых двух задач в значения, отличные от
   начальных. Убедитесь, что изменения применены и используются.

**max_execution_time** = 240
**memory_limit** = 512M

   ![WAMP install](./img/homework1/06.png)

5. Вызовите в вашем скрипте функцию phpinfo() и поверхностно познакомьтесь с
   выведенными параметрами

   #### Основное:
   >* memory_limit = 512M
   >* max_input_vars = 100000
   >* max_input_time = 180
   >* post_max_size = 20M
   >* upload_max_filesize = 20M

6. Вызовите оператор echo с параметром «привет»; убедитесь в использовании
   нужной кодировки на сервере.

   ![WAMP install](./img/homework1/07.png)

7. Проверьте вашу текущую версию PHP.
   ![WAMP install](./img/homework1/08.png)
8. * Пропишите путь к PHP- интерпретатору в системной переменной PATH.

   Открыть свойсво системы ( Win+R, ввести sysdm.cpl)
---
   ![WAMP install](./img/homework1/09.png)

   ![WAMP install](./img/homework1/10.png)

   ![WAMP install](./img/homework1/11.png)

---

9. * Вызовите PHP-скрипт из консоли.
     ![WAMP install](./img/homework1/12.png)
10. Распечатайте результат вызова функции date('d-m-Y H:i:s');

---

   ![WAMP install](./img/homework1/13.png)
   ![WAMP install](./img/homework1/14.png)

---

11. Испытайте работу всех PHP-тегов, которые доступны в вашей версии PHP

```
   <?php
      echo date('d-m-Y H:i:s');
   ?> 
```

```
   <?=date('d-m-Y H:i:s');?> 
```

12. Возьмите один из своих HTML-файлов. Измените его расширение на .php,
    убедитесь в доступности файла на сервере.

---

![WAMP install](./img/homework1/15.png)


---
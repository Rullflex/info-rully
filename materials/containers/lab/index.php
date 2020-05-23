<?php
include ("index.config.php");
include ($r_base."assets/php_modules/addons.php");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php include ($r_base."assets/php_modules/head.tpt.php"); ?>
</head>
<body>
<div class='container-fluid'>
<?php include ($r_base."assets/php_modules/header.tpt.php"); ?>  
<div class="row">
<?php include ($r_base."assets/php_modules/aside.tpt.php"); ?>
<main class="col-md markdown-body">
<h2 id="1">1. Постановка задачи</h2>
<ol>
    <li>Определить класс-контейнер.</li>
    <li>Реализовать конструкторы, деструктор, операции ввода-вывода, операцию присваивания.</li>
    <li>Перегрузить операции, указанные в варианте.</li>
    <li>Реализовать класс-итератор. Реализовать с его помощью операции последовательного доступа.</li>
    <li>Написать тестирующую программу, иллюстрирующую выполнение операций.</li>
</ol>
<h2 id="2">2. Варианты заданий</h2>
<table class="">
<thead>
    <tr>
        <th>
            №
        </th>
        <th>
            Задание
        </th>
    </tr>
</thead>
<tbody>
    <tr>
        <td>1</td>
        <td>Класс- контейнер МНОЖЕСТВО с элементами типа int.
Реализовать операции:
[] – доступа по индексу;
int() – определение размера вектора;
* – пересечение множеств;
-- - переход к предыдущему элементу ( с помощью класса-итератора).
</td>
    </tr>
    <tr>
        <td>2</td>
        <td>Класс- контейнер ВЕКТОР с элементами типа int.
Реализовать операции:
[] – доступа по индексу;
() – определение размера вектора;
* число – умножает все элементы вектора на число;
- n – переход влево к элементу с номером n ( с помощью класса-итератора).
</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Класс- контейнер МНОЖЕСТВО с элементами типа int.
Реализовать операции:
[] – доступа по индексу;
== - проверка на равенство;
> число – принадлежность числа множеству;
- n - переход влево к элементу с номером n ( с помощью класса-итератора).
</td>
    </tr>
    <tr>
        <td>4</td>
        <td>Класс- контейнер ВЕКТОР с элементами типа int.
Реализовать операции:
[] – доступа по индексу;
+ вектор – сложение элементов векторов a[i]+b[i];
+ число – добавляет константу ко всем элементам вектора;
-- - переход к предыдущему элементу ( с помощью класса-итератора).
</td>
    </tr>
    <tr>
        <td>5</td>
        <td>Класс- контейнер МНОЖЕСТВО с элементами типа int.
Реализовать операции:
[] – доступа по индексу;
!= - проверка на неравенство;
< число – принадлежность числа множеству;
+ n – переход вправо к элементу с номером n ( с помощью класса-итератора).
</td>
    </tr>
    <tr>
        <td>6</td>
        <td>Класс- контейнер ВЕКТОР с элементами типа int.
Реализовать операции:
[]– доступа по индексу;
int() – определение размера вектора;
+ вектор – сложение элементов векторов a[i]+b[i];
+n - переход вправо к элементу c номером n ( с помощью класса-итератора).
</td>
    </tr>
    <tr>
        <td>7</td>
        <td>Класс- контейнер МНОЖЕСТВО с элементами типа int.
Реализовать операции:
[] – доступа по индексу;
() – определение размера вектора;
- – разность множеств;
-- – переход к предыдущему элементу ( с помощью класса-итератора).
</td>
    </tr>
    <tr>
        <td>8</td>
        <td>Класс- контейнер ВЕКТОР с элементами типа int.
Реализовать операции:
[] – доступа по индексу;
() – определение размера вектора;
+ число – добавляет константу ко всем элементам вектора;
++ - переход к следующему элементу ( с помощью класса-итератора).
</td>
    </tr>
    <tr>
        <td>9</td>
        <td>Класс- контейнер СПИСОК с ключевыми значениями типа int.
Реализовать операции:
[] – доступа по индексу;
+ вектор – сложение элементов списков a[i]+b[i];
+ число – добавляет константу ко всем элементам списка;
-- - переход к предыдущему элементу ( с помощью класса-итератора).
</td>
    </tr>
    <tr>
        <td>10</td>
        <td>Класс- контейнер ВЕКТОР с элементами типа int.
Реализовать операции:
[] – доступа по индексу;
int() – определение размера вектора;
* вектор – умножение элементов векторов a[i]*b[i];
+ n – переход вправо к элементу с номером n ( с помощью класса-итератора).
</td>
    </tr>
    <tr>
        <td>11</td>
        <td>Класс- контейнер СПИСОК с ключевыми значениями типа int.
Реализовать операции:
[] – доступа по индексу;
() – определение размера вектора;
+ число – добавляет константу ко всем элементам вектора;
++ - переход к следующему элементу ( с помощью класса-итератора).
</td>
    </tr>
    <tr>
        <td>12</td>
        <td>Класс- контейнер МНОЖЕСТВО с элементами типа int.
Реализовать операции:
[] – доступа по индексу;
() – определение размера множества;
+ – объединение множеств;
++ - переход к следующему элементу ( с помощью класса-итератора).
</td>
    </tr>
    <tr>
        <td>13</td>
        <td>Класс- контейнер СПИСОК с ключевыми значениями типа int.
Реализовать операции:
[]– доступа по индексу;
int() – определение размера списка;
+ вектор – сложение элементов списков a[i]+b[i];
- n - переход влево к элементу c номером n ( с помощью класса-итератора).
</td>
    </tr>
    <tr>
        <td>14</td>
        <td>Класс- контейнер МНОЖЕСТВО с элементами типа int.
Реализовать операции:
[] – доступа по индексу;
int() – определение размера вектора;
* – пересечение множеств;
-- - переход к предыдущему элементу ( с помощью класса-итератора).
</td>
    </tr>
    <tr>
        <td>15</td>
        <td>Класс- контейнер СПИСОК с ключевыми значениями типа int.
Реализовать операции:
[] – доступа по индексу;
() – определение размера вектора;
+ число – добавляет константу ко всем элементам вектора;
++ - переход к следующему элементу ( с помощью класса-итератора).
</td>
    </tr>
    <tr>
        <td>16</td>
        <td>Класс- контейнер МНОЖЕСТВО с элементами типа int.
Реализовать операции:
[] – доступа по индексу;
!= - проверка на неравенство;
< число – принадлежность числа множеству;
+ n – переход вправо к элементу с номером n ( с помощью класса-итератора).
</td>
    </tr>
    <tr>
        <td>17</td>
        <td>Класс- контейнер СПИСОК с ключевыми значениями типа int.
Реализовать операции:
[] – доступа по индексу;
+ вектор – сложение элементов списков a[i]+b[i];
+ число – добавляет константу ко всем элементам списка;
-- - переход к предыдущему элементу ( с помощью класса-итератора).
</td>
    </tr>
    <tr>
        <td>18</td>
        <td>Класс- контейнер ВЕКТОР с элементами типа int.
Реализовать операции:
[] – доступа по индексу;
() – определение размера вектора;
* число – умножает все элементы вектора на число;
- n – переход влево к элементу с номером n ( с помощью класса-итератора).
</td>
    </tr>
    <tr>
        <td>19</td>
        <td>Класс- контейнер СПИСОК с ключевыми значениями типа int.
Реализовать операции:
[] – доступа по индексу;
() – определение размера списка;
* число – умножает все элементы списка на число;
- n – переход влево к элементу с номером n ( с помощью класса-итератора).
</td>
    </tr>
    <tr>
        <td>20</td>
        <td>Класс- контейнер ВЕКТОР с элементами типа int.
Реализовать операции:
[]– доступа по индексу;
int() – определение размера вектора;
+ вектор – сложение элементов векторов a[i]+b[i];
+n - переход вправо к элементу c номером n ( с помощью класса-итератора).
</td>
    </tr>
    <tr>
        <td>21</td>
        <td>Класс- контейнер СПИСОК с ключевыми значениями типа int.
Реализовать операции:
[] – доступа по индексу;
int() – определение размера списка;
* вектор – умножение элементов списков a[i]*b[i];
+n - переход вправо к элементу с номером n ( с помощью класса-итератора).
</td>
    </tr>
    <tr>
        <td>22</td>
        <td>Класс- контейнер ВЕКТОР с элементами типа int.
Реализовать операции:
[] – доступа по индексу;
+ вектор – сложение элементов векторов a[i]+b[i];
+ число – добавляет константу ко всем элементам вектора;
-- - переход к предыдущему элементу ( с помощью класса-итератора).
</td>
    </tr>
    <tr>
        <td>23</td>
        <td>Класс- контейнер ВЕКТОР с элементами типа int.
Реализовать операции:
[] – доступа по индексу;
() – определение размера вектора;
+ число – добавляет константу ко всем элементам вектора;
++ - переход к следующему элементу ( с помощью класса-итератора).
</td>
    </tr>
    <tr>
        <td>24</td>
        <td>Класс- контейнер МНОЖЕСТВО с элементами типа int.
Реализовать операции:
[] – доступа по индексу;
== - проверка на равенство;
> число – принадлежность числа множеству;
- n - переход влево к элементу с номером n ( с помощью класса-итератора).
</td>
    </tr>
    <tr>
        <td>25</td>
        <td>Класс- контейнер МНОЖЕСТВО с элементами типа int.
Реализовать операции:
[] – доступа по индексу;
() – определение размера вектора;
- – разность множеств;
-- – переход к предыдущему элементу ( с помощью класса-итератора).
</td>
    </tr>
</tbody>
</table>
<h2 id="3">3. Методические указания</h2>
<ol>
    <li>Объявления классов сохранить в библиотечном файле с расширением .h (например, Container.h для класса-контейнера и вложенного в него класса-итератора), а реализации методов и дружественных функций в одноименному ему файле.cpp (например, Container.cpp). Функцию main() сохранить в файле с расширением .cpp. Заголовочный файл подключить с помощью директивы #include “имя_файла.h”. Пример:</li>
    <div class="gallery">
        <a href="<?php echo $folder_name ?>img/1.png">
        <img src="<?php echo $folder_name ?>img/1.png" alt="Рисунок 1">
        </a>
    </div>
    
    <p class="text-center">Рисунок 1 - Описание класса-контейнера Container и вложенного класса-итератора Iterator в Container.h</p>
    <div class="gallery">
        <a href="<?php echo $folder_name ?>img/2.png">
        <img src="<?php echo $folder_name ?>img/2.png" alt="Рисунок 2">
        </a>
    </div>
    
    <p class="text-center">Рисунок 2 - Определение методов и операций класса-контейнера Container и вложенного класса-итератора Iterator в Container.cpp</p>
    <li>В функции main() должны быть размещены только описания переменных и обращения к соответствующим функциям, операциям и методам. </li>
    <li>Интерфейс реализовать с помощью текстового меню.</li>
</ol>
<h2 id="4">4. Содержание отчета</h2>
<ol>
    <li>Постановка задачи (общая и для конкретного варианта);</li>
    <li>Анализ задачи:</li>
    <ul>
        <li>&#8226; Определения функций для реализации поставленных задач;</li>
        <li>&#8226; Определение функции main();</li>
        <li>&#8226; Описание класса-контейнера.</li>
        <li>&#8226; Определение компонентных функций;</li>
        <li>&#8226; Описание класса-итератора и его компонентных функций.</li>
    </ul>
    <li>Блок-схема;</li>
    <li>Текст программы;</li>
    <li>Тесты.</li>
</ol>
<?php
if ($sendwork_off == false) { ?>
    <h2 id="4">4. Отправить результат работы</h2>
    <?php include ($r_base."assets/php_modules/form_sendwork.tpt.php"); 
}
?>
</main><!--end main-->
</div><!--end .row-->
<?php include ($r_base."assets/php_modules/footer.tpt.php"); ?>  
</div><!--end .container-fluid-->
<?php include ($r_base."assets/php_modules/scripts.tpt.php"); ?>
</body>
</html>
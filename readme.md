
### *Описание*

Тестовое задание включает в себя верстку блоков с использованием bootstrap.

Первый блок:

![Block 1](https://github.com/Camalo/avtoholdingRRT/blob/main/Block1.png)

Блок с карточками:

![Block 2](https://github.com/Camalo/avtoholdingRRT/blob/main/Block2.png)

Файлы с этим заданием находятся в папке layout

### *Ответы на вопросы*
<<<<<<< HEAD
## 2
=======
#### 2
>>>>>>> 5e7638bcb0cd1af78a23f220b63dffb1ae4113ef

```
if(!empty($item['dtmpl_data']['fields']['image']['field_value'])){>

    echo "<img src=\"" . $item['dtmpl_data']['fields']['image']['field_value'] . "\" class=\"img-fluid\">";

}else{
    echo "Данных не обнаружено";
}>
```

В конструкции if else проверяется существует ли переменная и что ее значение не равно false. При выполнении условия выводится картинка, в свойстве src находится значение переменной. Также выполняется экранирование. В блоке else выводится строка “Данных не обнаружено”. 

<<<<<<< HEAD
## 3
=======
#### 3
>>>>>>> 5e7638bcb0cd1af78a23f220b63dffb1ae4113ef

```
$api = new api();
$api->set_type('list_items');
$api->set_vars('parent', $id);
$data =$api->get_data();
```

С помощью конструкции 

```
foreach($data as $key=> $value){
    
}
```

можно перебрать массив и получить из него значения по
типу ключ => значение

<<<<<<< HEAD
## 4
=======
#### 4
>>>>>>> 5e7638bcb0cd1af78a23f220b63dffb1ae4113ef

Имеются данные полученные с помощью конструкции из массива $data:

```
$value['text_data']['header'];
$value['dtmpl_data']['fields']['description']['field_value'];
$value['dtmpl_data']['fields']['image']['field_value'];
$value['dtmpl_data']['url']['description']['field_value'];
```

Сформирован блок с заголовком, текстом, картинкой и ссылкой:

<<<<<<< HEAD
![Block 3](https://github.com/Camalo/avtoholdingRRT/blob/main/Block3.png)

Файлы с этим заданием находятся в папке template

## 5
=======
![Block 3](https://github.com/Camalo/avtoholdingRRT/blob/main/Block3.png)

Файлы с этим заданием находятся в папке template

#### 5
>>>>>>> 5e7638bcb0cd1af78a23f220b63dffb1ae4113ef

```
<?php
$name = "Sergey";
$name .= "Egor";
echo '$name';
?>
```
Выведется $name, так как в последней строке используются одинарные кавычки. Переменная не будет интерпретироваться.

<<<<<<< HEAD
=======

>>>>>>> 5e7638bcb0cd1af78a23f220b63dffb1ae4113ef

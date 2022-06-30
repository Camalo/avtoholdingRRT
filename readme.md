
### *Описание*

Тестовое задание включает в себя верстку блоков с использованием bootstrap.

Первый блок:
![](https://github.com/Camalo/avtoholdingRRT/blob/main/Block1.png)

Блок с карточками:
![](https://github.com/Camalo/avtoholdingRRT/blob/main/Block2.png)

Файлы с этим заданием находятся в папке layout

### *Ответы на вопросы*

```
if(!empty($item['dtmpl_data']['fields']['image']['field_value'])){>

    echo "<img src=\"" . $item['dtmpl_data']['fields']['image']['field_value'] . "\" class=\"img-fluid\">";

}else{
    echo "Данных не обнаружено";
}>
```

В конструкции if else проверяется существует ли переменная и что ее значение не равно false. При выполнении условия выводится картинка, в свойстве src находится значение переменной. Также выполняется экранирование. В блоке else выводится строка “Данных не обнаружено”. 

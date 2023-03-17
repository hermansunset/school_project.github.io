<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="form.css">
    <title>Форма</title>
</head>
<body>
<div class="wrapper">
    <form class="form" action="results.php" method="post" >
        <div class="user">
            <div class="user-info__item">
                <label for="name" class="heading" required>Имя</label>
                <input type="text" name="name" id="name" placeholder="Введите имя" class="inputing">
                
                <label for="number" class="heading" required>Номер телефона</label>
                <input type="text" id="number" name="number" placeholder="Введите номер телефона" class="inputing">
                
                <label for="age" class="heading">Возраст</label>
                <input type="text" name="age" id="age" placeholder="Введите возраст" class="inputing">
                
                <label for="comment" class="heading">Опишите себя</label>
                <textarea name="comment" id="comment" cols="30" rows="10" placeholder="Кратко опишите себя"></textarea>
            </div>
            <p class="day_title">Выберите, в какой день Вам удобно проходить практику</p>
            <ul type="day_info" class="checking">
                <li class="day_info">
                    <input type="radio" id="day" name="monday" onMouseDown="this.isChecked=this.checked;"  onClick="this.checked=!this.isChecked;"  value="1"/>
                    <label for="day">Понедельник</label>
                </li>
                <li class="day_info">
                    <input type="radio" id="day" name="tuesday" onMouseDown="this.isChecked=this.checked;"  onClick="this.checked=!this.isChecked;"  value="1"/>
                    <label for="day">Вторник</label>
                </li>
                <li class="day_info">
                    <input type="radio" id="day" name="wednesday" onMouseDown="this.isChecked=this.checked;"  onClick="this.checked=!this.isChecked;"  value="1"/>
                    <label for="day">Среда</label>
                </li>
                <li class="day_info">
                    <input type="radio" id="day" name="thursday" onMouseDown="this.isChecked=this.checked;"  onClick="this.checked=!this.isChecked;"  value="1"/>
                    <label for="day">Четверг</label>
                </li>
                <li class="day_info">
                    <input type="radio" id="day" name="friday" onMouseDown="this.isChecked=this.checked;"  onClick="this.checked=!this.isChecked;"  value="1"/>
                    <label for="day">Пятница</label>
                </li>
                <li class="day_info">
                    <input type="radio" id="day" name="saturday" onMouseDown="this.isChecked=this.checked;"  onClick="this.checked=!this.isChecked;"  value="1"/>
                    <label for="day">Суббота</label>
                </li>
                <li class="day_info">
                    <input type="radio" id="day" name="sunday" onMouseDown="this.isChecked=this.checked;"  onClick="this.checked=!this.isChecked;"  value="1"/>
                    <label for="day">Воскресенье</label>
                </li>
            </ul>
            <button type="submit">Отправить</button>
        </div>
    </form>
</div>
</body>
</html>
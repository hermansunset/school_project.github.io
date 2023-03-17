<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $name = $_POST['name'];
        $number = $_POST['number'];
        $age = $_POST['age'];
        $comment = $_POST['comment'];
        $monday = isset($_POST['monday']);
        $tuesday = isset($_POST['tuesday']);
        $wednesday = isset($_POST['wednesday']);
        $thursday = isset($_POST['thursday']);
        $friday = isset($_POST['friday']);
        $saturday = isset($_POST['saturday']);
        $sunday = isset($_POST['sunday']);
        $name = htmlspecialchars($name);
        $number = htmlspecialchars($number);
        $age = htmlspecialchars($age);
        $comment = htmlspecialchars($comment);
        $monday = htmlspecialchars($monday);
        $tuesday = htmlspecialchars($tuesday);
        $wednesday = htmlspecialchars($wednesday);
        $thursday = htmlspecialchars($thursday);
        $friday = htmlspecialchars($friday);
        $saturday = htmlspecialchars($saturday);
        $sunday = htmlspecialchars($sunday);
        $file = fopen('form_results.txt', 'a');
        fwrite($file, '/Имя:');
        fwrite($file, $name);
        fwrite($file, ', номер телефона: ');
        fwrite($file, $number);
        fwrite($file, ', возраст: ');
        fwrite($file, $age);
        fwrite($file, ', удобные дни: ');
        if ($monday == '1') {
            fwrite($file, 'Понедельник, ');
        }
        if ($tuesday == '1') {
            fwrite($file, 'Вторник, ');
        }
        if ($wednesday == '1') {
            fwrite($file, 'Среда, ');
        }
        if ($thursday == '1') {
            fwrite($file, 'Четверг, ');
        }
        if ($friday == '1') {
            fwrite($file, 'Пятница, ');
        }
        if ($saturday == '1') {
            fwrite($file, 'Суббота, ');
        }
        if ($sunday == '1') {
            fwrite($file, 'Воскресенье, ');
        }
        fwrite($file, 'описание: ');
        fwrite($file, $comment);
        fwrite($file, '/ ');
    ?>
    <p>Здравствуйте, <?php echo $name ?></p>
    <p>В скором времени вам позвонит гуру</p>
</body>
</html>
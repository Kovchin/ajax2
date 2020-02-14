<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax</title>
</head>

<body>
    <h1>Программа тестирования технологии AJAX</h1>
    <hr>
    <h2>Форма 1</h2>
    <form action="form1.php" method="post">
        <input type="text" name="login" required id="login">
        <input type="text" name="password" required placeholder="password" id="password">
        <input type="submit" value="Отправить">
    </form>
    <hr>
    <h2>Форма 2</h2>
    <form action="form2.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="Отправить">
    </form>
    <hr>
    <a href="https://youtu.be/gJLnuO0j1ho?t=416">Остановился на этом месте</a>
    <script src="./js/form.js"></script>
</body>

</html>
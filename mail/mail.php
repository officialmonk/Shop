<?php header("Content-Type: text/html; charset=UTF-8");?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />     
        <title>Test</title>
        <link rel="stylesheet" href="form.css">
    </head>
    <body>
<section>
    <form action="submit.php" method="post">
        <input type="text" name="email" placeholder="Email" autocomplete="off"><br>
        <input type="text" name="name" placeholder="Имя" autocomplete="off"><br>
        <input type="text" name="phone" placeholder="Телефон" autocomplete="off"><br>
        <textarea name="message" id="" cols="30" rows="10" placeholder="Сообщение"></textarea><br>
        <input class="btn" type="submit" value="Отправить">
    </form>
        </section>
</body>
</html>
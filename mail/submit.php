<?php header("Content-Type: text/html; charset=UTF-8");?>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />     
        <title>Test</title>
        <link rel="stylesheet" href="form.css">
    </head>
    <body>
<section><?php 
    if((!empty($name)) && !empty($email) && !empty($message)){
    
    $headers = 'From: Денис Хуткий <br/>';
    $headers .= 'Reply-to: genadean@gmail.com';
    $theme = 'Новое сообщение';
    
    $letter = "Данные сообщение: <br/>";
    $letter .="Имя: ".$name."<br/>";
    $letter .="Email: ".$email."<br/>";
    $letter .="Телефон: ".$phone."<br/>";
    $letter .='Сообщение:  <br/>'.$message;
     mail('example@gmail.com', $theme, $letter, $headers);
    ?>
    <h1>Вы отправили письмо</h1>
    <div class="info">
    <h2>
        <?php echo $letter; ?>
    </h2>
    </div>
    <?php    

}else{
?><div class="error">        
    <h1><?php echo 'Заполните форму';?></h1>
    </div> 
    <?php
}?>

</section>
</body>
</html>

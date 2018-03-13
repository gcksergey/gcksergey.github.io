<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sending message</title>
	<meta http-equiv="refresh" content="3; url=/index.html"> <!-- Редирект на главную страницу -->
</head>
<body>
	<div class="loader">
		<div class="center">
			<h1 style="text-align: center;">Message has been sent. <br> wait for redirection...</h1>
		</div>
	</div>
</body>
</html>

<?php
 	$name = $_POST['name']; // input name
 	$subject = $_POST['subject']; // input phone
  $email = $_POST['email']; // input phone
 	$message = $_POST['message']; // input phone

	$message = "Новый Отзыв".PHP_EOL."Имя: ".$name.PHP_EOL."Тема: ".$subject.PHP_EOL."Email: ".$email.PHP_EOL."Текст: ".$message;

	send(301181471,$message); // id беседы с заказчиком

	function send($id , $message) {
    $url = 'https://api.vk.com/method/messages.send';
    $params = array(
      'user_id' => $id,    // Кому отправляем
      'message' => $message,   // Что отправляем
      'access_token' => 'c745bbcc34c9b2db198fa2e89816139516b554b37030eda0cd72fb26f83432d66fa73985806c729984123',  
      'v' => '5.62',
    );

    $result = file_get_contents($url, false, stream_context_create(array(
        'http' => array(
          'method'  => 'POST',
          'header'  => 'Content-type: application/x-www-form-urlencoded',
          'content' => http_build_query($params)
        )
    )));
	}
?>

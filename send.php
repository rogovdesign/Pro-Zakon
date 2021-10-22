<?
 
if(isset($_POST["name"]))
{
        if(isset($_POST["name"]))
        {
                $name = $_POST["name"];
        }
        if(isset($_POST["tel"]))
        {
                $phone= $_POST["tel"];
        }
        if(isset($_POST["text"]))
        {
                $body = $_POST["text"];
        }
 
        if($name=="" or $phone=="" or $body=="")
        { // Проверяем на заполненность всех полей.
                echo "Пожалуйста, заполните все поля";
        }
        else
        {
                $ip=$_SERVER["REMOTE_ADDR"]; // Вычисляем ip пользователя
                $brose=$_SERVER["HTTP_USER_AGENT"]; // Вычисляем браузер пользователя
                $to = "rogov.v.design@yandex.ru"; // Ваш email адрес
                $subject = "Сообщение c сайта a-devel.com"; // тема письма
                $headers .= "Content-Type: text/html;
                ";
                $headers .= "Отправитель: Посетитель сайта"; // Отправитель письма
                $message = "
                Имя: $name<br>
                Телефоны: $phone<br>
                Текст: $body<br><br>
 
                IP отправителя: $ip<br>
                Браузер отправителя: $brose<br>
                ";
 
                $send = mail($to, $subject, $message, $headers);
                if ($send == "true")
                {
                        echo "Ваше сообщение отправлено. Мы ответим вам в ближайшее время.";
                }
                else
                {
                        echo "Не удалось отправить, попробуйте снова!";
                }
        }
}
 
?>
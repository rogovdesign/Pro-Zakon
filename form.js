$(document).ready(function()
{
        $("#btn_submit").click(function()
        {
                $("#erconts").fadeIn(500);
                $.ajax(
                {
                        type: "POST",
                        url: "send.php", // Адрес обработчика
                        data: $("#callbacks").serialize(),
                        error:function()
                        {
                                $("#erconts").html("Произошла ошибка!");
                        },
                        beforeSend: function()
                        {
                                $("#erconts").html("Отправляем данные...");
                        },
                        success: function(result)
                        {
                                $("#erconts").html(result);
                                checkThis();
                        }
                });
        return false;
        });
});
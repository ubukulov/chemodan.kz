$(function () {

    $('.callback-close').on('click', function () {
        $('.callback-close').hide();
        $('#popup__toggle').hide();
    });

    $('#popup__toggle').on('click', function () {
        swal({
            title: "",
            text: "Введите Ваш номер телефона и мы Вам перезвоним",
            type: "input",
            inputType: "text",
            showCancelButton: true,
            closeOnConfirm: false,
            confirmButtonText: "Позвоните мне!",
            cancelButtonText: "Отмена",
        }, function (phone) {
            if (phone) {
                $.get('http://sip.chemodan.kz/callback/callback.php?phone='+phone);
                swal({
                        title: "Ожидайте вызов!",
                        text: "Оператор уже обслуживает Ваш вызов.",
                        type: "success",
                        confirmButtonText: "OK"
                    }
                );
            }
            console.log(phone);
        });
        $("#phone1").css('font-size', '25pt');
        $("#phone1").css('height', '55px');
        $("#phone1").css('color', 'gray');
        $("#phone1").css('text-align', 'center');
        $("#phone1").css('margin-bottom', '20px');
        $("#phone1").mask("+7 (999) 999-9999");
    });
});
$(document).ready(function () {

    $('#phone').inputmask("+7 (999) 999-99-99");
    $('#phone-mask').inputmask("+7 (999) 999-99-99");
    $("#date").inputmask("d/m",{ "clearIncomplete": true });
    $("#time").inputmask("h:s");


    $("#callback").validate({
        rules: {
            phone: {
                required: true,
                minlength: true
            }
        },
        messages: {
            phone: {
                required: "Вы не ввели номер!"
            }
        },
        errorLabelContainer: $("#callback div.error"),
        submitHandler: function (form) {
            /*$.ajax({
                type: "POST",
                url: "form.php",
                data: $(form).serialize(),
                success: function () {*/
                    $(form).html("<div id='message'></div>");
                    $('#message').html("<h2>Ваша заявка отправлена!</h2>")
                        .hide()
                        .fadeIn(1500, function () {
                            $('#message').append("<img id='checkmark' src='images/Ok.png' />");
                        //});
                //}
            });
            return false;
        }
    });

    $("#order").validate({
        rules: {
            name: 'required',
            phone: {
                required: true,
                minlength: true
            },
            address: 'required',
            date: 'required',
            time: 'required',
        },
        messages: {
            name: {
                required: "Вы не ввели свое имя!"
            },
            phone: {
                required: "Вы не ввели номер!"
            },
            address: {
                required: "Вы не ввели свой адрес!"
            },
            date: {
                required: "Вы не ввели дату!"
            },
            time: {
                required: "Вы не ввели время!"
            }
        },
        submitHandler: function (form) {
            /*$.ajax({
             type: "POST",
             url: "form.php",
             data: $(form).serialize(),
             success: function () {*/
            $('#message').html("<h2>Ваша заявка отправлена!</h2>")
                .hide()
                .fadeIn(1500, function () {
                    $('#message').append("<img id='checkmark' src='images/Ok.png' />");
                    //});
                    //}
                });
            $(form)[0].reset();
            return false;
        }
    });
});
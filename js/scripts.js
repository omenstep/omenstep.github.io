$(document).ready(function () {
    $('.form-button').magnificPopup({
        type: 'inline',
        preloader: false,
        focus: '#name',

        callbacks: {
            beforeOpen: function () {
                if ($(window).width() < 700) {
                    this.st.focus = false;
                } else {
                    this.st.focus = '#name';
                }
            }
        }
    });
    $('#phone').inputmask("+7 (999) 999-99-99");

    $("#callback-form").validate({
        rules: {
            phone: {
                required: true,
                minlength: true
            }
        },
        messages: {
            phone: {
                required: "Вы не ввели номер!",
            }
        },
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
});
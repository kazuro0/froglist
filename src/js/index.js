$(document).ready (function() {
    $("#button").click(function() {
        var user = $("#user").val ();
        var pass = $("#pass").val ();
        var fail = "";

        if (user.length == 0 || pass.length == 0) fail = "Заполните данные";
        else if (user.length < 4 || user.length > 20) fail = "Недопустимая длина логина";
        else if (pass.length < 4 || pass.length > 25) fail = "Недопустимая длина пароля";

        if (fail != "") {
            $('#span').html (fail);
            $('#span').show ();
            return false;
        }
    });
});